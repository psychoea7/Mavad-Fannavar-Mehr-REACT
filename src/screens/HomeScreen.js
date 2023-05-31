import React from "react";
import Navigation from "../components/Navigation";
import Introduction from "../components/Introduction";
import Services from "../components/Services";
import Footer from "../components/Footer";
import StaticBanner from "../components/StaticBanner";

function HomeScreen() {
  return (
    <div>
      <Navigation />
      <StaticBanner />
      <Introduction />
      <Services />
      <Footer />
    </div>
  );
}

export default HomeScreen;
