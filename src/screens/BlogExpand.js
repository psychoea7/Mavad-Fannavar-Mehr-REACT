import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import Navigation from "../components/Navigation";

function BlogExpand() {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);

  useEffect(() => {
    fetch(`http://app.mavad-fannavar-mehr.ir/api/blogs/${id}`)
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => setBlog(data.blog))
      .catch((error) => {
        console.error("Error:", error);
      });
  }, [id]);

  if (!blog) {
    return <div>Loading...</div>;
  }

  return (
    <div>
      <Navigation />
      <img src={blog.image} alt={blog.title} />
      <h1>{blog.title}</h1>
      <p>{blog.text}</p>
      {/* Display other blog details here */}
    </div>
  );
}

export default BlogExpand;
