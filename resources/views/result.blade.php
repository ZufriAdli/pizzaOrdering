<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9ecef;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 40px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #f0f0f0 25%, #ffffff 75%);
        }
        h1 {
            color: #007bff;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .result {
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 500;
        }
        .amount {
            font-size: 36px;
            font-weight: 700;
            color: #28a745;
            margin-top: 10px;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background: #d4edda;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .back-link {
            margin-top: 30px;
            font-size: 18px;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #007bff;
            background: #ffffff;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
        }
        .back-link a:hover {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Result</h1>
        <div class="result">
            <p>Your final bill is:</p>
            <p class="amount">RM{{ $total_amount }}</p>
        </div>
        <div class="back-link">
            <a href="{{ url('/order') }}">Return to Order Form</a>
        </div>
    </div>
</body>
</html>
