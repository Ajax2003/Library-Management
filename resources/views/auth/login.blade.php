<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0438d8cf7.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style> 
        body {
            padding: 0;
            margin: 0;

        }
        .logo {
            height: 80px;
            width: 100px;
            display: flex;
        }
        .container {
            position: relative; /* Remove absolute positioning */
            width: 100%; /* Stretch to full width */
            height: 100vh; /* Stretch to full height */
            background: url("/images/login.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .container .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 58%;
            height: 100%;
            font-family: "Courier New", monospace;
            color: white;

        }
        .content h2{
            font-size: 60px;
            padding: 50px;
        }

        .content h2 span{
            font-size: 40px;
        }

        .text-welcome p {
            text-align: justify;
            font-size: 25px;
            padding: 30px;
        }

        .container .logging {
            position: absolute;
            top: 0;
            right: 0;
            width: calc(100% - 58%);
            height: 100%;
        }


        .logging .form-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #f3f3f3;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            color: black;
            font-family: "Courier New", monospace;

        }

        .form-box h2 {
            font-size: 40px;
            text-align: center;
        }

        .form-box .input-box {
            position: relative;
            width: 340px;
            height: 50px;
            border-bottom: 2px solid black;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 18px;
            color: black;
            font-weight: bold;
            font-family: "Courier New", monospace;
        }

        .input-box label {
            position: absolute;
            bottom: 40px;
            left: 0;
            transform: translateY(-50%);
            font-size: 20px;
            font-weight: 500;
            pointer-events: none;
            font-weight: bold;
        }

        .input-box .icon {
            position: absolute;
            right: 0;
            top: 15px;
            font-size: 19px;
        }


        .form-box .remember {
            font-weight: bold;
            font-size: 20px;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color:black;
        }

        .remember label input {
            margin-right: 3px;
        }


        .btn {
            width: 100%;
            height: 45px;
            background-color: black;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            font-family: "Courier New", monospace;
            font-weight: bold;
            color:white;
        }

        .form-box .login-register {
            font-size: 20px;
            text-align: center;
            margin-top: 25px;
        }

        .login-register p a {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .login-register p a:hover {
            text-decoration: underline;
        }

        .custom-alert {
            font-size: 15px;
            color: #ff0000;
            background-color: transparent;
            font-weight: bold;
    
        }

    </style> 

</head> 

<body>
    <div class ="container">
        <div class ="content">
            <img src ="/images/logo.png" class="logo">
            <div class ="text-welcome">
                <h2>Welcome! <br> <span>ALEX</span></h2>
                <p>Welcome to the world of endless knowledge at your fingertips!  We're excited to introduce you to our user-friendly library website, your one-stop shop for borrowing books. No more heavy backpacks or crowded shelves – browse our extensive online catalog from the comfort of your dorm room or favorite study spot. Find the perfect book by title, author, or even by genre, and see if it's available in real-time.
                Dive into the exciting world of literature and get ready to unlock a universe of stories – your borrowing adventure starts now!
                 </p>
            </div>
        </div>
        
        <div class ="logging">
            
            <div class="form-box login">
                <form action="{{ route('account.authenticate')}}" method="post">
                    @csrf
                     @if(Session::has('success'))
                        <div class="alert custom-alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert custom-alert alert-danger" >
                            {{  Session::get('error') }}
                        </div>
                    @endif
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="email" value="{{old('email')}}" required>
                        <label for="email">Email</label>
                        @error('email')
                            <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label> 
                        @error('password')
                            <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class ="remember"> 
                        <label><input type="checkbox" name="remember" id="remember">Remember Me</label>
                    </div>
           
                         <button type="submit" class="btn">Sign In</button>
                         
    
                    <div class="login-register">
                        <p>Don't have an account?<a href="{{route('account.register')}}" class="register-link"> Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</body> 
<script>

    
</html> 