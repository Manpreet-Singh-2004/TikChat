<?php
// Handle AJAX username availability check
if (isset($_GET['username_check'])) {
    header('Content-Type: application/json');

    // Database connection
    $conn = new mysqli("localhost", "root", "", "school");

    if ($conn->connect_error) {
        echo json_encode(['available' => false]);
        exit();
    }

    $username = trim($_GET['username_check']);

    // Check if username exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    echo json_encode(['available' => $result->num_rows === 0]);

    $stmt->close();
    $conn->close();
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "", "school");

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $username = trim($_POST['uname']);
    $password = password_hash($_POST['upass'], PASSWORD_BCRYPT);

    // Check if the username already exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username is already taken. Please choose another.";
    } else {
        // Insert the new user into the database
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $success = "Account created successfully!";
        } else {
            $error = "Error creating account. Please try again.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tikchat.png" type="image/png">
    <title>Tik Chat - Sign Up</title>
    <style>
        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #e8dacb;
            color:#3d3027;
        }

        .container {
            max-width: 400px;
            width: 90%;
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 2.8rem;
            color: #3d3027;
            margin-bottom: 0.5rem;
            background: #fff5e6;
        }

        h2 {
            font-size: 1.2rem;
            color: #3d3027;
            margin-bottom: 1.5rem;
        }

        .error, .success {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 1rem;
            text-align: center;
        }



        .success {
            background: #fff5e6;
            color: ;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        label {
            text-align: left;
            font-weight: 500;
            font-size: 1rem;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6C63FF;
            outline: none;
        }

        input[type="submit"] {
            padding: 12px;
            border: none;
            background: #8e6b51;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
         #header {
        font-size: 42px;
        color: #5c4738;
        font-weight: bold;
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
        #header img {
        width: 70px;
        height: 70px;
        border-radius: 20%;
    }

        input[type="submit"]:hover {
            background: #5c4738;
        }

        .login-link {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #3d3027;
        }

        .login-link a {
            color: #3d3027;
            font-weight: bold;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            h1 {
                font-size: 2.2rem;
            }

            h2 {
                font-size: 1rem;
            }

            input[type="submit"] {
                padding: 10px;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const usernameInput = document.getElementById("uname");
            const passwordInput = document.getElementById("upass");
            const submitButton = document.querySelector("input[type='submit']");

            usernameInput.addEventListener("blur", () => {
                const username = usernameInput.value.trim();
                if (username.length > 0) {
                    fetch(`signup.php?username_check=${encodeURIComponent(username)}`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.available) {
                                alert("Username is already taken. Please choose another.");
                                usernameInput.focus();
                                submitButton.disabled = true;
                            } else {
                                submitButton.disabled = false;
                            }
                        });
                }
            });

            passwordInput.addEventListener("input", () => {
                const password = passwordInput.value;
                const strongPasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

                if (!strongPasswordRegex.test(password)) {
                    passwordInput.style.borderColor = "red";
                    submitButton.disabled = true;
                } else {
                    passwordInput.style.borderColor = "green";
                    submitButton.disabled = false;
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
    <h1 id="header">
            <img src="communities/Screenshot 2024-11-23 152243.png" alt="">Tik Chat
        </h1>
        <h2>Sign Up</h2>
        <?php if (isset($error)) : ?>
            <p class="error"><?= $error ?></p>
        <?php elseif (isset($success)) : ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>
        <form method="post" action = "reg_newuser.php">
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="uname" placeholder="Enter your username" required>

            <label for="upass">Password:</label>
            <input type="password" name="upass" id="upass" placeholder="Enter your password" required>

            <input type="submit" value="Create Account">
        </form>
        <div class="login-link">
            Already have an account? <a href="index.php">Login</a>
        </div>
    </div>
</body>
</html>
