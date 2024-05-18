<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1d8d68cd8a.js" crossorigin="anonymous"></script>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap Datepicker CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <title>List of Books</title>
        <style>
            .card-header {
                margin-left: 50px;
                font-weight: bold;
                font-size: 50px;
                font-family: "Courier New", monospace;
                font-weight: bold;

            }

            .card-body {
                padding: 50px;
                font-weight: bold;
                font-size: 30px;
                font-family: "Courier New", monospace;

            }

                    
        .btn  {
            width: 20%;
            height: 45px;
            background-color: black;
            color: white;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            font-family: "Courier New", monospace;
            font-weight: bold;
            margin-left: 50px;
        }
        </style>
    </head>
<body>

<div class="container-fluid">
    <div class="row">
    <div class="col-5 d-flex justify-content-center">
              
    </div>
    <div class="col d-flex justify-content-center">
        
    </div>
        <div class="col-md-5">
            <div class="card">
            @csrf
            <div class="card-header" style="font-weight: bold">Details of  {{ $books->book_name }}</div>
                <div class="card-body">
                    <p class="card-text"><strong>Author:</strong> {{ $books->author }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $books->category }}</p>
                    <p class="card-text"><strong>Published Date:</strong> {{ $books->published_date }}</p>
                </div>
                <a href="{{route('account.list')}}">
                    <button class="btn">Go Back</button>
                </a>
                <button id="applyBtn" class="btn btn-primary" onclick="applyForBorrow('{{ $books->id }}')">Apply</button>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap JS (optional, for certain components like dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>

</script>
</html>