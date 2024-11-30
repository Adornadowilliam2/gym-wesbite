<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register Gym Website</title>
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
                padding: 10px;
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                border-radius: 5px;
                width: 300px;
                background-color: white;
                font-family: "Noto Sans", sans-serif;
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
                margin-bottom: 10px;
            }
            h1 {
                text-align: center;
            }

            img {
                border-radius: 10px;
                width: 100px;
                box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
                margin: 0 auto;
                margin-bottom: 10px;
            }

            p {
                font-size: 12px;
                text-align: center;
            }

            .login-link {
                text-align: center;
                color: #4caf50;
                text-decoration: none;
            }

            .login-link:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <main>
            <form
                id="register-form"
                style="display: flex; flex-direction: column"
                action="{{ route('register') }}"
                method="POST"
            >
                @csrf
                <img src="assets/logo.png" alt="logo">
                <h1>Register</h1>
                <div>
                    <label for="username">Username:</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                    />
                </div>
                <span style="color: red">{{ $errors->first('username') }}</span>
                <div>
                    <label for="email">Email:</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                    />
                </div>
                <span style="color: red">{{ $errors->first('email') }}</span>
                <div>
                    <label for="password">Password:</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                    />
                </div>
                <span style="color: red">{{ $errors->first('password') }}</span>
                <div>
                    <label for="password_confirmation">Confirm Password:</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                    />
                </div>
                <span style="color: red">{{ $errors->first('password_confirmation') }}</span>
                <button type="submit">Register</button>
                <p className="login-text">Already have an account? <a href="{{ route('login') }}" class="login-link">Here</a></p>
            </form>
        </main>
    </body>
</html>
