<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - DelishBites</title>
    <style>
        /* Same styles as in home for consistency */
        body { margin: 0; font-family: 'Segoe UI', sans-serif; background-color: #fff8f0; }
        nav { background-color: #ff6347; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.8rem; font-weight: bold; color: white; }
        .nav-links { list-style: none; display: flex; gap: 2rem; }
        .nav-links a { color: white; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .nav-links a:hover { color: #ffe6e0; }
        .section { padding: 4rem 2rem; text-align: center; }
        footer { text-align: center; padding: 1rem; background-color: #ff6347; color: white; }
    </style>
</head>
<body>

   @include('includes.navbar')

    <section class="section">
        <h2>About Us</h2>
        <p>At DelishBites, we believe food should be fresh, flavorful, and made with love. Our journey started in 2020 with a small kitchen and a big dream — to bring restaurant-quality meals to your table.</p>
        <p>Our chefs blend tradition with creativity to bring you dishes that satisfy both heart and taste.</p>
    </section>
@include('includes.footer')

</body>
</html>
