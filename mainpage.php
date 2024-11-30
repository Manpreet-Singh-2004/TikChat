<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikChat - Logical Squad</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #9e7c5a; 
            padding: 15px 30px;
            color: white;
        }

        header .logo-container {
            display: flex;
            align-items: center;
            gap: 15px; 
        }

        header .logo-container img {
            width: 60px;
            height: auto;
            border-radius: 5px;
            border: 2px solid #fff;
        }

        header .logo-container .logo-text {
            font-size: 28px; 
            font-weight: bold;
        }

        header nav {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            background-color: #fff9e1;
            border: 2px solid #5c3d2e;
            padding: 8px 16px;
            border-radius: 5px;
            color: #5c3d2e;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-btn:hover {
            background-color: #5c3d2e;
            color: white;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
            background-color: #fff4c2; 
        }

        .hero h1 {
            font-size: 36px;
            color: #5c3d2e;
            margin: 15px 0;
        }

        .hero p {
            font-size: 18px;
            color: #7a5636;
        }

        .cta-btn {
            margin-top: 20px;
            background-color: #9e7c5a;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .cta-btn:hover {
            background-color: #7a5636;
        }

        #features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
            background-color: #fff;
            gap: 20px;
        }

        .feature {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff9e1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            max-width: 300px;
        }

        .feature h2 {
            color: #5c3d2e;
            margin-bottom: 10px;
        }

        .feature p {
            color: #7a5636;
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
        <div class="logo-container">
            <img src="communities/Screenshot 2024-11-23 152243.png" alt="TikChat Logo">
            <div class="logo-text">TikChat</div>
        </div>
        <nav>
            <button class="nav-btn" onclick="window.location.href='index.php'">Login</button>
            <button class="nav-btn" onclick="window.location.href='signup.php'">Sign Up</button>
            <button class="nav-btn" onclick="window.location.href='authors.php'">Authors</button>
        </nav>
    </header>

    <main>
       
        <section class="hero">
            <h1>Welcome to TikChat!</h1>
            <p>Your private and public moments, beautifully shared with the world.</p>
            <button class="cta-btn" onclick="window.location.href='community.php'">Join Communities</button>
        </section>

        
        <section id="features">
            <div class="feature">
                <h2>Secure Login</h2>
                <p>Access your account safely and keep your data protected.</p>
            </div>
            <div class="feature">
                <h2>Personalized Feed</h2>
                <p>See updates and connect with the community your way.</p>
            </div>
            <div class="feature">
                <h2>Creative Sharing</h2>
                <p>Express yourself through images, statuses, and more.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Logical Squad. All rights reserved.</p>
    </footer>
</body>
</html>
