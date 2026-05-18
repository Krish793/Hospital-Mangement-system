<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us | Grace Care Hospital Management</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      background: url('pawel-czerwinski-2Y8ol_OBS1I-unsplash.jpg') no-repeat center center/cover;
      position: relative;
      min-height: 100vh;
      color: #2c3e50;
    }
    body::before {
      content: "";  
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8);
      z-index: 0;
    }
    .container {
      position: relative;
      z-index: 1;
      max-width: 1000px;
      margin: 0 auto;
      padding: 60px 20px;
      text-align: center;
      animation: fadeInUp 1s ease-out;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      color: #1a3d5d;
    }
    p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #444;
    }
    .team {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 40px;
    }
    .team-member {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      padding: 20px;
      max-width: 300px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .team-member img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }
    .team-member h3 {
      font-size: 1.5rem;
      margin-bottom: 8px;
      color: #1a3d5d;
    }
    .team-member p {
      font-size: 0.9rem;
      color: #555;
      margin-bottom: 0;
    }
    .team-member:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    
    /* Back Button Styling */
    .back-btn {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 20px;
      font-size: 1rem;
      font-weight: bold;
      color: white;
      background-color: #1a3d5d;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      transition: background 0.3s;
    }
    .back-btn:hover {
      background: #144366;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>About Grace Care</h1>
    <p>
      Grace Care is a cutting-edge hospital management system designed to streamline healthcare administration.
      We combine modern technology with compassionate care to ensure every patient receives the highest quality service.
      Our system is built with efficiency, security, and reliability in mind.
    </p>
    <h2>Our Team</h2>
    <div class="team">
      <div class="team-member">
        <img src="defaultimg.jpg" alt="Dr. Shaikh Tamim">
        <h3> Shaikh Tamim</h3>
        <p>Doctor</p>
      
        <p>✉️ tamimshaikh365@gmail.com</p>
      </div>
    
      <div class="team-member">
        <img src="defaultimg.jpg" alt="Admin John Doe">
        <h3>Shaikh Harish</h3>
        <p>Hospital Administrator</p>
      
        <p>✉️ admin@gmail.com</p>
      </div>
    </div>

    <!-- Back to Home Button -->
    <a href="index.php" class="back-btn">← Back to Home</a>
  </div>
</body>
</html>
