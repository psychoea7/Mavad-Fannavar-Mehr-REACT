@extends('admin.layouts.master')
@section('content')
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        <main class="bmd-layout-content">
            <div class="container-fluid ">

                <!-- content -->
                <!-- breadcrumb -->

                <div class="row  m-1 pb-4 mb-3 ">
                    <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                        <div class="page-header breadcrumb-header ">
                            <div class="row align-items-end ">
                                <div class="col-lg-8">
                                    <div class="page-header-title text-left-rtl">
                                        <div class="d-inline">
                                            <h3 class="lite-text ">داشبورد</h3>
                                            <span class="lite-text ">گزارش ها و آمار</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">داشبورد</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- alert -->
                <!-- <div class="row m-1 pb-3 ">

                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                      <div class="alert alert-danger alert-shade alert-dismissible fade show" role="alert">
                       <strong>Danger!</strong> Your Disk is Low.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                       </button>
                      </div>
                     </div>

                    </div> -->
                <!-- widget -->
                <div class="row m-1 mb-2">
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY   "><i
                                class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="mb-1 c-first">امتیاز</span>
                            <span>30%</span>
                            <p class="mt-3 mb-1 text-right"><i class="far fas fa-wallet mr-1 c-first"></i> در حال
                                پیشرفت</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY    "><i
                                class="fab far fa-clock b-second" aria-hidden="true"></i>
                            <span class="mb-1 c-second">بازدید</span>
                            <span>27</span>
                            <p class="mt-3 mb-1 text-right"><i class="far fas fa-wifi mr-1 c-second"></i>در حال پیشرفت
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY   "><i
                                class="fab far fa-comments b-third" aria-hidden="true"></i>
                            <span class="mb-1 c-third">پیام ها</span>
                            <span>5</span>
                            <p class="mt-3 mb-1 text-right"><i class="fab fa-whatsapp mr-1 c-third"></i>در حال پیشرفت
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY   "><i
                                class="fab far fa-gem b-forth" aria-hidden="true"></i>
                            <span class="mb-1 c-forth">منابع</span>
                            <span>55,223</span>
                            <p class="mt-3 mb-1 text-right"><i class="fab fa-bluetooth mr-1 c-forth"></i>در حال پیشرفت
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row m-2 mb-1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                        <div class="alert text-dir-rtl text-right  alert-third alert-shade alert-dismissible fade show"
                            role="alert">
                            <strong>هشدار!</strong> این یک متن هشدار است.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="row m-1">
                    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                        <div class="card shade h-100">
                            <div class="card-body">
                                <h5 class="card-title">نمودار بار/خط</h5>

                                <hr>
                                <canvas id="myChart5"></canvas>
                                <hr class="hr-dashed">
                                <p class="text-center c-danger">یک نمونه از نمودار</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 p-2">
                        <div class="card flat f-first h-100">
                            <div class="card-body">
                                <h5 class="card-title">بررسی قیمت ارز</h5>

                                <hr>
                                {{-- <a class="weatherwidget-io" href="https://forecast7.com/en/37d5545d08/urmia/"
                                    data-label_1="URMIA" data-label_2="WEATHER" data-icons="Climacons Animated"
                                    data-days="5" data-textcolor="#fafafaad"></a> --}}

                                <div style="display: flex;flex-wrap: nowrap">
                                    <div style="text-align: center;padding:0 2%">
                                        <p style="text-align: center; color: green;font-size: 18px">{{ $dollar->name }}</p>
                                        <p>آخرین قیمت به ریال: <span style="color: green">{{ $dollar->price }}</span></p>
                                        <p>بالاترین نوسان: + <span style="color: green">{{ $dollar->High }}</span></p>
                                        <p>پایین ترین نوسان: - <span style="color: red">{{ $dollar->low }}</span></p>
                                    </div>

                                    <div style="text-align: center;padding:0 10%">
                                        <p style="text-align: center; color: gold;font-size: 18px">{{ $gold->name }}</p>
                                        <p>آخرین قیمت به ریال: <span style="color: gold">{{ $gold->price }}</span></p>
                                        <p>بالاترین نوسان: + <span style="color: green">{{ $gold->High }}</span></p>
                                        <p>پایین ترین نوسان: - <span style="color: red">{{ $gold->low }}</span></p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mb-2 m-2">
                    <div class="col-xl-8 col-md-6 col-sm-6 p-2">
                        <div class="box-dash h-100 pastel animate__animated animate__flipInY b-second   "><i
                                class="fab far fa-clock" aria-hidden="true"></i>

                            <span>27</span>
                            <hr class="m-0 ">
                            <span>بازدید</span>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6 p-2">
                        <div class="box-card h-100 flat f-main animate__animated animate__flipInY   ">

                            <iframe
                                src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FTehran"
                                width="100%" height="115" frameborder="0" seamless></iframe>
                        </div>
                    </div>



                </div>
                <div class="row m-1">
                    <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 p-2">
                        <div class="card shade h-100">
                            <div class="card-body">
                                <h5 class="card-title">نمودار دایره ای</h5>

                                <hr>
                                <canvas id="myChart4" width="10" height="11"></canvas>
                                <hr class="hr-dashed">
                                <p class="text-center c-danger">نمونه ای از نمودار</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                        <div class="card shade h-100">
                            <div class="card-body">
                                <h5 class="card-title">اطلاعات در قالب جدول</h5>

                                <hr>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ردیف</th>
                                            <th scope="col">نام</th>
                                            <th scope="col">نام خانوادگی</th>
                                            <th scope="col">منشن</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>مارک</td>
                                            <td>لنترن</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>جیکوب</td>
                                            <td>رایان</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>لری</td>
                                            <td>اسمیت</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>جیکوب</td>
                                            <td>رایان</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>لری</td>
                                            <td>اسمیت</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>جیکوب</td>
                                            <td>رایان</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>لری</td>
                                            <td>اسمیت</td>
                                            <td>@twitter</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="row m-1">
                    <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                        <div class="alert col-12  alert-success alert-shade-white bd-side alert-dismissible fade show"
                            role="alert">
                            <strong>هشدار!</strong>این یک متن هشدار است.

                        </div>
                        <div id="accordion " class="accordion card shade outlined o-forth w-100">
                            <div class="">
                                <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link c-grey w-100 m-0 text-right" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            عنوان شماره یک
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                                        ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
                                        شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای
                                        طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،
                                        در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط
                                        سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی
                                        سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link c-grey collapsed w-100 m-0 text-right"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            عنوان شماره دو
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                                        ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
                                        شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای
                                        طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،
                                        در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط
                                        سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی
                                        سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link c-grey collapsed w-100 m-0 text-right"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            عنوان شماره سه
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                        لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                                        ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
                                        شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای
                                        طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،
                                        در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط
                                        سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی
                                        سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 p-2">
                        <div class="card shade h-100">
                            <div class="card-body">
                                <h5 class="card-title">نمودار قطبی</h5>

                                <hr>
                                <canvas id="myChart2" width="10" height="13"></canvas>

                            </div>

                        </div>
                    </div>

                </div>





            </div>
        </main>
    </div>

    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    {{-- <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
        // var getData = @json($visitChart);
        var arrayVisit = [];
        getData.forEach(element => {
            arrayVisit.push(element.total);
        });
        var mixChart = document.getElementById('myChart5');
        var mixedChart = new Chart(mixChart, {
            type: 'line',

            data: {
                labels: ['Red', 'Green', 'Yellow', 'Grey', 'Blue', 'Red', 'Green', 'Yellow', 'Grey', 'Blue'],
                datasets: [{
                    label: 'Line Dataset',
                    data: arrayVisit,

                    // Changes this dataset to become a line
                }],
            },
            options: {}
        });
    </script> --}}
@endsection
