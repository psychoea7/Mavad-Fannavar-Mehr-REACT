import React from "react";
import Navigation from "../components/Navigation";
import Banner from "../components/Banner";
import Introduction from "../components/Introduction";
import Services from "../components/Services";
import Parallax from "../components/Parallax";
import Capacities from "../components/Capacities";
import FactoryStructure from "../components/FactoryStructure";
import Footer from "../components/Footer";

function HomeScreen() {
  return (
    <div>
      <Navigation />
      <Banner />
      <Introduction />
      <Services />
      <Parallax />
      <Capacities />
      <FactoryStructure />
      <Footer />
    </div>
  );
}

export default HomeScreen;
