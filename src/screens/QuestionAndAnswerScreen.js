import React from "react";
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";
import { Accordion, Container } from "react-bootstrap";
import AccordionItem from "../components/AccordionItem";
import "../components/AccordionItem.css";

function QuestionAndAnswerScreen() {
  return (
    <div>
      <Navigation />
      <Container className="questionAndAnswerScreen__container mt-5">
        <h4>سؤال‌های رایج</h4>
        <Accordion defaultActiveKey="0" className="custom-accordion">
          <AccordionItem
            eventKey="0"
            title="آیا قطعات در فرایند نیتروژن‌دهی پلاسمایی دچار رشد یا انقباض ابعادی می‌شوند؟"
            text="معمولاً قطعات برحسب شرایط فرایند، رشد ابعادی اندکی خواهند داشت. میزان رشد به مقدار ضخامت لایه سفید (ترکیبی) ایجاد‌شده حین فرایند بستگی دارد. براساس یک قانون کلی، میزان رشد حدود 70 درصد ضخامت لایه سفید می‌باشد."
          />
          <AccordionItem
            eventKey="1"
            title="برای قطعاتی که پیش از نیتروژن‌دهی روی آن‌ها جوشکاری انجام شده است، چه اتفاقی می‌افتد؟"
            text="ممکن است آلیاژ استفاده‌شده برای جوشکاری نسبت به فولاد پایه واکنش متفاوتی در نیتروژن‌دهی نشان دهد. بنابراین، ضروری است که پیش از انجام کار، مشخصات مواد جوشکاری استفاده‌شده را در اختیار این واحد قرار دهید."
          />
          <AccordionItem
            eventKey="2"
            title="نیتروژن‌دهی پلاسمایی چقدر طول می‌کشد؟"
            text="برحسب آلیاژ استفاده‌شده در ساخت قطعه و نیازمندی‌های عملکردی قطعه، فرایند نیتروژن‌دهی پلاسمایی از چند ساعت تا چند روز طول می‌کشد."
          />
          <AccordionItem
            eventKey="3"
            title="پس از نیتروژن‌دهی پلاسمایی، چه کاری باید روی قطعات انجام دهیم؟"
            text="نیتروژن‌دهی پلاسمایی عموماً روی قطعات نهایی‌شده انجام می‌شود و با توجه به کیفیت سطحی خوب، معمولاً نیازی به هیچ‌گونه عملیات تکمیلی وجود ندارد. در صورت نیاز، یک پولیش سبک، بدون آسیب به لایة ایجادشده، سطح را مثل حالت اول براق می‌کند."
          />
        </Accordion>
      </Container>
      <Footer />
    </div>
  );
}

export default QuestionAndAnswerScreen;
