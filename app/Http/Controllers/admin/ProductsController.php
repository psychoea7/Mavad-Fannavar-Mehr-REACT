<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        return view('admin.products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $attributes = Attribute::all();
        return view('admin.products.create', compact('categories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'categories' => 'required',
            'attribute_ids' => 'required',
            'primary_image' => 'required|mimes:jpg,jpeg,png',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png',
            'description' => 'required',
            'is_active' => 'required'
        ]);

        try {

            DB::beginTransaction();

                $getImageController = new uploadImageController();

                $uploadImages = $getImageController->upload($request->primary_image , $request->images);

                $product = Product::create([
                    'name' => $request->name,
                    'category_id' => $request->categories,
                    'slug' => $request->slug,
                    'primary_image' => $uploadImages['primary'],
                    'description' => $request->is_active
                ]);

                foreach ($uploadImages['images'] as $image) {
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $image
                    ]);
                }

                foreach ($request->attribute_ids as $attribute) {
                    ProductAttribute::create([
                        'product_id' => $product->id,
                        'attribute_id' => $attribute
                    ]);
                }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();

            alert()->error('خطا در ایجاد محصول', $exception->getMessage())->persistent('باشه');
            return redirect()->back();
        }


        alert()->success('محصول با موفقیت ایجاد شد', '');
        return redirect()->route('admin.products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $attr = $product->attributes()->with('attribute')->get();
        $images = $product->images()->get();
        return view('admin.products.show' , compact('product' , 'attr' , 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
