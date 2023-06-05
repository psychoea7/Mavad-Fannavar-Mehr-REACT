import React from "react";
import "./Footer.css";
import FooterLogo from "../assets/images/logo55.png";
import { Container, Row, Col } from "react-bootstrap";

function Footer() {
  return (
    <footer>
      <Container fluid className="footer p-5">
        <Row>
          <Col md={6} sm={12} className="footer__contact">
            <img src={FooterLogo} alt="footer-logo" />
            <p className="footer-address">
              البرز، کمالشهر، جاده قدیم هشتگرد، شهرک الهیه، نبش گلستان چهارم،
              پلاک ۱۰۱
            </p>
            <span className="footer-landline">
              تلفن ثابت :<a href="tel:02634700795"> ۰۲۶۳۴۷۰۰۷۹۵</a>
            </span>
            <span className="footer-email">
              ایمیل : 
               <a href="mailto:mavadfannavarmehr@gmail.com"> 
                 mavadfannavarmehr@gmail.com  
              </a>
            </span>
          </Col>
          <Col
            md={6}
            sm={12}
            className="footer__socials"
          >
              <p>راه های ارتباطی</p>
            <ul>
              <li>
                <a href="tel:09122285923">
                  <i className="fas fa-phone"></i>
                </a>
              </li>
              <li>
                <a href="https://wa.me/+989122285923">
                  <i className="fab fa-whatsapp"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i className="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i className="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </Col>
          <Col md={12} sm={12} className="copy-right">
            <p>
              کلیه حقوق متعلق به<span class="mx-1"> مواد فنّاور مهر </span> می
              باشد.
            </p>
          </Col>
        </Row>
      </Container>
    </footer>
  );
}

export default Footer;
