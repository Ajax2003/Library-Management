<header class ="header">
    <div class="container">
    <img src="/images/logo.png" class="logo"></a>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="{{route('account.list')}}">Library</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="{{route('account.logout')}}">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>


<style>
body {
  font-family: sans-serif;
}

.logo {
  height: 100px;
  width: 100px;
}
.header {

}

.container {
  width: 45%;
  margin: auto;
  padding: 20px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.container ul li {
  list-style: none;
  display: inline-block;
  margin: 0 22px;
  position: relative;
}

.container ul li a {
  text-decoration: none;
  color: black;
  text-transform: uppercase;
  font-weight: bold;
}

.container ul li:after {
  content: '';
  height: 3px;
  width: 0%;
  background: black;
  position: absolute;
  left: 0;
  bottom: -10px;
  transition: 0.5s;
}

.container ul li:hover::after {
  width: 100%;
}




</style>