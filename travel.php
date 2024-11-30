<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Photo Collage</title>
  <style>
    /* Global Reset */
    body, h1, h2, p, ul, li, a, button {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #fff9e1; /* Soft cream background */
      color: #5c3d2e; /* Warm brownish text color */
    }

    /* Header Styles */
    header {
      background: linear-gradient(to right, #9e7c5a, #5c3d2e); /* Gradient for a rich, earthy tone */
      color: white;
      text-align: center;
      padding: 3rem 1rem;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }

    /* Gallery Section */
    .gallery {
      max-width: 1200px;
      margin: 3rem auto;
      padding: 2rem;
    }

    .gallery h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: #5c3d2e; /* Matching text color */
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive grid layout */
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

    /* Join Button Section */
    .join-button-container {
      text-align: center;
      margin: 3rem 0;
    }

    .join-button {
      padding: 1rem 2rem;
      background-color: #5c3d2e; /* Matching button color */
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1.2rem;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .join-button:hover {
      background-color: #9e7c5a; /* Lighten on hover */
    }

    /* Footer Section */
    footer {
      background-color: #5c3d2e; /* Dark footer background */
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: 2rem;
    }

    footer a {
      color: #9e7c5a; /* Light accent color for links */
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <header>
    <h1>Explore the World</h1>
    <p>Discover breathtaking destinations and share your travel stories with fellow adventurers.</p>
  </header>

  <!-- Gallery Section -->
  <div class="gallery">
    <h2>Travel Photo Collage</h2>
    <div class="gallery-container">
      <div class="image-card"><img src="communities/travel/t21.jpeg" alt="Travel Image 1"></div>
      <div class="image-card"><img src="communities/travel/t2.jpeg" alt="Travel Image 2"></div>
      <div class="image-card"><img src="communities/travel/t20.jpeg" alt="Travel Image 3"></div>
      <div class="image-card"><img src="communities/travel/t3.jpeg" alt="Travel Image 4"></div>
      <div class="image-card"><img src="communities/travel/t4.jpeg" alt="Travel Image 5"></div>
      <div class="image-card"><img src="communities/travel/t5.jpeg" alt="Travel Image 6"></div>
      <div class="image-card"><img src="communities/travel/t6.jpeg" alt="Travel Image 7"></div>
      <div class="image-card"><img src="communities/travel/t7.jpeg" alt="Travel Image 8"></div>
      <div class="image-card"><img src="communities/travel/t31.jpeg" alt="Travel Image 9"></div>
      <div class="image-card"><img src="communities/travel/t32.jpeg" alt="Travel Image 10"></div>
      <div class="image-card"><img src="communities/travel/t33.jpeg" alt="Travel Image 11"></div>
      <div class="image-card"><img src="communities/travel/t35.jpeg" alt="Travel Image 12"></div>
      <div class="image-card"><img src="communities/travel/t36.jpeg" alt="Travel Image 13"></div>
      <div class="image-card"><img src="communities/travel/t37.jpeg" alt="Travel Image 14"></div>
      <div class="image-card"><img src="communities/travel/t39.jpeg" alt="Travel Image 15"></div>
      <div class="image-card"><img src="communities/travel/t38.jpeg" alt="Travel Image 16"></div>
    </div>
  </div>

  <!-- Join Button Section -->
  <div class="join-button-container">
    <button class="join-button">Join the Adventure</button>
  </div>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Logical Squad. All rights reserved.</p>
  </footer>

</body>
</html>
