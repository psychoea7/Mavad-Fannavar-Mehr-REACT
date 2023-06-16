import React from "react";
import axios from 'axios';
import "./ContactForm.css";
import { useForm } from "react-hook-form";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

const ContactForm = () => {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();

  const onSubmit = async (data) => {
    try {
      const response = await axios.post(
        "https://app.mavad-fannavar-mehr.ir/api/contactUs", 
        data
      );
    
      console.log(response.data); // Log the response data

      if (response.status === 200) {
        toast.success("ارسال فرم با موفقیت انجام شد!");
      } else {
        toast.error("ارسال فرم با خطا مواجه شد.");
      }

    } catch (error) {
      console.error(error);
      toast.error("ارسال فرم با خطا مواجه شد.");
    }
  };

  return (
    <>
      <div className="contactScreen__form">
        <h2>ارتباط با ما</h2>
        <span>نظرات خود را با ما در میان بگذارید.</span>
        <form onSubmit={handleSubmit(onSubmit)}>
          <input
            type="text"
            placeholder="نام و نام خانوادگی"
            {...register("name", { required: true, maxLength: 80 })}
          />
          {errors.name && <span className="text-danger">وارد کردن نام الزامی است.</span>}

          <input
            type="text"
            placeholder="نام شرکت"
            {...register("company", { maxLength: 100 })}
          />

          <input
            type="email"
            placeholder="پست الکترونیک"
            {...register("email", { required: true, pattern: /^\S+@\S+$/i })}
          />
          {errors.email && (
            <span className="text-danger">لطفاً یک آدرس ایمیل معتبر وارد کنید.</span>
          )}

          <input
            type="tel"
            placeholder="تلفن همراه"
            {...register("phone", {
              required: true,
              minLength: 6,
              maxLength: 12,
            })}
          />
          {errors.phone && (
            <span className="text-danger">تلفن همراه باید بین 6 تا 12 رقم باشد.</span>
          )}

          <textarea placeholder="پیام" {...register("message")} />

          <input type="submit" value="ارسال" />
        </form>
      </div>

      <ToastContainer position="top-center" autoClose={3000} hideProgressBar />
    </>
  );
}

export default ContactForm;
