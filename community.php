<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Community - TikChat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff9e1; 
            color: #5c3d2e; 
            line-height: 1.6;
        }

        header {
            background-color: #9e7c5a; 
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        header .logo img {
            height: 50px;
            width: 50px;
        }

        header .logo h1 {
            margin: 0;
            font-size: 28px;
        }

        main {
            padding: 40px 20px;
        }

        .intro {
            text-align: center;
            margin-bottom: 30px;
        }

        .intro h2 {
            font-size: 28px;
            color: #5c3d2e;
        }

        .intro p {
            font-size: 18px;
            color: #7a5636;
        }

        .communities {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .community {
            background-color: #fff;
            border: 2px solid #9e7c5a;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .community:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .community img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .community h3 {
            font-size: 24px;
            color: #5c3d2e;
            margin-bottom: 10px;
        }

        .community p {
            font-size: 16px;
            color: #7a5636;
        }

        .learn-btn {
            margin-top: 15px;
            background-color: #5c3d2e;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .learn-btn:hover {
            background-color: #9e7c5a;
        }

        footer {
            text-align: center;
            padding: 15px 30px;
            background-color: #5c3d2e;
            color: white;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="communities/Screenshot 2024-11-23 152243.png" alt="TikChat Logo">
            <h1>TikChat</h1>
        </div>
    </header>

    <main>
        <div class="intro">
            <h2>Select Your Community</h2>
            <p>Explore communities and learn more about the ones that inspire you!</p>
        </div>

        <div class="communities">
            
            <div class="community">
                <img src="images.jpeg" alt="UFV Community">
                <h3>UFV Community</h3>
                <p>Engage with UFV students, share ideas, and connect with peers to make the most of your academic journey.</p>
                <button class="learn-btn" onclick="window.location.href='ufv.php'">Learn More!</button>
            </div>

            <div class="community">
                <img src="communities/sport.jpg" alt="Sports">
                <h3>Sports</h3>
                <p>Join a vibrant group of sports enthusiasts who live for the game and cheer together!</p>
                <button class="learn-btn" onclick="window.location.href='sports.php'">Learn More!</button>
            </div>

            <div class="community">
                <img src="communities/Music-scaled.jpg" alt="Music">
                <h3>Music</h3>
                <p>Find your rhythm with fellow music lovers. Share playlists, gigs, and your passion for tunes.</p>
                <button class="learn-btn" onclick="window.location.href='music.php'">Learn More!</button>
            </div>

            <div class="community">
                <img src="communities/Planning-to-study-abroad.jpg" alt="Study">
                <h3>Study</h3>
                <p>Connect with learners worldwide. Share notes, tips, and motivation to excel academically.</p>
                <button class="learn-btn" onclick="window.location.href='study.php'">Learn More!</button>
            </div>

            <div class="community">
                <img src="communities/Oct19_22_1032609198.jpg" alt="Health">
                <h3>Health</h3>
                <p>Explore a supportive space for fitness and wellness. Share tips, recipes, and workout routines.</p>
                <button class="learn-btn" onclick="window.location.href='health.php'">Learn More!</button>
            </div>

            <div class="community">
                <img src="communities/360_F_65482539_C0ZozE5gUjCafz7Xq98WB4dW6LAhqKfs.jpg" alt="Travel">
                <h3>Travel</h3>
                <p>Share your wanderlust with travel stories, tips, and dreams of exploring the globe.</p>
                <button class="learn-btn" onclick="window.location.href='travel.php'">Learn More!</button>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Logical Squad. All rights reserved.</p>
    </footer>
</body>
</html>
