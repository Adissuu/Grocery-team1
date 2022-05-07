import data from "./data";
import React from "react";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Aisles from "./components/aisles";

function App() {
  return (
    <BrowserRouter>
      <Route path="/product/:id" component={ProductScreen}></Route>
      <Route path="/" component={HomeScreen} exact></Route>
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
            <Aisles key={aisles._id} aisles={aisles}></Aisles>
          ))}
        </ul>
      </section>

      <footer>
        <div class="footer">
          <div class="team">
            <ul>
              <h1>Our team</h1>
              <li>
                <a
                  target="_blank"
                  href="https://www.linkedin.com/in/ali-fetanat-42216521b/"
                >
                  Ali Fetanat
                </a>
              </li>
              <li>
                <a
                  target="_blank"
                  href="https://www.linkedin.com/in/gabriel-dubois-soen/"
                >
                  Gabriel Dubois
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Kade Keating
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Minh Thuan Huynh
                </a>
              </li>
              <li>
                <a
                  target="_blank"
                  href="https://ca.linkedin.com/in/xavier-guertin-b896a71a6"
                >
                  Xavier Guertin
                </a>
              </li>
            </ul>
          </div>
          <div class="team">
            <h1>Jobs</h1>
            <ul>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  {" "}
                  Jobs in stores
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Careers at head office
                </a>
              </li>
            </ul>
          </div>
          <div class="team">
            <h1>Customer service</h1>
            <ul>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Contact Us
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Terms And Conditions
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  Privacy Policy
                </a>
              </li>
              <li>
                <a
                  target="_blank"
                  href="https://www.google.com/maps/place/Challenger+Deep/@11.3733328,142.591667,14z/data=!3m1!4b1!4m5!3m4!1s0x67107c6bf58b799f:0xce8948eec23ac2bb!8m2!3d11.373333!4d142.591667"
                >
                  Find a Store
                </a>
              </li>
              <li>
                <a target="_blank" href="./underConstruction.php">
                  FAQ
                </a>
              </li>
            </ul>
          </div>
        </div>
        <p class="copyright">&copy; 2022. all rights reserved</p>
      </footer>
    </BrowserRouter>
  );
}
export default App;
