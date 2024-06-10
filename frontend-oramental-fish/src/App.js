import logo from "./logo.svg";
import "./App.css";
import React, { useState, useEffect } from "react";
import axios from "axios";

function App() {
  const [fishData, setFishData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get("http://localhost/api/ikan");
        setFishData(response.data);
      } catch (error) {
        console.error("Error fetching fish data:", error);
        // Handle the error gracefully (e.g., display an error message)
      }
    };

    fetchData();
  }, []);

  return (
    <section className="hot_section layout_padding">
      <div className="container">
        <p>informasi jenis jenis ikan hias</p>
        <div className="carousel_container">
          <div className="container">
            <div className="carousel-wrap">
              <div className="owl-carousel owl-loaded owl-drag">
                {fishData.length > 0 && (
                  <>
                    <h2>Fish List</h2>
                    {fishData.map((fish) => (
                      <div key={fish.id}>
                        <h2>
                          {fish.name_en} ({fish.name_id})
                        </h2>
                        <img src={fish.image} alt={fish.name_en} />
                        <p>{fish.description_en}</p>
                        <p>{fish.description_id}</p>
                      </div>
                    ))}
                  </>
                )}
                {fishData.length === 0 && <p>No fish data found.</p>}
              </div>
              {/* Removed unnecessary and disabled navigation/dots for now */}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

export default App;
