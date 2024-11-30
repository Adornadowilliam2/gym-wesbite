<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
        <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <style>
        /* Basic resets */
        body, h1, h2, h3, p, ul, li, input, textarea, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding-top: 60px; /* To prevent content from being hidden under the navbar */
            display: flex;
            flex-direction: column;
            align-items: center;
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
        /* Contact Section */
        .contact-section {
            padding: 50px 20px;
            background-color: white;
            text-align: center;
            max-width: 800px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        /* Business Card Style */
        .business-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
        }

        .business-card h2{
            font-size: 1rem;
        }

        .business-card h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .business-card p {
            font-size: 1.2rem;
            color: #555;
            margin: 5px 0;
        }

        .business-card a {
            font-size: 1.2rem;
            color: #4caf50;
            text-decoration: none;
            transition: color 0.3s ease;
            display:block;
       
        }

        .business-card a:hover {
            color: #333;
        }

        /* Contact Form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
            width: 100%;
            max-width: 500px;
            margin: 30px auto;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }
        .contact-container{
            display:flex;
            align-items: center;
            gap: 20px;
        }
        span{
            color:red;
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
         <div class="hamburger-menu" >
            <img src="assets/hamburger.png" alt="menu" width="50px" style="cursor: pointer; ">
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">


      

        <!-- Contact Form -->
        <h2>Contact Us</h2>
        <div class="contact-container">
            <form class="contact-form" action="{{ route('transaction') }}" method="post">
                @csrf
                <span class"error">{{$errors->first('user_id')}}</span>
                <input type="text" name="name" placeholder="Your Name" required>
                <span class"error">{{$errors->first('name')}}</span>
                <input type="email" name="email" placeholder="Your Email" required>
                <span class"error">{{$errors->first('email')}}</span>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <span class"error">{{$errors->first('message')}}</span>
                <button type="submit">Send Message</button>
            </form>
          <!-- Business Card -->
        <div class="business-card">
            <h2>Contact Information</h2>
            <h3>John Doe</h3>
            <p>Email: <a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a></p>
            <p>Phone: <a href="tel:+639216208340">09216208340</a></p>
            <p>Facebook: <a href="https://facebook.com/johndoe" target="_blank">John Doe Villa</a></p>
        </div>
        </div>
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