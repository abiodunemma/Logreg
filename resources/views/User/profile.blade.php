<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        transition: background-color 0.3s, color 0.3s;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile-card {
        background: var(--card-bg);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: background 0.3s;
    }

    .profile-pic {
        border-radius: 50%;
        width: 150px;
        height: 150px;
    }

    .username {
        margin: 10px 0;
    }

    .social-links {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .social-link {
        margin: 0 10px;
        text-decoration: none;
        color: var(--link-color);
        transition: color 0.3s;
    }

    .social-link:hover {
        color: var(--link-hover-color);
    }

    /* Light Mode Styles */
    :root {
        --bg-color: #f0f0f0;
        --text-color: #333;
        --card-bg: #ffffff;
        --link-color: #007bff;
        --link-hover-color: #0056b3;
    }

    /* Dark Mode Styles */
    body.dark-mode {
        --bg-color: #181818;
        --text-color: #f0f0f0;
    }

    body.dark-mode .profile-card {
        --card-bg: #222222;
    }

    body.dark-mode .social-link {
        --link-color: #1e90ff;
        --link-hover-color: #1c7edb;
    }

    body {
        background-color: var(--bg-color);
        color: var(--text-color);
    }

</style>
</head>
<body>
    {{ $top }}

      -
    <div class="container">
        <header>
         <center>   <h1>User Profile</h1> </center>
            <button id="mode-toggle">Toggle Dark/Light Mode</button>
        </header>
  <div class="profile-card">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-pic">
        <h1>Usename:</h1>    <h2 class="username">{{  Auth::User()->name  }}</h2>
        <h1>Email:</h1>    <h2 class="username">{{  Auth::User()->email  }}</h2>
<h1> Area:</h1>            <h2 class="username">{{  Auth::User()->area  }}</h2>
       {{--  <h1>Bank id:  </h1>   <h2 class="username">{{  $top->name }}</h2>  --}}
            {{--  <h3 class="username">{{  $top->userid }}</h2>
            <h3 class="username">{{  $top->name }}</h2>
            <h3 class="username">{{  $top->bvn }}</h2>
            <h3 class="username">{{  $top->nin }}</h2>  --}}


            <p class="bio">Web Developer. Tech Enthusiast. Avid Reader.</p>
            <div class="social-links">
                <a href="https://wwww.linkedin.com/uas/login" class="social-link">LinkedIn</a>
                <a href="https:github.com/login" class="social-link">GitHub</a>
                <a href="https://x.com/login" class="social-link">Twitter</a>
                <form action="User/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image" required>
                    <button type="submit"> Upload Image</button>
                </form>
            </div>
        </div>
    </div>

    <script>const modeToggle = document.getElementById('mode-toggle');

        modeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
        </script>

</body>
</html>
