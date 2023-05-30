import React from "react";
import Navigation from "../components/Navigation";
import Banner from "../components/Banner";
import Introduction from "../components/Introduction";
import Services from "../components/Services";
import Footer from "../components/Footer";

function HomeScreen() {
  return (
    <div>
      <Navigation />
      <Banner />
      <Introduction />
      <Services />
      <Footer />
    </div>
  );
}

export default HomeScreen;
