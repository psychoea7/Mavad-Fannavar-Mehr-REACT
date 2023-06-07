import React, { useEffect, useState } from "react";
import Navigation from "../components/Navigation";
import BlogCard from "../components/BlogCard";
import { Col, Container, Row } from "react-bootstrap";

function BlogScreen() {
  const [blogs, setBlogs] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch("http://app.mavad-fannavar-mehr.ir/api/blogs")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => setBlogs(data.blogs))
      .catch((error) => setError(error.message));
  }, []);

  if (error) {
    return <div>Error: {error}</div>;
  }

  return (
    <div>
      <Navigation />
      <Container className="mt-5">
        <Row md={3}>
          {blogs.map((blog) => (
            <Col sm={12} xs={12} key={blog.id}>
              <BlogCard
                id={blog.id} // <-- use blog.id instead of id
                backgroundImage={`url(${blog.image})`} // <-- use blog.image instead of image
                imageSrc={blog.image} // <-- use blog.image instead of image
                imageAlt="blog image"
                meta="وبلاگ ازمایشی"
                title={blog.title} // <-- use blog.title instead of title
                date={new Date(blog.created_at).toLocaleDateString()} // <-- use blog.created_at instead of created_at
                avatarSrc="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                avatarAlt="avatar image"
                author="سهراب ناصحی"
                position="توسعه دهنده وب"
              />
            </Col>
          ))}
        </Row>
      </Container>
    </div>
  );
}

export default BlogScreen;
