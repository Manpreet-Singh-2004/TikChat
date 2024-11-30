<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="tikchat.png">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Reset Password</title>
    <style>
        /* Global styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(135deg, #4A90E2, #50E3C2);
            color: #333;
        }

        /* Centered container for reset form */
        .outuserin {
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .userin h1 {
            color: #4A90E2;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #4A90E2;
            outline: none;
        }

        label {
            font-size: 0.9rem;
            color: #555;
            align-self: flex-start;
            margin-bottom: 0.3rem;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #4A90E2;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3A78C2;
        }

        /* Link styling */
        .back-link {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .back-link a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .back-link a:hover {
            color: #3A78C2;
        }

        /* Responsive adjustments */
        @media (max-width: 500px) {
            .outuserin {
                padding: 1.5rem;
            }
            
            .userin h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="outuserin">
        <div class="userin">
            <h1>Change Password</h1>
            <form action="resetlogic.php" method="post">
                <label for="uname">Enter Username:</label>
                <input type="text" id="uname" name="uname" placeholder="Username" required>

                <label for="npass">New Password:</label>
                <input type="password" id="npass" name="npass" placeholder="Type new password" required>

                <label for="cnpass">Confirm Password:</label>
                <input type="password" id="cnpass" name="cnpass" placeholder="Confirm new password" required>

                <input type="submit" value="Submit">
            </form>
            <div class="back-link">
                <a href="index.php">Back to Login</a>
            </div>
        </div>
    </div>
</body>

</html>
