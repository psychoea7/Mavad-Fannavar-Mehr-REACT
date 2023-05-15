import React from "react";
import "./FactoryStructure.css";
import IsoLogo from "../assets/images/ISO9001-removebg-preview.png";

function FactoryStructure() {
  return (
    <div class="container-fluid plant-cons-section mt-5">
      <div class="row">
        <div class="col-md-6 col-sm-12 plant-cons-text">
          <h3>ساخت و ساز کارخانه</h3>
          <p class="mt-4">
            در توسعه و ساخت نیروگاه های تصفیه حرارتی، ما از تمام دانش و تجربه
            خود استفاده می کنیم. نتیجه تلاش ما گیاهی است که وظیفه درمانی خود را
            بدون اغماض انجام می دهد.
          </p>
          <p>
            حتی پس از راه اندازی، ما همچنان مخاطب شما هستیم و با این خدمات در
            خدمت شما هستیم:
          </p>
          <ul>
            <li>آموزش</li>
            <li>خدمات تعمیر</li>
            <li>تامین قطعات یدکی</li>
          </ul>
        </div>

        <div class="col-md-6 col-sm-12 plant-cons-row-1"></div>

        <div class="col-md-6 col-sm-12 plant-cons-row-2"></div>

        <div class="col-md-6 col-sm-12 plant-cons-text">
          <p>
            سیستم‌های توسعه‌یافته توسط ما با فردیت، طراحی سنجیده و طیف وسیعی از
            مزایای دیگر متقاعد می‌شوند:
          </p>
          <ul>
            <li>دمای پایین درمان</li>
            <li>مصرف انرژی کم</li>
            <li>عملیات ساده و شهودی</li>
            <li>فرآیند ایمن و سازگار با محیط زیست</li>
            <li>
              سخت شدن سطح انواع فولاد، از فولاد ملایم کم آلیاژ تا فولاد ضد زنگ
            </li>
          </ul>
          <div class="d-flex justify-content-around align-items-center pt-3">
            <p class="fs-5">گواهی بر اساس DIN ISO 9001</p>
            <img class="img-fluid" src={IsoLogo} alt="iso logo" />
          </div>
        </div>
      </div>
    </div>
  );
}

export default FactoryStructure;
