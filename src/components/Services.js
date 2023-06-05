import React from "react";
import "./Services.css";
import { Link } from "react-router-dom";


function Services() {
  return (
    <div class="container-fluid services-section">
      <div class="container">
        <div class="row">
          <h3>خدمات و محصولات</h3>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12 mb__service_mobile">
            <div class="service-text-box">
              <h4>نیتروژن‌دهی پلاسمایی (Plasma Nitriding)</h4>
              <p>
                نیتروژن‌دهی (نیتراسیون-نیتراته) پلاسمایی - که با عنوان
                نیتروژن‌دهی یونی و سختکاری پلاسما نیز شناخته می‌شود...
              </p>
              <Link className="services-section-links" to="/ServicesAndProducts#plasmaNitridingSection">بیشتر</Link>
            </div>
            <div class="service-text-box mt-4">
              <h4>نیتروژن-کربن‌دهی پلاسمایی (Plasma Nitrocarburizing)</h4>
              <p>
                در فرایند نیتروژن-کربن‌دهی (نیتروکربوره) پلاسمایی علاوه بر
                نیتروژن، کربن نیز در سطح نفوذ می‌کند...
              </p>
              <Link className="services-section-links" to="/ServicesAndProducts#plasmaNitrocarburizing">بیشتر</Link>
            </div>
            <div class="service-text-box mt-4">
              <h4>اکسیداسیون تکمیلی (Post Oxidation)</h4>
              <p>
                اکسیداسیون تکمیلی به‌دنبال فرایند نیتروژن‌دهی یا
                نیتروژن-کربن‌دهی پلاسمایی انجام می‌شود. در این فرایند...
              </p>
              <Link className="services-section-links" to="/ServicesAndProducts#postOxidation">بیشتر</Link>
            </div>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="service-text-box">
              <h4>دستگاه نیتروژن‌دهی پلاسمایی دیوارهٔ سرد</h4>
              <p>
                دستگاه‌های دیوارهٔ سرد مکانیزم ساده‌ای دارند. محفظهٔ کوره دو
                جداره و آبگرد بوده و قطعات تنها با انرژی پلاسما گرم می‌شوند...
              </p>
              <Link className="services-section-links" to="/ServicesAndProducts#coldWallDevice">بیشتر</Link>
            </div>
            <div class="service-text-box mt-4">
              <h4>دستگاه نیتروژن‌دهی پلاسمایی دیوارهٔ گرم</h4>
              <p>
                در کوره‌های دیوارهٔ گرم، حرارت‌دادن قطعات هم به‌وسیلهٔ انرژی
                پلاسما و هم به‌وسیلهٔ المنت‌های روی دیوارهٔ کوره انجام می‌شود...
              </p>
              <Link className="services-section-links" to="/ServicesAndProducts#hotWallDevice">بیشتر</Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Services;
