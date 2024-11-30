<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFV Degrees</title>
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
    background: linear-gradient(to right, #9e7c5a, #5c3d2e);
    padding: 30px 30px;
    display: flex;
    justify-content: center; 
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
    text-align: center; 
}

        main {
            padding: 40px 20px;
        }

        .category {
            margin-bottom: 30px;
        }

        .category h2 {
            font-size: 24px;
            color: #5c3d2e;
            margin-bottom: 10px;
        }

        .degree {
            background-color: #fff;
            border: 2px solid #9e7c5a;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 10px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .degree:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .degree h3 {
            font-size: 20px;
            color: #5c3d2e;
            margin-bottom: 10px;
        }

        .degree p {
            font-size: 16px;
            color: #7a5636;
        }

        .join-btn {
            margin-top: 15px;
            background-color: #5c3d2e;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .join-btn:hover {
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
            <img src="images.jpeg" alt="UFV Logo">
            <h1>UFV Degrees and Programs</h1>
        </div>
    </header>

    <main id="degree-list">
        <!-- Degrees will be populated here by JavaScript -->
    </main>

    <footer>
        <p>&copy; 2024 UFV Degrees. All rights reserved.</p>
    </footer>

    <script>
        const degrees = [
            {
                category: "Agriculture",
                programs: [
                    { title: "Agricultural Science, Horticulture major — bachelor's degree", description: "Focus on horticulture practices and sustainability." },
                    { title: "Berry Production Essentials — certificate", description: "Learn essentials of berry production." },
                    { title: "Agriculture Technology — diploma", description: "Explore modern agricultural technologies." },
                    { title: "Current Agricultural Practices Essentials — certificate", description: "Study up-to-date agricultural practices." },
                    { title: "Livestock Production — certificate", description: "Specialize in livestock care." },
                ]
            },
            {
                category: "Business and Management",
                programs: [
                    { title: "Accounting — certificate", description: "Build foundational accounting skills." },
                    { title: "Business Administration — bachelor's degree", description: "Master core business management concepts." },
                    { title: "Business Analytics — post-baccalaureate diploma", description: "Leverage analytics for business decisions." },
                    { title: "International Business — post-baccalaureate diploma", description: "Expand knowledge in global business strategies." },
                    { title: "Marketing — bachelor's degree", description: "Learn marketing strategies and consumer behavior." },
                ]
            },
            {
                category: "Computer Systems and Technology",
                programs: [
                    { title: "Computer Information Systems — bachelor's degree", description: "Learn systems design, networking, and programming." },
                    { title: "Coding Skills — associate certificate", description: "Develop essential coding expertise." },
                    { title: "Media Arts — bachelor's degree", description: "Blend technology and creativity in media arts." },
                    { title: "Applied Geographic Information Systems — associate certificate", description: "Apply GIS technologies across disciplines." },
                    { title: "Web Development — certificate", description: "Learn web programming and design fundamentals." },
                ]
            },
            {
                category: "Health Sciences and Services",
                programs: [
                    { title: "Certified Dental Assistant — certificate", description: "Train for a career in dental care." },
                    { title: "Kinesiology — bachelor's degree", description: "Study the science of movement and health." },
                    { title: "Nursing — Bachelor of Science", description: "Prepare for a fulfilling nursing career." },
                    { title: "Health Care Assistant — certificate", description: "Assist patients in health care settings." },
                    { title: "Medical Office Assistant — certificate", description: "Manage administrative tasks in medical offices." },
                ]
            },
            {
                category: "Trades",
                programs: [
                    { title: "Carpentry — certificate", description: "Build foundational carpentry skills." },
                    { title: "Heavy Mechanical Trades Foundation — certificate", description: "Enter the mechanical trades industry." },
                    { title: "Automotive Service — certificate", description: "Learn automotive repair basics." },
                    { title: "Welding — certificate", description: "Master welding techniques for various applications." },
                    { title: "Electrical — certificate", description: "Learn electrical installation and maintenance." },
                ]
            },
            {
                category: "Arts and Humanities",
                programs: [
                    { title: "English — bachelor's degree", description: "Study literature, writing, and critical analysis." },
                    { title: "Psychology — bachelor's degree", description: "Explore human behavior and mental processes." },
                    { title: "Philosophy — bachelor's degree", description: "Dive into philosophical thinking and ethics." },
                    { title: "History — bachelor's degree", description: "Learn about past events and their impact on the present." },
                ]
            },
            {
                category: "Environmental Studies",
                programs: [
                    { title: "Environmental Science — bachelor's degree", description: "Study the interaction between humans and the environment." },
                    { title: "Sustainable Development — diploma", description: "Learn strategies for sustainable development." },
                    { title: "Conservation Biology — certificate", description: "Specialize in the conservation of biodiversity." },
                ]
            }
        ];

        const degreeList = document.getElementById('degree-list');

        degrees.forEach(category => {
            const categoryDiv = document.createElement('div');
            categoryDiv.classList.add('category');
            const categoryTitle = document.createElement('h2');
            categoryTitle.textContent = category.category;
            categoryDiv.appendChild(categoryTitle);

            category.programs.forEach(program => {
                const programDiv = document.createElement('div');
                programDiv.classList.add('degree');
                const programTitle = document.createElement('h3');
                programTitle.textContent = program.title;
                const programDesc = document.createElement('p');
                programDesc.textContent = program.description;
                const joinButton = document.createElement('a');
                joinButton.textContent = "Join Now";
                joinButton.href = `index.php?degree=${encodeURIComponent(program.title)}`;
                joinButton.classList.add('join-btn');

                programDiv.appendChild(programTitle);
                programDiv.appendChild(programDesc);
                programDiv.appendChild(joinButton);
                categoryDiv.appendChild(programDiv);
            });

            degreeList.appendChild(categoryDiv);
        });
    </script>
</body>
</html>
