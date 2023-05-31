import React from "react";
// Import Swiper React components
import { Swiper, SwiperSlide } from "swiper/react";

// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

import "./Banner.css";

// import required modules
import { Autoplay, Pagination } from "swiper";
import MainButton from "./MainButton";

export default function App() {
  return (
    <>
      <Swiper
        spaceBetween={30}
        centeredSlides={true}
        autoplay={{
          delay: 2500,
          disableOnInteraction: false,
        }}
        pagination={{
          clickable: true,
        }}
        dir="rtl"
        // navigation={true}
        loop={true}
        modules={[Autoplay, Pagination]}
        className="mySwiper"
      >
        <SwiperSlide>
          <div className="banner__slideOne">
            <div className="banner__caption">
              <h3>لورم ایپسوم متن ساختگی</h3>
              <p>
                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                است.
              </p>
              <MainButton link="#" text="بیشتر" iconClass="fas fa-ellipsis-h" />
            </div>
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className="banner__slideTwo">
            <div className="banner__caption">
              <h3>لورم ایپسوم متن ساختگی</h3>
              <p>
                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                است.
              </p>
              <MainButton link="#" text="بیشتر" iconClass="fas fa-ellipsis-h" />
            </div>
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className="banner__slideThree">
            <div className="banner__caption">
              <h3>لورم ایپسوم متن ساختگی</h3>
              <p>
                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                است.
              </p>
              <MainButton link="#" text="بیشتر" iconClass="fas fa-ellipsis-h" />
            </div>
          </div>
        </SwiperSlide>
        <SwiperSlide>
          <div className="banner__slideFour">
            <div className="banner__caption">
              <h3>لورم ایپسوم متن ساختگی</h3>
              <p>
                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                است.
              </p>
              <MainButton link="#" text="بیشتر" iconClass="fas fa-ellipsis-h" />
            </div>
          </div>
        </SwiperSlide>
      </Swiper>
    </>
  );
}
