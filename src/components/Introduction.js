import React from "react";
import "./Introduction.css";

function Introduction() {
  return (
    <div class="container mt-5 pt-md-5 pb-5">
      <div class="row">
        <div class="col-md-8 col-sm-12 introduction-text">
          <h5>درمان سطحی (در پلاسما)</h5>
          <h1>مواد فنّاور مهر</h1>
          <p class="mt-4">
            متبحر با تجربه. آینده نگر. با ما، شما در تمامی مسائل مربوط به عملیات
            سطحی با استفاده از نیتریدینگ پلاسما، نیتروکربورسازی پلاسما و اکسید
            کننده، شریک شایسته ای در کنار خود دارید. ما دانش و تخصص خود را نه
            تنها در عملیات حرارتی قراردادی، بلکه در توسعه و ساخت سیستم‌های
            نیتریدینگ پلاسما که به صورت جداگانه بر اساس نیازهای شما طراحی شده
            است، به کار می‌گیریم.
          </p>
        </div>

        <div class="col-md-4 col-sm-12 introduction-contact-box">
          <h5>ساعات کار</h5>
          <p>شنبه - پنجشنبه ۷:۰۰ - ۱۶:۳۰</p>
          <p>جمعه فقط با تعیین وقت قبلی</p>
          <h5>تماس</h5>
          <span>
            تلفن همراه :<a href="tel:09122285923"> ۰۹۱۲۲۲۸۵۹۲۳</a>
          </span>
          <span>
            تلفن ثابت :<a href="tel:02634700795"> ۰۲۶۳۴۷۰۰۷۹۵</a>
          </span>
          <span>
            ایمیل :
            <a href="mailto:mavadfannavarmehr@gmail.com">
              mavadfannavarmehr@gmail.com
            </a>
          </span>
        </div>
      </div>
    </div>
  );
}

export default Introduction;
