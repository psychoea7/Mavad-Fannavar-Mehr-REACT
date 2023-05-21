import React from "react";
import "./Map.css";
import { MapContainer, TileLayer, Marker } from "react-leaflet";

function Map() {
  return (
    <MapContainer
      attributionControl={false}
      className="contactScreen__map"
      center={[35.825774, 50.978091]}
      zoom={13}
    >
      <TileLayer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png" />
      <Marker position={[35.825774, 50.978091]} />
    </MapContainer>
  );
}

export default Map;
