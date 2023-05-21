import React from "react";
import Navigation from "../components/Navigation";
import ContactForm from "../components/ContactForm";
import { Col, Container, Row } from "react-bootstrap";
import Footer from "../components/Footer";
import ContactInfo from "../components/ContactInfo";
import Map from "../components/Map";

function ContactScreen() {
  return (
    <div>
      <Navigation />
      <Container>
        <Row md={2}>
          <Col sm={12}>
            <ContactForm />
          </Col>
          <Col sm={12}>
            <ContactInfo />
          </Col>
        </Row>
        <Row>
          <Col>
            <Map />
          </Col>
        </Row>
      </Container>
      <Footer />
    </div>
  );
}

export default ContactScreen;
