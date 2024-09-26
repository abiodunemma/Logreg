<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payment Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .ads {
            background: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .ad {
            background: #d1ecf1;
            padding: 10px;
            margin: 5px 0;
            border-left: 5px solid #17a2b8;
        }

        .payment-form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Payment Page</h1>
        </header>

        <section class="ads">
            <h2>Sponsored Ads</h2>
            <div class="ad">Ad 1: Buy One Get One Free!</div>
            <div class="ad">Ad 2: 50% Off All Items!</div>
        </section>

        <form class="payment-form" action="{{ route('Pay/paypal') }}" method="POST">
            @csrf
            <h2>Make a Payment</h2>
            <label for="amount">Price:  $5</label>
            <input type="hidden" name="price" value="5" required>
            <input type="hidden" name="product_name" value="laptop" required>
            <input type="hidden" name="quantity" value="1" required>
            {{--  <input type="hidden" name="price" value="5" required>  --}}
{{--
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" required>

            <label for="expiry">Expiry Date:</label>
            <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>  --}}

            <button type="submit">Pay Now with Paypal</button>
        </form>
    </div>
</body>
</html>
