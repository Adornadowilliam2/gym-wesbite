<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <style>
        /* Basic resets */
        body, h1, h2, h3, p, ul, li, img {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        /* Navbar styling */
        .navbar {
            background-color: #333;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar-logo {
            width: 50px;
            height: auto;
            margin-right: 20px;
        }

        .navbar span {
            color: white;
            font-size: 24px;
            display: flex;
            align-items: center;
        }

        .navbar ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #4caf50;
        }

        /* Main content */
        main {
            padding-top: 60px; /* To prevent content from being hidden under the navbar */
        }

        /* Hero section */
        .hero {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        /* Services section */
        .services {
            padding: 50px 20px;
            background-color: white;
            text-align: center;
            background-image: url("https://github.com/Adornadowilliam2/gym-wesbite/blob/main/public/assets/landingpage.png?raw=true");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .services h2 {
            margin-bottom: 30px;
            font-size: 2rem;
            color: #333;
            background-color: #333;
            color: white;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        .service-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .service-item img {
            max-width: 200px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 10px;
        }

        .service-content {
            max-width: 300px;
            width: 100%;
            text-align: left;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service-content p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        /* Map section */
        .map {
            padding: 20px;
            background-color: #ddd;
            text-align: center;
        }

        .map h2 {
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            padding: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        footer p {
            margin: 5px 0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .service-item {
                flex-direction: column;
            }

            .service-item img {
                margin: 0 auto 10px;
            }
        }

        html{
            scroll-behavior: smooth;
        }

        form button{
            color: white;
        }

        form button:hover{
            color: #4caf50;
        }

          .hamburger-menu{
            opacity: 0;
            display:none;
        }

        @media (max-width: 900px) {
            .navbar ul{
                position: absolute;
                top: 60px;
                right: 0;
                background-color: #333;
                display: block;

                padding: 0;
                opacity: 0;
            }

            .navbar ul li{
                border  : 1px solid white;
                padding:10px;
            }

            .hamburger-menu{
                opacity: 1;
                display:block;
            }
        }

      
    </style>
</head>
<body>
    <!-- Navigation Bar -->

   
    <nav class="navbar">
        <span>
            <img src="assets/logo.png" alt="logo" class="navbar-logo">
            Gym Website
        </span>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="contact">Contact</a></li>
            @if (Auth::check())
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                        <button type="submit" style="background: none;font-size:18px; border: none;  cursor: pointer;">Logout</button>
                    </form>
                </li>
            @else
               <li><a href="{{ route('login') }}">Login</a></li>
            @endif
        </ul>
         <div class="hamburger-menu">
            <img src="assets/hamburger.png" alt="menu" width="50px" style="cursor: pointer; ">
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h1>Welcome to Our Home Page</h1>
            <p>Your one-stop solution for all your needs.</p>
        </section>

        <!-- Services Section -->
        <section class="services" id="services">
            <h2>Our Services</h2>
            <div class="service-item">
                <img src="https://github.com/Adornadowilliam2/gym-wesbite/blob/main/public/assets/50%25%20off%20gym%20membership%20poster.png?raw=true" alt="Service 1">
                <div class="service-content">
                    <h3>50% Off Membership</h3>
                    <p>Take advantage of our limited-time offer! Sign up for a gym membership and get 50% off your monthly fee for the first three months. Experience top-notch fitness equipment, professional trainers, and a variety of fitness classes that suit your goals.</p>
                    <p>Don't miss out—this offer is available only for a limited time!</p>
                </div>
            </div>
            <div class="service-item">
                <img src="https://github.com/Adornadowilliam2/gym-wesbite/blob/main/public/assets/Free%20Energy%20Drink%20Every%20Weekend%20with%20a%20workout%20theme.png?raw=true" alt="Free Energy Drink Offer">
                <div class="service-content">
                    <h3>Free Energy Drink Every Weekend</h3>
                    <p>Starting from December 25 to December 30, enjoy a free energy drink every weekend when you visit our gym! Stay hydrated and energized as you work out and make the most of your fitness routine.</p>
                    <p>Join us and experience the extra boost during your workouts with this limited-time offer!</p>
                </div>
            </div>
            <div class="service-item">
                <img src="https://github.com/Adornadowilliam2/gym-wesbite/blob/main/public/assets/male%20version%20of%2030%25%20Off%20One-Time%20Trainer%20Offer%20with%20the%20theme%20of%20workout.png?raw=true" alt="Trainer Offer">
                <div class="service-content">
                    <h3>30% Off One-Time Trainer Offer</h3>
                    <p>Take advantage of this limited-time offer and enjoy 30% off a one-time training session with our expert trainers. Boost your fitness journey with personalized guidance!</p>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map" id="map">
            <h2>Find Us Here</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.484708183711!2d-122.41941548468125!3d37.77492927975913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809b9e5aefbd%3A0x2c0c3baba01b8e28!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1672868259276!5m2!1sen!2sus" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
        <p>Contact us at: info@yourcompany.com</p>
    </footer>
</body>
</html>
<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('.navbar ul');   

    hamburgerMenu.addEventListener('click', () => {
        const newOpacity = nav.style.opacity == '0' ? '1' : '0';
        nav.style.opacity = newOpacity;
    })
</script>

