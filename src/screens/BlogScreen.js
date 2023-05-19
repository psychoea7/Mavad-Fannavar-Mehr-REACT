import React from "react";
import Navigation from "../components/Navigation";
import BlogCard from "../components/BlogCard";
import { Col, Container, Row } from "react-bootstrap";

function BlogScreen() {
  return (
    <div>
      <Navigation />
      <Container className="mt-5">
        <Row md={3}>
          <Col sm={12} xs={12}>
            <BlogCard
              backgroundImage="url('https://source.unsplash.com/600x900/?tech,street')"
              imageSrc="https://source.unsplash.com/600x900/?tech,street"
              imageAlt="blog image"
              meta="وبلاگ ازمایشی"
              title="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است."
              date="۱۴۰۲/۰۲/۲۹"
              avatarSrc="https://assets.codepen.io/460692/internal/avatars/users/default.png"
              avatarAlt="avatar image"
              author="سهراب ناصحی"
              position="توسعه دهنده وب"
            />
          </Col>
        </Row>
      </Container>
    </div>
  );
}

export default BlogScreen;
