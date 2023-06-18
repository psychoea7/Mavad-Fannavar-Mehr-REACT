import React, { useEffect, useState } from "react";
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";
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
      <Container className="mt-5 mb-5">
        <Row md={3}>
          {blogs.map((blog) => {
            let imageUrl =
              blog.image.includes("http://") || blog.image.includes("https://")
                ? blog.image
                : `http://${blog.image}`;
            console.log("Image URL:", imageUrl);

            return (
              <Col sm={12} xs={12} key={blog.id}>
                <BlogCard
                  id={blog.id}
                  backgroundImage={`url(${imageUrl})`}
                  imageSrc={imageUrl}
                  imageAlt="blog image"
                  meta="وبلاگ ازمایشی"
                  title={blog.title}
                  date={new Date(blog.created_at).toLocaleDateString()}
                  avatarSrc="https://assets.codepen.io/460692/internal/avatars/users/default.png"
                  avatarAlt="avatar image"
                  author="سهراب ناصحی"
                  position="توسعه دهنده وب"
                />
              </Col>
            );
          })}
        </Row>
      </Container>
      <Footer />
    </div>
  );
}

export default BlogScreen;
