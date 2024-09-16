<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Navigation Bar</title>
    <link href="css/header.css" rel="stylesheet">
    <link href="css/welcome.css" rel="stylesheet">



</head>
<body>


    <link href="css/footer.css" rel="stylesheet">
    <header class="header">
        <div class="container">
            <div class="welcome-message">Hello, {{ Auth::user()->name }}</div>
            <div class="notification">
                <span class="notification-icon">&#128276;</span> <!-- Unicode for bell icon -->
                <span class="notification-count">3</span>
            </div>
        </div>
    </header>



        <div class="atm-card">
            <div class="card-header">
                <h2>Wallet Balance</h2>
            </div>

                        <span class="label">Date:</span>
                        <span class="value" id="date">09/16/2024</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Time:</span>
                        <span class="value" id="time">14:30</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Account Balance:</span>
                        <span class="value" id="balance">$1,234.56</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript to handle encryption (Placeholder) -->
        <script>
            // Placeholder for encryption logic
            // In real implementation, use appropriate encryption library/method
            function encrypt(data) {
                return data; // Dummy function for demonstration
            }

            // Example of encryption usage
            console.log(encrypt("Sensitive data"));
        </script>












    <!-- Other content of the webpage -->

    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="#">Card</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
