import React from "react";
import "./MainButton.css";

function MainButton({ text, iconClass, link }) {
  return (
    <a className="main-btn" href={link}>
      {text}
      <i className={iconClass}></i>
    </a>
  );
}

export default MainButton;
