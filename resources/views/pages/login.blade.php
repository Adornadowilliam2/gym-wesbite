<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Gym Website</title>
            <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                overflow: hidden;
                background-image: url("https://images.unsplash.com/photo-1540497077202-7c8a3999166f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
                background-size: cover;
                background-position: center;
            }

            form {
                padding: 20px;
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                border-radius: 5px;
                width: 300px;
                background-color: white;
                font-family: "Noto Sans", sans-serif;
                text-align: center;
                opacity: 0;
                animation: fadeIn 1s forwards; 
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px); 
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            form label {
                display: flex;
                flex-direction: column;
                text-align: left;
            }

            form input {
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                width: 100%;
            }

            form button {
                padding: 10px;
                border-radius: 5px;
                border: none;
                background-color: #4caf50;
                color: white;
                cursor: pointer;
                width: 100%;
                margin-bottom: 10px;
            }

            @media (max-width: 600px) {
                form {
                    width: 100%;
                    padding: 10px;
                    box-sizing: border-box;
                }
                form label {
                    flex-direction: row;
                    justify-content: space-between;
                }
                form input {
                    width: 100%;
                    margin-top: 5px;
                }
                form button {
                    width: 100%;
                }
            }

            span {
                color: red;
                display: block;
                margin-bottom: 10px;
            }

            h1 {
                margin-bottom: 20px;
            }

            img {
                border-radius: 10px;
                width: 100px;
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                margin: 0 auto 20px;
            }

            .register-link {
                text-align: center;
                color: #4caf50;
                text-decoration: none;
            }

            .register-link:hover {
                text-decoration: underline;
            }

            p {
                font-size: 12px;
            }

            span{
                font-size:12px;
            }
        </style>
    </head>
    <body>
        <main>
      

            <form
                id="login-form"
                action="{{ route('login') }}"
                method="POST"
                style="position:relative"
            >
                <a href="/" style="position:absolute; right:10px;">
                    <img src="assets/close.png" alt="Close" style="width:20px; box-shadow: none"/>
                </a>
                @csrf
                <img src="assets/logo.png" alt="logo">
                <h1>Login</h1>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
                </div>
                <span>{{ $errors->first('email') }}</span>
                <div>
                    <label for="password">Password:</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    />
                </div>
                <span>{{ $errors->first('password') }}</span>
                <button type="submit">Login</button>
               <p className="register-text">Don't have an account yet?<a href="{{ route('register') }}" class="register-link"> Register here</a></p>
            </form>
        </main>
    </body>
</html>
