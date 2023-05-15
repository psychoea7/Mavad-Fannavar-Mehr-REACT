import React from "react";
import "./Services.css";

function Services() {
  return (
    <div class="container-fluid services-section">
      <div class="container">
        <div class="row">
          <h3>خدمات ما</h3>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="service-text-box">
              <h4>نیتریدینگ یون پلاسما</h4>
              <p>
                به روشی کارآمد به سخت شدن سطوح کمک می کند و از سایش محافظت می
                کند...
              </p>
              <a href="#">بیشتر</a>
            </div>
            <div class="service-text-box mt-4">
              <h4>نیتروکربور کننده پلاسما</h4>
              <p>
                به ویژه برای عملیات سطحی قطعاتی که در معرض تنش شدید هستند مناسب
                است...
              </p>
              <a href="#">بیشتر</a>
            </div>
            <div class="service-text-box mt-4">
              <h4>اکسیداسیون</h4>
              <p>
                مقاومت در برابر خوردگی را پس از نیترید کردن پلاسما یا
                نیتروکربورسازی پلاسما بهبود می بخشد...
              </p>
              <a href="#">بیشتر</a>
            </div>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="service-text-box">
              <h4>سیستم های نیتریدینگ پلاسما</h4>
              <p>با مشخصات مختلف، متناسب با وظیفه درمانی شما...</p>
              <a href="#">بیشتر</a>
            </div>
            <div class="service-text-box mt-4">
              <h4>تضمین کیفیت</h4>
              <p>
                پایه و اساس استانداردهای بالای ما است و هر مرحله (کار) را همراهی
                می کند...
              </p>
              <a href="#">بیشتر</a>
            </div>
            <div class="service-text-box mt-4">
              <h4>تحقیق و توسعه</h4>
              <p>
                در زمینه فناوری مواد، توسعه مستمر خدمات ما را تضمین می کند...
              </p>
              <a href="#">بیشتر</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Services;
