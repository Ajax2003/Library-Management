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
        padding: 20px 130px;
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

    </style>
</head>
<body>
    @include('components.sidebar')

    @include('components.navbar')
    <main class="main">
        <div class ="container">
            <h1> > RETURNED BOOKS</h1>
        </div>
        <div class ="box">
            <table class ="content-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Student Name</th>
                        <th>Returned At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>05_12_2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>05_12_2024</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Atomic Habits</td>
                        <td>Adrian</td>
                        <td>05_12_2024</td>
                    </tr>
                </tbody>
          </table>
        </div>
    </main>
</body>
</html>
