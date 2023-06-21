import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import PropTypes from "prop-types";
import "./BlogExpand.css";
import Navigation from "../components/Navigation";

function BlogExpand() {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);
  const [error, setError] = useState(null);

  const fetchBlog = async () => {
    try {
      const response = await fetch(
        `https://app.mavad-fannavar-mehr.ir/api/getBlog?id=${id}`
      );

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const data = await response.json();
      console.log("Data:", data);

      if (data && data.blogs && data.blogs.length > 0) {
        setBlog(data.blogs[0]);
      } else {
        throw new Error("Blog data is not available");
      }
    } catch (error) {
      console.error("Error:", error);
      setError(error.message);
    }
  };

  useEffect(() => {
    fetchBlog();
  }, [id]);

  if (error) {
    return <div>Error: {error}</div>;
  }

  if (!blog) {
    return <div>Loading...</div>;
  }

  let imageUrl =
    blog.image.includes("http://") || blog.image.includes("https://")
      ? blog.image
      : `http://${blog.image}`;
  console.log("Image URL:", imageUrl);

  return (
    <>
      <Navigation />
      <div className="blog-container">
        <img className="blog-image" src={imageUrl} alt={blog.title} />
        <h1 className="blog-title">{blog.title}</h1>
        <p
          className="blog-text"
          dangerouslySetInnerHTML={{ __html: blog.text }}
        />
      </div>
    </>
  );
}

BlogExpand.propTypes = {
  id: PropTypes.string.isRequired,
  blog: PropTypes.shape({
    title: PropTypes.string,
    text: PropTypes.string,
    image: PropTypes.string,
  }),
  error: PropTypes.string,
};

export default BlogExpand;
