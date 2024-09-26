@extends('layouts.app')
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
            <div class="welcome-message">Hello, {{ Auth::user()->name }}!</div>
            <div class="notification">
                <span class="notification-icon">&#128276;</span> <!-- Unicode for bell icon -->
                <span class="notification-count">3</span>
            </div>
        </div>
    </header>



@yield('content')

    <!-- Other content of the webpage -->

    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="User/profile">profile</a></li>
                    <li><a href="Pay/trans">Transactions</a></li>
                    <li><a href="#">Card</a></li>
                    <li><a href="#">Settings</a></li>

                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
