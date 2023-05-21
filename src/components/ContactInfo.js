import React from "react";
import "./ContactInfo.css";

function ContactInfo() {
  return (
    <div className="contactScreen__Info">
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
  );
}

export default ContactInfo;
