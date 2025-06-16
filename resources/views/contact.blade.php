<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Foodie Delight</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-bottom: 80px;
        }

        .content {
            padding: 20px;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        .contact-form button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #333;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

@include('includes.navbar')

<div class="content">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="5" placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

@include('includes.footer')

</body>
</html>
