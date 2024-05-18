<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0438d8cf7.js" crossorigin="anonymous"></script>
    <title>My Application</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-image: url("/images/dashboard.png");
            background-position: center;
            background-size: cover;

        }
        .content {
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: black;
        }
    </style>


</head>

<body>
    @include('components.header')
        <div class="content">
            <h1>Welcome to Our Library!</h1>
            <p>Check out our available books that you can borrow!</p>
        </div>

    
</body>



</html>