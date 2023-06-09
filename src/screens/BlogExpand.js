import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";


function BlogExpand() {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);

  useEffect(() => {
    fetch(`http://app.mavad-fannavar-mehr.ir/api/getBlog/${id}`)
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then((data) => {
        console.log(data);
        setBlog(data.blog);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
      console.log(id);
  }, [id]);

  if (!blog) {
    return <div>Loading...</div>;
  }

  return (
    <>
      <div>
        <img src={blog.image} alt={blog.title} />
        <h1>{blog.title}</h1>
        <p>{blog.text}</p>
       
      </div>
    </>
  );
}

export default BlogExpand;
