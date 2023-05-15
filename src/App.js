import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import HomeScreen from "./screens/HomeScreen";
import { FaAngleUp } from "react-icons/fa";
import React, { useState, useEffect } from "react";
import "./App.css";

function App() {
  const [showTopBtn, setShowTopBtn] = useState(false);

  useEffect(() => {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 400) {
        setShowTopBtn(true);
      } else {
        setShowTopBtn(false);
      }
    });
  }, []);

  const goToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };

  return (
    <div className="app">
      <Routes>
        <Route exact path="/" element={<HomeScreen />} />
      </Routes>
      <div className="top-to-btm">
        {" "}
        {showTopBtn && (
          <FaAngleUp className="icon-position icon-style" onClick={goToTop} />
        )}{" "}
      </div>
    </div>
  );
}

export default App;
