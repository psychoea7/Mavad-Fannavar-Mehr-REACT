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
  console.log(errors);
  return (
    <>
      <div className="contactScreen__form">
        <h2>ارتباط با ما</h2>
        <span>نظرات خود را با ما در میان بگذارید.</span>
        <form onSubmit={handleSubmit(onSubmit)}>
          <input
            type="text"
            placeholder="نام"
            {...register("First name", { required: true, maxLength: 80 })}
          />
          <input
            type="text"
            placeholder="نام خانوادگی"
            {...register("Last name", { required: true, maxLength: 100 })}
          />
          <input
            type="text"
            placeholder="پست الکترونیک"
            {...register("Email", { required: true, pattern: /^\S+@\S+$/i })}
          />
          <input
            type="tel"
            placeholder="تلفن همراه"
            {...register("Mobile number", {
              required: true,
              minLength: 6,
              maxLength: 12,
            })}
          />
          <textarea placeholder="پیام" {...register("Message", {})} />

          <input type="submit" value="ارسال" />
        </form>
      </div>
    </>
  );
}

export default ContactForm;
