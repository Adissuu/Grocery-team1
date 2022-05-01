function App() {
  return (
    <>
      <div className="home" id="home">
        <div className="home-text">
          <h1 className="section-title">Fresh and bio grocery store</h1>
          <p>
            Start eating better today by browsing our vast selection of fresh
            local produce
          </p>
        </div>
      </div>

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
          <li className="aisle">
            <a href="./p2_fruitaisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img
                src="./frontend/images/Fruits.jpg"
                alt="fruitaisle"
                classNameName="rand"
              ></img>
              <h2 className="aisle-text">Fruits</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_VegetablesAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/vegetables.jpg" alt=""></img>
              <h2 className="aisle-text">Vegetables </h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_DairyAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Dairy.jpg" alt=""></img>
              <h2 className="aisle-text">Dairy</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_MeatAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Meat.jpg" alt=""></img>
              <h2 className="aisle-text">Meat</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_PastryAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Pastry.jpg" alt=""></img>
              <h2 className="aisle-text">Pastry</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_SnacksAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Snacks.jpg" alt=""></img>
              <h2 className="aisle-text">Packaged Goods</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_SeafoodAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Seafood.jpg" alt=""></img>
              <h2 className="aisle-text">Seafood</h2>
            </a>
          </li>
          <li className="aisle">
            <a href="./p2_WaterAisle.php">
              <i className="bx bx-chevron-right icon"></i>
              <img src="./images/Water.jpg" alt=""></img>
              <h2 className="aisle-text">Drinks</h2>
            </a>
          </li>
        </ul>
      </section>


    </>
  );
}

export default App;
