<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0438d8cf7.js" crossorigin="anonymous"></script>
    <title>My Application</title>
    <style>
    body {
           height: 100vh;
           display: grid;
           grid-template-columns: 285px 1fr;
           grid-template-rows: 130px 1fr;
           margin: 0; 
           padding: 0;
        }
    .main {
            background-color: white;
            grid-column: 2 / 3;
            grid-row: 2 / 3;
            font-family: "Courier New", monospace;
    }
    .box {
        display: flex;
        justify-content: center;
        background-color: white;
        margin-left: 100px;
        width: 90%;
        height: 80%;
        box-shadow: 10px 10px;
        border-top: 2px solid #36454F;
        border-right:none;
        border-bottom:none; 
        border-left: 2px solid #36454F;
    }

    .back {
        padding: 0;
        margin-left: 10px;
    }

    .back:hover {
        cursor: pointer;
        text-decoration: underline;
    }
    .remove {
        background-color: #1A1818;
        font-family: "Courier New", monospace;
        font-size: 18px;
        color:white;
        padding: 5px;
        border: none;
    }
    
    .add {
        font-size: 40px;
        font-weight: bold;
        margin-left: 60px;
    }

    .remove:hover {
        cursor: pointer;
    }
    
    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        font-size: 25px;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .form-group input {
        font-size: 15px;
        font-weight: bold;
    }

    input, button {
        padding: 0.5rem 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

        button {
            background-color: #1A1818;
            font-family: "Courier New", monospace;
            color: #fff;
            cursor: pointer;
            font-size: 25px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    @include('components.sidebar')
    @include('components.navbar')
    <main class="main">
        <div class ="container">
          <a href="{{route('librarian.dashboard')}}" class="back"><h1> > GO BACK</h1> </a>
        </div>
        <div class ="box">
            <div class = "col">
            <p class="add">Add Book</p>
            <form action = "{{route('librarian.add')}}" method = "POST">
                    @csrf
                                    
                    <div class="form-group">
                        <label for="bookName">Book Name:</label>
                        <input type="text" id="form3Example1c" class="form-control" name ="bname" placeholder="Book Name" required>
                    </div>

                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" id="form3Example3c" class="form-control" name ="author" placeholder="Author" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" id="form3Example1c" class="form-control" name ="cate" placeholder="Category" required>
                    </div>

                    <div class="form-group">
                        <label for="publishedDate">Published Date:</label>
                        <input type="date" id="datepicker" class="form-control" name ="pdate" placeholder="Published Date">
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 ">
                        <button type="submit" class="btn btn-primary btn-lg">Add</button>
                    </div>

                </form>
              </div>
            </div>
        </div>
    </main>
</body>
</html>
