<div class="navbar">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/services') }}">Services</a>
    <a href="{{ url('/contact') }}">Contact</a>
</div>

<style>
    .navbar {
        background-color: orange;
        overflow: hidden;
        padding: 10px 20px;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
        padding: 14px 16px;
        display: inline-block;
    }

    .navbar a:hover {
        background-color: #575757;
    }
</style>
