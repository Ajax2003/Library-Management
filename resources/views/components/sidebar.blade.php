<section class ="topsidebar"> 
  <div class="logo-text-container">
    <img src ="/images/logo.png" class="logo">
    <h1 class="text-library">Library Management</h1>
  </div>
</section>
<section class ="sidebar">
    <h2 class="text-management">Management</h2>
    <ul>
      <li><a href="dashboard"><i class="fa-solid fa-book"></i> List of Books</a></li>
      <li><a href="borrowed"><i class="fa-solid fa-book-bookmark"></i> Borrowed Books</a></li>
      <li><a href="returned"><i class="fa-solid fa-book-bookmark"></i> Returned Books</a></li>
    </ul>
    <ul>
      <li><a href="{{route('account.logout')}}"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></li>
    </ul>
</section>

<style>
    .logo {
        margin-left: 20px;
        margin-right: 10px;
        height: 75px;
        width: 100px;
    }
    .text-library {
        font-family: "Courier New", monospace;
        color: white;
        font-size: 25px;
    }

    .logo-text-container {
        margin-top: 20px;
        display: flex; 
        align-items: center; 
    }

    .topsidebar {
        background-color: #1A1818;
        grid-column: 1;
        grid-row: 1 / 2;
        border-top: none; /* Top border with width 2px and color #000 */
        border-right:2px solid #36454F; /* No right border */
        border-bottom: 2px solid #36454F; /* Bottom border with style dashed and color #999 */
        border-left: none;
    }

    .sidebar {
        grid-column: 1 / 2; 
        grid-row: 2 / 3; 
        color: black;
        font-family: "Courier New", monospace;
        border-top: none; /* Top border with width 2px and color #000 */
        border-right: 2px solid #36454F; /* No right border */
        border-bottom: none; /* Bottom border with style dashed and color #999 */
        border-left: none;
    }

    .text-management {
        margin-left: 30px;
        font-size: 25px;
    }

    ul {
        list-style: none; 
        font-size: 20px;
        padding: 10px;
    }

    a {
         text-decoration: none; 
         color: inherit;
         display: block; /* Make links take full width of list item */
         padding: 20px; /* Add padding to links */
         
    }

    li:hover a {
        background-color: #252424;
        color: white; 
        transition: background-color 0.2s ease-in-out; 
    }
        
</style>