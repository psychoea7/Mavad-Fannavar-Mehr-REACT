import React from "react";
import "./ContactForm.css";
import { useForm } from "react-hook-form";

function ContactForm() {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm();
  const onSubmit = (data) => console.log(data);

  return (
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
          {...register("company_name", { maxLength: 100 })}
        />

        <input
          type="text"
          placeholder="پست الکترونیک"
          {...register("email", { required: true, pattern: /^\S+@\S+$/i })}
        />
        {errors.email && <span className="text-danger">لطفاً یک آدرس ایمیل معتبر وارد کنید.</span>}

        <input
          type="tel"
          placeholder="تلفن همراه"
          {...register("mobile_number", {
            required: true,
            minLength: 6,
            maxLength: 12,
          })}
        />
        {errors.mobile_number && (
          <span className="text-danger">تلفن همراه باید بین 6 تا 12 رقم باشد.</span>
        )}

        <textarea placeholder="پیام" {...register("message")} />

        <input type="submit" value="ارسال" />
      </form>
    </div>
  );
}

export default ContactForm;
