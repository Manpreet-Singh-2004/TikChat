<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Authors - TikChat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff9e1; 
            color: #5c3d2e; 
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #9e7c5a; 
            padding: 10px 20px;
            color: white;
        }

        header .logo {
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
            padding: 10px 20px;
            border-radius: 5px;
            color: #5c3d2e;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .nav-btn:hover {
            background-color: #5c3d2e;
            color: white;
        }

        /* Authors Section */
        .authors-container {
            padding: 40px 20px;
            text-align: center;
        }

        .authors-container h1 {
            color: #5c3d2e;
            margin-bottom: 20px;
        }

        .authors-container p {
            font-size: 18px;
            color: #7a5636; 
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .logo-image {
            max-width: 150px;
            margin: 20px auto;
        }

        .authors-list {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .author-card {
            background-color: #fff;
            border: 2px solid #9e7c5a;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .author-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .author-card h2 {
            color: #5c3d2e;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .author-card p {
            color: #7a5636;
            font-size: 16px;
        }

        footer {
            text-align: center;
            padding: 20px;
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
        <div class="logo">TikChat</div>
        <nav>
            <button class="nav-btn" onclick="window.location.href='mainpage.php'">Home</button>
            <!-- <button class="nav-btn" onclick="window.location.href='login.php'">Login</button>
            <button class="nav-btn" onclick="window.location.href='signup.php'">Sign Up</button> -->
        </nav>
    </header>

    <main>
        <section class="authors-container">
            <img src="communities/Screenshot 2024-11-23 135555.png" alt="Logical Squad Logo" class="logo-image">
            <h1>About Logical Squad</h1>
            <p>
                Logical Squad was born in the University of the Fraser Valley during the journey of the COMP 370 project. 
                Four visionary minds came together with a shared passion for technology and innovation. 
                This collaboration led to the creation of TikChat, a platform for sharing and connecting with others privately and publicly.
            </p>
            <p>
                TikChat was designed to reflect the core values of Logical Squad: creativity, privacy, and community. 
                It’s more than just a social media platform; it’s a product of hard work, late nights, and the innovative spirit of four dedicated students.
            </p>

            <div class="authors-list">
                <div class="author-card">
                    <h2>Gurtaj Singh</h2>
                    <p>Student ID: 300206952</p>
                </div>
                <div class="author-card">
                    <h2>Palak Saroop</h2>
                    <p>Student ID: 300209805</p>
                </div>
                <div class="author-card">
                    <h2>Manpreet Singh</h2>
                    <p>Student ID: 300206509</p>
                </div>
                <div class="author-card">
                    <h2>Samarth Singla</h2>
                    <p>Student ID: 300206240</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Logical Squad. All rights reserved.</p>
    </footer>
</body>
</html>
