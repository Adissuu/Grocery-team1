import data from "./data";

function showAisle(props){

  const { aisles } = props;
    return(
              
      data.aisles.map((aisles) => (
            <div key={aisles._i}>
    <li className="aisle">
     <a href={`/aisles/${aisles._id}`}>
                 <i className="bx bx-chevron-right icon"></i>
        <img src={aisles.image} alt={aisles.name}></img>
        <h2 className="aisle-text">{aisles.name}</h2>
     </a>

    </li>
            </div>
 ))
    );

}