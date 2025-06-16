<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - DelishBites</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff8f0;
        }

        nav {
            background-color: #ff6347;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ffe6e0;
        }

        .section {
            padding: 4rem 2rem;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #ff6347;
            color: white;
        }
    </style>
</head>
<body>

    @include('includes.navbar')

    <section class="section">
        <h1>Welcome to DelishBites</h1>
        <p>Enjoy gourmet meals crafted with love and passion. We serve fresh, hot, and delicious food right at your doorstep.</p>
        <p>Explore our wide range of recipes — from quick bites to hearty dinners.</p>
    </section>

    @include('includes.footer')
</body>
</html>
