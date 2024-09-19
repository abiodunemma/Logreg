

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
        <p>user :{{ Auth::user()->name  }} <span>*</span></p>
        <p>email: {{ Auth::user()->email  }} <span>*</span></p>
        <p>user id: {{  Auth::User()->id  }} <span>*</span></p>
    </header>
    <main class="main-content">
        <div class="container">

<section class="add-product">
    <form action="/kyc1" method="POST" enctype="multipart/form-data">
        @csrf

        <h3>NIN/BVN</h3>
        <input type="hidden" placeholder=""  name="userid" id="userid" value="{{ Auth::user()->id  }}">
        <input type="hidden" placeholder=""  name="name" id="username" value="{{ Auth::user()->name  }}">

        <input type="text"  id ="bvn" name="bvn" required maxlength="50"
        placeholder="enter bvn number" class="box">

        <p>NIN <span>*</span></p>
        <input type="text" id="nin" name="nin" class="box" required maxlength="250"
        placeholder="Nin" class="ab">
    <center>

        <p>virification staus: {{ session('mssg') }}</p>
    </center>

      <button type="submit" > save</button>
        <p>{{ session('mssg') }}</p>
    </section>

        </div>

    </main>



</body>
</html>
