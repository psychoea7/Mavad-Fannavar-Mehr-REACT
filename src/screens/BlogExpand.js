import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';

function BlogExpand() {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);
  const [error, setError] = useState(null);
  
  // Let's establish the base URL
  const BASE_URL = "http://app.mavad-fannavar-mehr.ir";

  const fetchBlog = async () => {
    try {
      const response = await fetch(`${BASE_URL}/api/getBlog?id=${id}`);
      
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const data = await response.json();

      console.log('Data:', data);

      if (data) {
        setBlog(data);
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

  const imageUrl = `${BASE_URL}/${blog.image}`; // Prepend base URL to the image path

  // New! Let's log that image URL and see what we're dealing with.
  console.log("Image URL:", imageUrl);

  return (
    <div>
      <img src={imageUrl} alt={blog.title} />
      <h1>{blog.title}</h1>
      <p dangerouslySetInnerHTML={{ __html: blog.text }} />
    </div>
  );
}

export default BlogExpand;
