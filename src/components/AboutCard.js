import React from "react";
import "./AboutCard.css";
import PlasmaImage from "../assets/images/bg.jpg";
import { Col, Container, Row } from "react-bootstrap";

function AboutCard() {
  return (
    <Container className="aboutScreen__container">
      <Row md={2} className="aboutScreen__content">
        <Col xs={12} className="aboutScreen__introductionText">
        <h2>مواد فنّاور مهر</h2>
          <p>
            شرکت «مواد فنّاور مهر» در سال 1400 تأسیس شد. هرچند از تأسیس شرکت
            زمان زیادی نمی‌گذرد، بیش از 20 سال سابقهٔ علمی و صنعتی مدیر مجموعه
            در زمینهٔ عملیات حرارتی و پوشش (خصوصاً پوشش‌های پلاسمایی)، پشتوانهٔ
            حرکت روبه‌جلو در شرکت است. زمینهٔ فعالیت شرکت به‌طورکلی عملیات
            حرارتی و پوشش‌دهی فلزات با تأکید ویژه بر «ساخت تجهیزات پوشش‌دهی
            پلاسمایی و ارائهٔ خدمات در این زمینه» است. هدف اصلی و رسالت ما
            توسعهٔ روش‌های نوین عملیات حرارتی و پوشش‌دهی با رویکرد علمی در کشور
            بوده و با پروژه‌های تحقیق و توسعه، به گسترش فنّاوری‌های خود و تقویت
            موقعیتمان در صنعت ادامه می‌دهیم. در آینده، بیش از پیش با خدمات جامع
            از مشتریان خود حمایت کرده و آن‌ها را با بالاترین کیفیت متقاعد خواهیم
            کرد.
          </p>
        </Col>
        <Col xs={12} className="aboutScreen__image">
          <img className="img-fluid" src={PlasmaImage} alt="" />
        </Col>
      </Row>
    </Container>
  );
}

export default AboutCard;
