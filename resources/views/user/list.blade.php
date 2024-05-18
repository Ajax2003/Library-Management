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
    <title>My Application</title>
    <style> 

        body {
            padding: 20px;
            margin: 0;
            font-family: "Courier New", monospace;
            background-color: #f3f3f3;
        }
        .book-list {
            display: flex;  /* Make the container a flexbox */
            flex-wrap: wrap; /* Allow items to wrap onto multiple lines if needed */
        }

        .book-item {
            flex: 0 0 auto;  /* Set flex-grow and flex-shrink to 0, prevents uneven spacing */
            width: 25%;  /* Set a fixed width for each book card */
        }

        .card-text {
            font-weight: bold;
            font-size: 20px;
        }
        
        .btn  {
            width: 30%;
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
        }

    </style>
   
</head>
<body>
<div class="col-sm p-3 min-vh-100 ">
        <h1 class="card-title" >BOOK LIST</h1>
        <hr class="divider">
              <p class="card-text" >Here are the list of books! Choose what you want to borrow, enjoy!</p>
              <div class="book-list">
              @foreach($books as $book)
                <div class="book-item">
                        <div class="card">
                            <p class="card-text"><strong>Book:</strong> {{ $book->book_name }}</p>
                            <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ $book->category }}</p>
                            <p class="card-text"><strong>Published Date:</strong> {{ $book->published_date }}</p>
                            <a href="{{ route('book.show', ['id' => $book->id]) }}" class="card-link">
                                <button id="details" class="btn btn-primary">More Details</button>
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
</body>
</html>