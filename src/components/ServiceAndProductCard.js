import React from "react";
import "./ServiceAndProductCard.css";
import { Col, Container } from "react-bootstrap";
import { Row } from "react-bootstrap";
import NitrogenPlasmaImageOne from "../assets/images/نیتروزن دهی پلاسمایی  - 4.jpg";
import NitrogenPlasmaImageTwo from "../assets/images/نیتروژن دهی پلاسمایی - 2.jpg";
import NitrogenPlasmaImageThree from "../assets/images/نیتروزن دهی پلاسمایی - 3.jpg";

function ServiceAndProductCard() {
  return (
    <Container className="servicesAndProducts__container">
      <Row className="servicesAndProducts__card">
        <h2>نیتروژن‌دهی پلاسمایی (Plasma Nitriding)</h2>
        <p>
          نیتروژن‌دهی (نیتراسیون-نیتراته) پلاسمایی - که با عنوان نیتروژن‌دهی
          یونی و سختکاری پلاسما نیز شناخته می‌شود - فرایندی ترمو شیمیایی است که
          عمدتاً به‌منظور افزایش مقاومت به سایش، خوردگی، و خستگی قطعات فلزی
          استفاده می‌شود. نیتروژن، تحت‌تأثیر گرما، به درون سطح نفوذ می‌کند که
          منجر به دگرگونی شیمیایی سطح فلز و تشکیل نیتریدهای فلزی در سطح فلز
          می‌گردد. فرایند نیتروژن‌دهی با روش‌های حمام نمک و گازی نیز انجام
          می‌شود؛ اما از میان این روش‌ها، نیتروژن‌دهی پلاسمایی به‌دلایل گوناگون
          از جایگاه ویژه‌ای برخوردار است.
        </p>
        <p>
          نیتروژن‌دهی پلاسمایی در یک محفظهٔ خلأ انجام می‌شود. قطعات کاتد و
          محفظه آند را تشکیل می‌دهد. پس از ایجاد خلأ اولیه در محفظه، گازهای
          عملیاتی (نیتروژن، هیدروژن، آرگون، و متان) وارد محفظه می‌شوند. با ایجاد
          یک میدان الکتریکی بین قطعات و دیوارهٔ محفظه، گازها یونیزه و پلاسما
          تشکیل می‌شود. یون‌های نیتروژن در جهت قطعات (کاتد) شتاب گرفته و با
          انرژی بالایی به سطوح قطعات برخورد می‌کنند. بمباران یونی باعث گرم‌‌شدن،
          تمیزشدن، و جذب نیتروژن در سطوح قطعات می‌شود.
        </p>
        <Row md={3} className="servicesAndProducts__image">
          <Col xs={12}>
            <img src={NitrogenPlasmaImageTwo} alt="" />
          </Col>
          <Col xs={12}>
            <img src={NitrogenPlasmaImageOne} alt="" />
          </Col>
          <Col xs={12}>
            <img src={NitrogenPlasmaImageThree} alt="" />
          </Col>
        </Row>
        <ul>
          <h3>مزیت های نیتروژن‌دهی پلاسمایی</h3>
          <li> دمای پایین فرایند </li>
          <li> تغییر ابعادی بسیار کم</li>
          <li> امکان نیتروژن‌دهی انتخابی</li>
          <li>
            {" "}
            امکان فعال‌سازی و تمیزکاری سطوح در پلاسما که منجر به افزایش کیفیت
            لایهٔ ایجادشده می‌شود
          </li>
          <li>
            {" "}
            کمتربودن تخلخل و شکنندگی لایهٔ ایجادشده نسبت به لایه‌های تشکیل‌شده
            در روش‌های گازی و حمام نمک
          </li>
          <li> امکان سازگار‌کردن ساختار لایه با تنش واردشده به قطعه</li>
          <li> زمان پایین‌تر فرایند نسبت به روش گازی</li>
          <li> عدم نیاز به تمیزکاری و پولیش نهایی به‌علت کیفیت بالای سطحی</li>
          <li> امکان انجام فرایند روی فولادهای ضد زنگ </li>
          <li> سازگاری با محیط زیست</li>
        </ul>
      </Row>
    </Container>
  );
}

export default ServiceAndProductCard;
