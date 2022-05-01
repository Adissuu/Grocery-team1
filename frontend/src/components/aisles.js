import React from 'react';

export default function Aisles(props) {
  const { aisles } = props;
  return (
    <div key={aisles._i}>
    <li className="aisle">
      <a href={`/aisles/$(aisles._id}`}>
        <i className="bx bx-chevron-right icon"></i>
        <img src={aisles.image} alt={aisles.name}></img>
        <h2 className="aisle-text">{aisles.name}</h2>
      </a>
    </li>
  </div>
  );
}
