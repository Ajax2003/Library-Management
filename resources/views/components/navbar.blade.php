<header class ="header">
<div class="container">  
    <div class="name">
      <h1>Welcome, Adrian Santos! {{Auth::user()->name ?? ''}}</h1>
    </div>
    <div class="date">
      <h2>Today: {{ now()->format('l, F j, Y') }}</h2> 
    </div>
</div>
</header>

<style>

        h1 {
            font-size: 25px;
        }

        .container {
            margin-top: 40px;
            margin-left: 30px;
            display: flex; 
            align-items: center; 
            font-family: "Courier New", monospace;
        }

         .name {
            margin-right:50px;
            }

        .header {
            background-color: white;
            grid column: 2 / 3; 
            border-top: none; /* Top border with width 2px and color #000 */
            border-right:2px solid #36454F; /* No right border */
            border-bottom: 2px solid #36454F; /* Bottom border with style dashed and color #999 */
            border-left: none;
        }

</style>