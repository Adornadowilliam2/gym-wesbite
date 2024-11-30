<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Gym Website</title>
        <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            background-color: #333;
            padding: 10px 20px;
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
            width: 50px; /* Adjust size as needed */
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

        .about-section {
            padding: 50px 20px;
            background-color: white;
            text-align: center;
            max-width: 900px;
            margin: 100px auto 40px auto; /* Added margin to avoid overlap with fixed navbar */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-section img {
            max-width: 200px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-section h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
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
            <li><a href="/#services">Services</a></li>
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

    <!-- About Us Section -->
    <section class="about-section">
        <img src="assets/logo.png" alt="Gym Logo">
        <h1>About Our Gym</h1>
        <p>Welcome to our premier gym, where fitness meets community. Our mission is to help you achieve your health and wellness goals through a combination of state-of-the-art equipment, expert trainers, and a supportive atmosphere.</p>
        <p>We believe in providing personalized fitness experiences tailored to your individual needs, whether you’re looking for a quick workout, strength training, or guided classes. Our team of highly skilled trainers and nutritionists are here to guide you every step of the way, ensuring you reach your full potential.</p>
        <p>Join us today and become part of a community that is dedicated to helping you lead a healthier, happier life.</p>
    </section>
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