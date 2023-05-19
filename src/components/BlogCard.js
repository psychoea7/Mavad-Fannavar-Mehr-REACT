import React from "react";
import "./BlogCard.css";

function BlogCard({
  backgroundImage,
  imageSrc,
  imageAlt,
  meta,
  title,
  date,
  avatarSrc,
  avatarAlt,
  author,
  position,
}) {
  return (
    <div
      className="card text-white card-has-bg click-col"
      style={{ backgroundImage }}
    >
      <img className="card-img d-none" src={imageSrc} alt={imageAlt} />
      <div className="card-img-overlay d-flex flex-column">
        <div className="card-body">
          <small className="card-meta mb-2">{meta}</small>
          <h4 className="card-title mt-0">
            <a className="text-white" href="#">
              {title}
            </a>
          </h4>
          <small>
            <i className="far fa-clock"></i> {date}
          </small>
        </div>
        <div className="card-footer">
          <div className="media">
            <img
              className="mr-3 rounded-circle"
              src={avatarSrc}
              alt={avatarAlt}
              style={{ maxWidth: "50px" }}
            />
            <div className="media-body">
              <h6 className="my-0 text-white d-block">{author}</h6>
              <small>{position}</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default BlogCard;
