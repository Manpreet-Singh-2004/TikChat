<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Community</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff9e1; /* Light beige background */
            color: #5c3d2e; /* Text color */
        }

        header {
            background: linear-gradient(to right, #9e7c5a, #5c3d2e);
            background-color: #fff9e1;
            color: white;
            text-align: center;
            padding: 40px 20px;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 80%;
            
            z-index: 1;
        }

        header > div {
            position: relative;
            z-index: 2;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            
        }

        header p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #5c3d2e; /* Dark brown for button */
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #9e7c5a; /* Lighter brown on hover */
            transform: scale(1.05);
        }

        section {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        section h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 15px;
            color: #5c3d2e; /* Dark brown for section heading */
        }

        section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }

        .reasons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .reason {
            flex: 1 1 calc(30% - 20px);
            margin: 10px;
            background: #fff3cd; /* Light beige-yellow background */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .reason img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .reason h3 {
            color: #9e7c5a; /* Light brown for heading */
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .reason p {
            font-size: 1rem;
            color: #555;
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
    <!-- Header Section -->
    <header>
        <div class="overlay"></div>
        <div>
            <h1>Welcome to the Study Community</h1>
            <p>Unlock your academic potential with a community that thrives on knowledge-sharing and support.</p>
            <a href="index.php?community=Study" class="btn">Join Now</a>
        </div>
    </header>

    <!-- Why Choose Us Section -->
    <section>
        <h2>Why Choose Our Study Community?</h2>
        <p>Our Study Community is more than just a platform – it's a network of learners, educators, and enthusiasts who believe in the power of collaboration. Here’s what makes us stand out:</p>
        <div class="reasons">
            <div class="reason">
                <img src="communities/study/s1.png" alt="Expert Guidance">
                <h3>Expert Guidance</h3>
                <p>Connect with experienced tutors and professionals who can help you with your academic challenges.</p>
            </div>
            <div class="reason">
                <img src="communities/study/s2.png" alt="Collaborative Learning">
                <h3>Collaborative Learning</h3>
                <p>Study in groups, participate in discussions, and share notes to enhance your understanding of any topic.</p>
            </div>
            <div class="reason">
                <img src="communities/study/s3.jpeg" alt="Exclusive Resources">
                <h3>Exclusive Resources</h3>
                <p>Gain access to premium study materials, mock tests, and interactive tools designed to improve your performance.</p>
            </div>
            <div class="reason">
                <img src="communities/study/s4.jpeg" alt="Global Community">
                <h3>Global Community</h3>
                <p>Meet students and educators from all around the world and learn from their diverse perspectives and experiences.</p>
            </div>
            <div class="reason">
                <img src="communities/study/s5.jpeg" alt="Personalized Support">
                <h3>Personalized Support</h3>
                <p>Receive customized learning recommendations and one-on-one mentoring to help you achieve your academic goals.</p>
            </div>
            <div class="reason">
                <img src="communities/study/s6.jpeg"  alt="Motivation & Accountability">
                <h3>Motivation & Accountability</h3>
                <p>Stay motivated with regular study challenges, progress trackers, and a supportive peer network.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Logical Squad. All rights reserved.</p>
    </footer>
</body>
</html>
