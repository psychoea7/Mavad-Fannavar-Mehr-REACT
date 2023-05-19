import React from "react";
import "./AccordionItem.css";
import { Accordion } from "react-bootstrap";

function AccordionItem({ eventKey, title, text }) {
  return (
    <Accordion.Item eventKey={eventKey}>
      <Accordion.Header>{title}</Accordion.Header>
      <Accordion.Body>{text}</Accordion.Body>
    </Accordion.Item>
  );
}

export default AccordionItem;
