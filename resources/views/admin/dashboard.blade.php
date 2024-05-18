<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a0438d8cf7.js" crossorigin="anonymous"></script>
    <title>Admin</title>
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

    .search {
        margin-left: 10px;

    }

    #search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        flex: 1; /* Allow input field to grow */
    }

     #search-btn {
        background-color: #1A1818;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    .content-table {
        border-collapse: collapse;
        min-width: 400px;
        display: inline-block;

    }

    .content-table thead tr {
        background-color: #1A1818;
        font-size: 20px;
        color: white;
    }

    .content-table tbody td {
        font-size: 15px;   
    }

    .content-table th, .content-table td {
        padding: 20px 55px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #000; 
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #1A1818;
    }
    .remove {
        background-color: #1A1818;
        font-family: "Courier New", monospace;
        font-size: 18px;
        color:white;
        padding: 5px;
        border: none;
    }

    .remove:hover {
        cursor: pointer;
    }

    #add-btn {
        background-color: #1A1818;
        font-family: "Courier New", monospace;
        font-size: 18px;
        color:white;
        padding: 5px;
        border: none;
        margin-left: 10px;
    }
    </style>
</head>
<body>
    @include('components.sidebar')
    @include('components.navbar')
    <main class="main">
        <div class ="container">
            <h1> > LIST OF USERS</h1>
            <div class ="search"> 
                <input type="text" id="search-input" placeholder="Search books...">
                <button type="button" id="search-btn"><i class="fas fa-search"></i></button>
            </div>
                <a href="/add" button type="button" id="add-btn"><i class="fa-solid fa-plus"></i> Add New Book</button></a>
        </div>
        <div class ="box">
            <table class ="content-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Subject</th>
                        <th>Series</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>Horror</td>
                        <td>Science</td>
                        <td>Series 1</td>
                        <td>In</td>
                        <td>
                            <button class="remove">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>Horror</td>
                        <td>Science</td>
                        <td>Series 1</td>
                        <td>In</td>
                        <td>
                            <button class="remove">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>Horror</td>
                        <td>Science</td>
                        <td>Series 1</td>
                        <td>In</td>
                        <td>
                            <button class="remove">Remove</button>
                        </td>
                    </tr>
                </tbody>
          </table>
        </div>
    </main>
</body>
</html>
