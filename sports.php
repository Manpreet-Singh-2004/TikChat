<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sports Collage Page</title>
  <style>
    /* General Reset */
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
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
    <h1>Sports Community</h1>
    <p>Join us to connect, play, and grow in an active and vibrant community!</p>
  </header>

  <div class="join-button-container">
    <a href="index.php?community=Sports" class="join-button">Join Our Community</a>
  </div>

  <div class="gallery">
    <h2>Our Sports Highlights</h2>
    <div class="gallery-container">
      <div class="image-card"><img src="communities/sports/s1.jpeg" alt="Image 1"></div>
      <div class="image-card"><img src="communities/sports/s2.jpeg" alt="Image 2"></div>
      <div class="image-card"><img src="communities/sports/s3.jpeg" alt="Image 3"></div>
      <div class="image-card"><img src="communities/sports/s4.jpeg" alt="Image 4"></div>
      <div class="image-card"><img src="communities/sports/s5.jpeg" alt="Image 5"></div>
      <div class="image-card"><img src="communities/sports/s6.jpeg" alt="Image 6"></div>
      <div class="image-card"><img src="communities/sports/s7.jpeg" alt="Image 7"></div>
      <div class="image-card"><img src="communities/sports/s8.jpeg" alt="Image 8"></div>
      <div class="image-card"><img src="communities/sports/s9.jpeg" alt="Image 9"></div>
      <div class="image-card"><img src="communities/sports/s10.jpeg" alt="Image 10"></div>
      <div class="image-card"><img src="communities/sports/s11.jpeg" alt="Image 11"></div>
      <div class="image-card"><img src="communities/sports/s12.jpeg" alt="Image 12"></div>
      <div class="image-card"><img src="communities/sports/s13.jpeg" alt="Image 13"></div>
      <div class="image-card"><img src="communities/sports/s14.jpeg" alt="Image 14"></div>
      <div class="image-card"><img src="communities/sports/s15.jpeg" alt="Image 15"></div>
      <div class="image-card"><img src="communities/sports/s16.jpeg" alt="Image 16"></div>
      <div class="image-card"><img src="communities/sports/s17.jpeg" alt="Image 17"></div>
      <div class="image-card"><img src="communities/sports/s18.jpeg" alt="Image 18"></div>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Logical Squad. All rights reserved.</p>
  </footer>
</body>
</html>
