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
            color: white;
            font-family: "Courier New", monospace;

        }

        .form-box h2 {
            font-size: 40px;
            text-align: center;
            color: black;
        }

        .form-box .input-box {
            position: relative;
            width: 340px;
            height: 50px;
            border-bottom: 2px solid black;
            margin: 15px 0;
            color: black;
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
            bottom: 25px;
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

        .terms label input {
            margin-right: 3px;
            margin-bottom: 15px;
        }
        
        .form-box .login-register {
            font-size: 20px;
            text-align: center;
            margin-top: 25px;
            color:black;
        }

        .login-register p a {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .login-register p a:hover {
            text-decoration: underline;
        }


        .btn {
            width: 100%;
            height: 45px;
            background-color: black;
            color: white;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            font-family: "Courier New", monospace;
            font-weight: bold;
        }


    </style> 

</head> 

<body>
    <div class ="container">
        <div class ="content">
            <img src ="/images/logo.png" class="logo">
            <div class ="text-welcome">
                <h2>Welcome! <br> <span>Register your account.</span></h2>
                <p>Hello there, klasmeyt! Tired of lugging heavy textbooks around? Register your account for instant access to thousands of books – anytime, anywhere!
 
                 </p>
            </div>
        </div>
        <div class ="logging">
            <div class="form-box login">
                <form action="{{route('account.processRegister')}}" method="post">
                    @csrf
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="name" name="name" id="name" required>
                        <label>Name</label>
                        @error('name')
                         <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <input type="name" name="address" id="address" required>
                        <label>Address</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="email" value="{{old('email')}}" required>
                        <label>Email</label>
                        @error('email')
                         <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                        @error('password')
                         <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                        <label>Confirm Password</label>
                        @error('password_confirmation')
                         <p class ="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                                  
                    <button type="submit" class="btn">Sign Up</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="{{route('account.login')}}" class="register-link"> Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</body> 



</html> 