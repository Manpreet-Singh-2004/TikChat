<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthy Lifestyle Community</title>
  <style>
  
    body, h1, h2, p, ul, li, a, button {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #fff9e1;
      color: #5c3d2e;
    }

    header {
      background: linear-gradient(to right, #9e7c5a, #5c3d2e);
      color: white;
      text-align: center;
      padding: 2rem 1rem;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }

    .quotes-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      margin: 2rem auto;
      max-width: 1200px;
      padding: 1rem;
    }

    .quote-card {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
    }

    .quote-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .quote-card img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .quote-card p {
      padding: 1rem;
      text-align: center;
      font-style: italic;
      font-size: 1.1rem;
      color: #7a5636;
      font-weight: bold;
    }

    .gallery {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .gallery h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: #5c3d2e;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    .image-card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .image-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-card img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .image-card p {
      padding: 1rem;
      font-size: 1rem;
      text-align: center;
      color: #7a5636;
      font-weight: bold;
    }

    .join-button-container {
      text-align: center;
      margin: 3rem 0;
    }

    .join-button {
      padding: 1rem 2rem;
      background-color: #5c3d2e;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1.2rem;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .join-button:hover {
      background-color: #9e7c5a;
    }

    footer {
      background-color: #5c3d2e;
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: 2rem;
    }

    footer a {
      color: #9e7c5a;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <div class="header-container">
      <h1>Healthy Lifestyle Community</h1>
      <p>Your destination for tips, inspiration, and motivation for a healthier you!</p>
    </div>
  </header>

  <section class="quotes-section">
    <div class="quote-card">
      <img src="communities/health/tips.jpeg" alt="Healthy Body">
      <p>"A healthy outside starts from the inside."</p>
    </div>
    <div class="quote-card">
      <img src="communities/health/mind.jpeg" alt="Mindfulness">
      <p>"Take care of your body. It's the only place you have to live."</p>
    </div>
    <div class="quote-card">
      <img src="communities/health/happy.jpg" alt="Balance">
      <p>"Happiness is the highest form of health."</p>
    </div>
  </section>

  <section class="gallery">
    <h2>Explore a Healthy Lifestyle</h2>
    <div class="gallery-container">
      <div class="image-card">
        <img src="communities/health/yoga.jpeg" alt="Yoga">
        <p>Yoga for mindfulness and flexibility.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/healthy_food.jpeg" alt="Healthy Food">
        <p>Nutritious and balanced meals.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/running.jpeg" alt="Running">
        <p>Running for a stronger heart.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/fruits.png" alt="Fruits">
        <p>Fruits to boost immunity.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/water.jpeg" alt="Hydration">
        <p>Stay hydrated for better health.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/yogaa.jpeg" alt="Exercise">
        <p>Daily exercise for longevity.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/spirit.jpeg" alt="Balance">
        <p>Balance in life.</p>
      </div>
      <div class="image-card">
        <img src="communities/health/goals.jpeg" alt="Goals">
        <p>Create goals for a healthy lifestyle.</p>
      </div>
    </div>
  </section>
  <div class="join-button-container">
    <a href="index.php?community=Health" target="_blank">
      <button class="join-button">Join Our Community</button>
    </a>
  </div>
  
  
  <footer>
    <p>&copy; 2024 Logical Squad. All rights reserved.</p>
  </footer>
</body>
</html>
