import React from "react";
import "./Footer.css";
import FooterLogo from "../assets/images/logo55.png";

function Footer() {
  return (
    <footer>
      <div class="container-fluid footer">
        <div class="row pt-5 pb-1 d-flex justify-content-center text-center">
          <img src={FooterLogo} alt="footer-logo" />
          <p class="footer-address">
            البرز، کمالشهر، جاده قدیم هشتگرد، شهرک الهیه، نبش گلستان چهارم، پلاک
            ۱۰۱
          </p>
          <ul>
            <li>
              <a href="#">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
          <p class="copy-right">
            کلیه حقوق متعلق به<span class="mx-1"> مواد فنّاور مهر </span> می
            باشد.
          </p>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
