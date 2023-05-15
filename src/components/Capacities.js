import React from "react";
import "./Capacities.css";

function Capacities() {
  return (
    <div class="container-fluid capacities-section">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-6 col-sm-12">
            <h3>ظرفیت های ما</h3>
            <ul>
              <li>۱۲ سیستم نیتریدینگ پلاسما</li>
              <li>حداکثر اندازه جزء: ۱.۵۵۰ \ ۱.۷۰۰ میلی متر</li>
              <li>حداکثر وزن جزء: ۲ تن</li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-12 capacities-section-paragraphs">
            <p>
              چه سفارش کوچک و چه سری: تیم ما سفارش شما را به سرعت و با بالاترین
              کیفیت محقق خواهد کرد. در مجموع ده سیستم نیتریدینگ پلاسما مدرن برای
              تحقق فوری طیف گسترده ای از سفارشات موجود است. این بدان معناست که
              ما همچنین می‌توانیم سفارش‌های کوتاه‌مدت را در زمان‌بندی در هر
              زمانی پردازش کنیم.
            </p>
            <p>
              آیا نیاز دارید که قطعات کار فردا درمان شوند؟ مشکلی نیست - ما می
              توانیم آن را انجام دهیم!
            </p>
            <a class="main-btn" href="#">
              ارتباط با ما<i class="fas fa-phone-volume"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Capacities;
