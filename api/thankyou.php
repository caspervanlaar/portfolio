
<?php
// Ensure HTML output
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .thank-you-container {
            text-align: center;
            background: #fff;
            padding: 3rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        .thank-you-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .thank-you-container p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .toggle-button {
            display: inline-block;
            background-color: #007acc;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.2s;
            cursor: pointer;
        }
        .toggle-button:hover {
            background-color: #005ea2;
        }
    </style>
</head>
<body>
    <main>
        <div class="thank-you-container">
            <h2>Thank You!</h2>
            <p>Your message has been sent successfully. I’ll get back to you as soon as possible.</p>
            <a href="/" class="toggle-button">Back to Home</a>
        </div>
    </main>
</body>
</html>