
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Biodegradable Waste Management</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: url('img.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #343a40; /* Text color */
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50; /* Heading color */
        }
        .contact-info, .contact-form {
            margin: 20px 0;
            padding: 20px;
            background-color: #ffffff; /* White background */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .contact-info p {
            font-size: 18px;
            line-height: 1.6;
        }
        .contact-form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .contact-form button {
            background-color: #27ae60; /* Button background color */
            color: white; /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .contact-form button:hover {
            background-color: #2ecc71; /* Button hover color */
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #27ae60;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>
<button class="back-button" onclick="history.back()">Back</button>
    <div class="container">
        <h1>Contact Us</h1>
        
        <div class="contact-info">
            <h2>Company Information</h2>
            <p><strong>Company Name:</strong> Green Earth Waste Management</p>
            <p><strong>Address:</strong> 123 Eco Street, Green City, GC 45678</p>
            <p><strong>Phone Number:</strong> (123) 456-7890</p>
            <p><strong>Email Address:</strong> contact@greenearth.com</p>
            <p><strong>Operating Hours:</strong> Monday - Friday, 9 AM - 5 PM</p>
        </div>
        
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="submit_contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>