import data from "./data";

function App() {
  return (
    <>
      <section>
        <h1 className="section-title">
          our <span>featured</span>products !
        </h1>
        <div className="special">
          <div className="content">
            <div className="featured">
              <h1>This is how I like my milk</h1>
              <p>Freshly pressed</p>
              <div className="f-util">
                <a href="./p2_DairyAisle.php" className="btn">
                  Try now!
                </a>
                <div className="switch">
                  <a href="">
                    <i className="bx bx-chevron-left"></i>
                  </a>
                  <a href="">
                    <i className="bx bx-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div className="sale">
              <h1>50% off</h1>
              <p>on NUTS</p>
              <a href="./under construction.php" className="btn">
                Shop now!
              </a>
            </div>
          </div>
        </div>
      </section>

      <section className="aisles" id="aisles">
        <h1 className="section-title">
          Our<span>aisles</span>
        </h1>
        <ul className="aisle-group">
          {data.aisles.map((aisles) => (
            <div key={aisles._i} className="ca2rd">
              <li className="aisle">
                <a href={`/aisles/$(aisles._id}`}>
                  <i className="bx bx-chevron-right icon"></i>
                  <img src={aisles.image} alt={aisles.name}></img>
                  <h2 className="aisle-text">{aisles.name}</h2>
                </a>
              </li>
            </div>
          ))}
        </ul>
      </section>
    </>
  );
}
export default App;
