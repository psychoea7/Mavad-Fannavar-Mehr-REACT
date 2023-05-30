import React from "react";
import "./ContactInfo.css";

function ContactInfo() {
  return (
    <div className="contactScreen__Info">
      <h5>آدرس</h5>
      <p>
        البرز، کمالشهر، جاده قدیم هشتگرد، شهرک الهیه، نبش گلستان چهارم، پلاک ۱۰۱
      </p>
      <span>
        کد پستی :<p> ۳۱۴۵۶۱۴۱۶۶</p>
      </span>
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
  );
}

export default ContactInfo;
