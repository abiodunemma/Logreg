

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Page</title>

  <style>

    * Reset default margin and padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: black;
        margin-bottom: 80px; /* Ensure there's space for the footer */
    }

    .footer {

   /* Shadow effect */
        padding: 20px 0; /* Space inside the footer */
        margin-top: 20px; /* Space above the footer */
        width: 100%;
        position: fixed;

        left: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-nav ul {
        list-style: none;
        display: flex;
        justify-content: center; /* Center the navigation items */
        gap: 60px;
    }

    .footer-nav a {
        text-decoration: none;
        color: #ffffff;
        font-size: 0.9em;
    }

    .footer-nav a:hover {
        text-decoration: underline;
    }


body {
    background-color: #000000; /* Black background */
    color: #ffffff; /* White text color */
    font-family: Arial, sans-serif;
}

.header {
    text-align: center;
    padding: 20px;
    background-color: #000000; /* Darker background for header */
    border-bottom: 2px solid #444444; /* Slightly lighter border */
}

.header h1 {
    font-size: 2em;
    margin: 0;
}

.main-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.container {
    background-color: #222222; /* Darker container background */
    border: 1px solid #000000; /* Border for container */
    border-radius: 8px;
    padding: 20px;
    width: 100%;
    margin: 10px 0;
    text-align: center;
}

.link {
    display: block;
    color: #1e90ff; /* Blue color for links */
    text-decoration: none;
    margin: 10px 0;
    font-size: 1.2em;
}

.link:hover {
    text-decoration: underline;
}

  </style>
</head>
<body>
    <header class="header">
        <h1>KYC Information</h1>
    </header>
    <main class="main-content">
        <div class="container">
            <a href="#" class="link">Chat with Us</a>
            <a href="#" class="link">FAQs</a>
            <a href="#" class="link">Give Feedback</a>
        </div>
        <div class="container">

            <a href="#" class="link">call us </a>
            <a href="#" class="link">@ask@tuochdow.gmail.com</a>
        </div>
        <div class="container">
            <a href="#" class="link">instagram</a>
            <a href="#" class="link">Facebook</a>
            <a href="#" class="link">Twitter</a>
        </div>
    </main>


    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="support">Support</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="#">Card</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</body>
</html>




