import React from "react";
import "./Navigation.css";
import Logo from "../../src/assets/images/logo56.png";
import { Link, useNavigate } from "react-router-dom";

const Navigation = () => {
  const history = useNavigate();

  return (
    <nav class="navbar navbar-expand-lg costume-nav p-3 font-face">
      <div class="container-fluid d-flex flex-row-reverse">
        <img onClick={() => history("/")} src={Logo} class="navbar-brand"></img>
        <button
          class="navbar-toggler p-0 "
          id="navbarTogglerBtn"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <input type="checkbox" id="menu_checkbox" />
          <label class="hamburger-label" for="menu_checkbox">
            <div></div>
            <div></div>
            <div></div>
          </label>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-3 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">
                خانه
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                خدمات و محصولات
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                منابع فنی
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">
                    وبلاگ
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    پرسش و پاسخ
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    کاربرد ها
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                درباره ما
              </a>
            </li>

            <li class="nav-item">
              <Link class="nav-link" to="ContactUs">
                ارتباط با ما
              </Link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Navigation;
