<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="tikchat.png">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Tik Chat - Login</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #e8dacb;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #3d3027;
    }

    .outuserin {
        padding: 20px;
    }

    .userin {
        background: #fff5e6;
        max-width: 400px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        text-align: center;
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

    .userin label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        font-size: 14px;
        color: #5c4738;
    }

    .userin input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #a3896f;
        border-radius: 8px;
        font-size: 16px;
        color: #3d3027;
        background-color: #f9f1e7;
        transition: border 0.3s, box-shadow 0.3s;
    }

    .userin input:focus {
        border: 1px solid #8e6b51;
        box-shadow: 0 0 5px rgba(142, 107, 81, 0.5);
        outline: none;
    }

    .userin input[type="submit"] {
        margin-top: 15px;
        background-color: #8e6b51;
        color: #fff;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s, transform 0.2s;
    }

    .userin input[type="submit"]:hover {
        background-color: #5c4738;
        transform: scale(1.05);
    }

    .userin a {
        color: #8e6b51;
        text-decoration: none;
        font-size: 14px;
        margin-top: 10px;
        display: inline-block;
    }

    .userin a:hover {
        text-decoration: underline;
    }

    .userin button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #8e6b51;
        border: none;
        border-radius: 8px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .userin button:hover {
        background-color: #5c4738;
        transform: scale(1.05);
    }

    .userin button a {
        color: white;
        text-decoration: none;
    }

    .error {
        color: #d9534f;
        font-size: 12px;
        text-align: left;
        margin: -8px 0 8px 0;
    }

    @media (max-width: 500px) {
        body {
            padding: 20px;
        }

        .userin {
            padding: 20px;
        }
    }
</style>
<body>
    <center>
        <div class="outuserin">
            <div class="userin">
            <h1 id="header">
            <img src="communities/Screenshot 2024-11-23 152243.png" alt="">Tik Chat
        </h1>
        <form id="loginForm" action="logging.php" method="post" novalidate>
            <label for="email">Username:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" autofocus>
            <div id="emailError" class="error" aria-live="polite"></div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" placeholder="Enter your password">
            <div id="passwordError" class="error" aria-live="polite"></div>

            <input type="hidden" name="community" value="<?php echo isset($_GET['community']) ? htmlspecialchars($_GET['community']) : ''; ?>">
            <input type="submit" value="Login" class="login-button">
            <a href="resetpass.php">Forgot Password?</a>
            <br><br>
            Don't have an account?
            <button><a href="signup.php">Sign Up</a></button>
        </form>
            </div>
        </div>
    </center>

    <script>
        const form = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        form.addEventListener('submit', (e) => {
            let isValid = true;

            // Validate email
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailRegex.test(emailInput.value)) {
                isValid = false;
                emailError.textContent = 'Please enter a valid email address.';
            } else {
                emailError.textContent = '';
            }

            // Validate password
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            if (!passwordRegex.test(passwordInput.value)) {
                isValid = false;
                passwordError.textContent =
                    'Password must be at least 8 characters, include uppercase, lowercase, number, and special character.';
            } else {
                passwordError.textContent = '';
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
