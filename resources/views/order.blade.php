<!DOCTYPE html>
<html>
<head>
    <title>Pizza Ordering</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: bold;
            text-transform: uppercase;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }
        select, input[type="checkbox"] {
            margin-bottom: 20px;
            font-size: 16px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select:focus, input[type="checkbox"]:focus {
            border-color: #007bff;
            outline: none;
        }
        .price-info {
            font-size: 15px;
            color: #555;
            margin-bottom: 20px;
            border-left: 4px solid #007bff;
            padding-left: 15px;
            text-align: left;
            display: inline-block;
            width: 100%;
        }
        button {
            padding: 12px 25px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        p.smaller {
            font-size: 12px; /* Adjusted font size for smaller text */
            color: #666;
            margin-top: 20px;
            text-align: center; /* Centered the text */
            width: 100%; /* Ensures the note takes full width of its container */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pizza Ordering Form</h1>
        <form action="/order" method="POST">
            @csrf

            <label for="size">Select Pizza Size:</label>
            <select name="size" id="size" aria-required="true" required>
                <option value="" disabled selected>-- Select Size --</option>
                <option value="small">Small - RM15.00</option>
                <option value="medium">Medium - RM22.00</option>
                <option value="large">Large - RM30.00</option>
            </select>

            <div class="price-info">
                <p><strong>Additional Options:</strong></p>
                <label for="pepperoni">
                    <input type="checkbox" name="pepperoni" id="pepperoni" value="true">
                    Add Pepperoni
                </label>
                <p>+ RM3.00 for Small, + RM5.00 for Medium, + RM7.00 for Large</p> 

                <label for="extra_cheese">
                    <input type="checkbox" name="extra_cheese" id="extra_cheese" value="true">
                    Add Extra Cheese
                </label>
                <p>+ RM6.00 for any size</p>
            </div>

            <button type="submit">Calculate Bill</button>
        </form>
        <p class="smaller">Note: The large option did not specify a price for pepperoni, so I added +RM7.00 for the large size.</p>
    </div>
</body>
</html>
