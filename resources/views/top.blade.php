
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link page</title>

  <style>

    * Reset default margin and padding */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: rgb(132, 110, 171);
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
        color: #f11010;
        font-size: 0.9em;
    }

    .footer-nav a:hover {
        text-decoration: underline;
    }


body {
    background-color: #9973b3; /* Black background */
    color: #3a0303; /* White text color */
    font-family: Arial, sans-serif;
}

.header {
    text-align: center;
    padding: 20px;
    background-color: #e8e1e1; /* Darker background for header */
    border-bottom: 2px solid #1263be; /* Slightly lighter border */
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
    background-color: #20052c; /* Darker container background */
    border: 1px solid #000000; /* Border for container */
    border-radius: 8px;
    padding: 20px;
    width: 100%;
    margin: 10px 0;
    text-align: center;
}

.link {
    display: block;
    color: #ff1e2d; /* Blue color for links */
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
        <h1>Link Bank Account</h1>
        <p>user id: {{  Auth::User()->id  }} <span>*</span></p>
       // <p>user id:<span>*</span></p>
    </header>
    <main class="main-content">
        <div class="container">
            <a hre  1f="#" class="link">Chat with Us</a>
            <a href="#" class="link">FAQs</a>
            <a href="#" class="link">Give Feedback</a>
        </div>
        <section class="add-product">
        <form action="/top" method="POST" enctype="multipart/form-data">
            @csrf

           <center> <h3>link banks details</h3> </center>
            <input type="hidden" placeholder=""  name="userid" id="userid" value="{{ Auth::user()->id  }}">
            <input type="hidden" placeholder=""  name="name" id="name" value="{{ Auth::user()->name  }}">


            <input type="email"  id ="email" name="email" required maxlength="50"
            placeholder="enter email address" class="box">

            @if ($errors->has('email'))
            <div class="error"> {{ $errors->first('email') }}</div>

            @endif


         <center>
        </center>

          <button type="submit" > save</button>

        </form>
            <p>{{ session('mssg') }}</p>
        </section>

            </div>

        </main>




</body>
</html>




