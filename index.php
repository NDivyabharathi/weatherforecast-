<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Nature's Forecast</title>
  <style>
    /* General Styling */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to bottom, #007bff, #66b2ff);
      color: #fff;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      height: 100vh;
    }

    /* Header Styling */
    header {
      margin-top: 20px;
    }

    header h1 {
      font-size: 3.5rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.3rem;
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.5;
    }

    /* Features Section */
    .features {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1200px;
      margin: 20px auto;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
      width: 300px;
      text-align: left;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
    }

    .feature-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .feature-card p {
      font-size: 1rem;
      line-height: 1.5;
    }

    /* Button Section */
    .button-container {
      display: flex;
      gap: 20px;
      margin-top: 30px;
    }

    .button-container a {
      text-decoration: none;
      padding: 15px 30px;
      border-radius: 5px;
      font-size: 1rem;
      font-weight: bold;
      color: #007bff;
      background-color: #fff;
      transition: background-color 0.3s, color 0.3s;
    }

    .button-container a:hover {
      background-color: #0056b3;
      color: #fff;
    }

    /* Footer Styling */
    footer {
      font-size: 0.9rem;
      color: #f0f0f0;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <h1>Welcome to Nature's Forecast</h1>
    <p>
      Nature's Forecast is your ultimate maritime safety companion. We provide real-time weather updates, interactive maps, 
      and emergency alerts to ensure you navigate the waters safely and confidently. Explore our platform to experience 
      cutting-edge technology designed for your safety!
    </p>
  </header>

  <!-- Features Section -->
  <section class="features">
    <div class="feature-card">
      <h3>Real-Time Weather Updates</h3>
      <p>
        Stay informed about current weather conditions, including temperature, wind speed, humidity, and pressure.
      </p>
    </div>
    <div class="feature-card">
      <h3>Interactive Maps</h3>
      <p>
        Navigate seamlessly with detailed maps powered by OpenStreetMap and dynamic layers for navigation.
      </p>
    </div>
    <div class="feature-card">
      <h3>Emergency Alerts</h3>
      <p>
        Receive instant notifications about storms, high tides, and other emergencies directly on your device.
      </p>
    </div>
    <div class="feature-card">
      <h3>Safe and Reliable</h3>
      <p>
        Built with advanced technology to ensure you have accurate and reliable information when you need it most.
      </p>
    </div>
  </section>

  <!-- Button Section -->
  <div class="button-container">
    <a href="sample.html" style="padding: 12px 20px; text-decoration: none; background-color: #edeff2; color: rgb(13, 134, 227); border-radius: 5px; font-size: 16px;">
      Enter Nature's Forecast
  </a>  
    <a href="about.html">Learn About Us</a>
  </div>

  <!-- Footer Section -->
  <footer>
    &copy; 2025 WaveWeather. All rights reserved. | Designed for Safety and Confidence at Sea.
  </footer>
</body>
</html>
