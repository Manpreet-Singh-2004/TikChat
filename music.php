<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Community</title>
  <style>
    /* General Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom, #fff9e1, #fffaf0);
      color: #5c3d2e;
      display: flex;
      flex-direction: column;
      align-items: center; /* Center all content horizontally */
    }

    /* Header Section */
    header {
      width: 100%;
      background: #9e7c5a;
      color: white;
      text-align: center;
      padding: 2rem 0;
      position: relative;
    }

    header .band-banner {
      font-size: 3rem;
      font-weight: bold;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    header .music-image {
      max-width: 120px;
      height: auto;
      position: absolute;
      top: 50%;
      right: 2rem;
      transform: translateY(-50%);
      border-radius: 50%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    /* Why Choose Section */
    .why-choose {
      text-align: center;
      width: 100%;
      padding: 2rem 10%;
      background: linear-gradient(to bottom, #fffaf0, #fff9e1);
    }

    .why-choose h2 {
      font-size: 2.2rem;
      color: #5c3d2e;
      margin-bottom: 1rem;
    }

    .why-choose p {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.8;
      max-width: 700px;
      margin: 0 auto;
    }

    .join-btn {
      display: inline-block;
      margin-top: 2rem;
      padding: 0.8rem 2rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      background: #5c3d2e;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .join-btn:hover {
      background: #9e7c5a;
      transform: scale(1.05);
    }

    /* Content Section */
    .content {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 2rem;
      width: 100%;
      padding: 3rem 10%;
    }

    /* Quotes Section */
    .quotes {
      text-align: center;
      background: white;
      border: 1px solid #9e7c5a;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 700px;
    }

    .quotes h3 {
      font-size: 1.8rem;
      color: #5c3d2e;
      margin-bottom: 1rem;
    }

    .quotes p {
      font-size: 1.1rem;
      color: #555;
      font-style: italic;
      line-height: 1.6;
    }

    /* Videos Section */
    .videos {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
      max-width: 900px;
    }

    .videos iframe {
      width: 300px;
      height: 200px;
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    /* Photo Gallery Section */
    .photo-gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
      padding: 1rem 0;
      max-width: 900px;
    }

    .photo-gallery img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .photo-gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    /* Footer Section */
    footer {
      width: 100%;
      text-align: center;
      background: #5c3d2e;
      color: white;
      padding: 1rem 0;
      font-size: 0.9rem;
    }

    footer a {
      color: #fff9e1;
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      color: white;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <header>
    <div class="band-banner">Music Community</div>
  </header>

  <!-- Why Choose Section -->
  <section class="why-choose">
    <h2>Why Choose Our Music Community?</h2>
    <p>Immerse yourself in a passionate community of music lovers! Learn, share, and grow with people who believe in the power of melody. Find opportunities to collaborate with professionals and enjoy exclusive resources to enhance your musical journey.</p>
    <a href="index.php?community=Music" class="join-btn">Join Our Community</a>
  </section>

  <!-- Content Section -->
  <div class="content">

    <!-- Quotes Section -->
    <div class="quotes">
      <h3>Inspiring Quotes</h3>
      <p>"Where words fail, music speaks." – Hans Christian Andersen</p>
      <p>"Music gives a soul to the universe, wings to the mind, flight to the imagination, and life to everything." – Plato</p>
    </div>

    <!-- Videos Section -->
    <div class="videos">
      <iframe src="https://www.youtube.com/embed/8SbUC-UaAxE" title="Music Video 1"></iframe>
      <iframe src="https://www.youtube.com/embed/kJQP7kiw5Fk" title="Music Video 2"></iframe>
    </div>

    <!-- Photo Gallery Section -->
    <div class="photo-gallery">
      <img src="communities/music/m1.jpeg" alt="Music 1">
      <img src="communities/music/m2.jpeg" alt="Music 2">
      <img src="communities/music/m3.jpeg" alt="Music 3">
    </div>
  </div>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2024 Logical Squad. All rights reserved.</p>
  </footer>

</body>
</html>
