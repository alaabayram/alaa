<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body{
        margin:0;
    }
  ul{
      list-style: none;
  }
  .container{
      max-width: 1170px;
      margin: auto;
  }
  .row{
      display: flex;
      flex-wrap: wrap;
  }
  .align-items-center{
      align-items: center;
  }
  .justify-content-between{
      justify-content: space-between;
  }

  header{
    font-family: sans-serif;
    background-color: #8453a9;
    padding:2px 0px;
    position: relative;
    display: flex;
  }
  header .logo,
  header .nav{
      padding:0 20px;
  }
  header .logo img{
    
      position:absolute;
      height: 45px;
      left: 60px;
      top:10px;

      width: 50px;
  }
  header .nav ul li{
      display: inline-block;
      margin-left: 40px;
  }
  header .nav ul li a{
      text-decoration: none;
      margin: 1px;
      border-radius: 5px;
      display: block;
      font-size: 16px;
      padding:7px 0;
      color: rgba(255,255,255,0.7);
      text-transform: capitalize;
      transition: all 0.5s ease;
  }
  header .nav ul li a:hover{
      color: #ffffff;
      background-color:#583672;
      transition: 0.5s;
  }
  
</style>
 <header>
    <div class="container">
        <div class="row align-items-center justify-content-between">
           <div class="logo">
             <img src="./images/cake_logo.jpg">
            </div>
           <div class="nav">
              <ul>
                 <li><a href="index.php" >home</a></li>
                 <li><a href="aboutus.php">about us</a></li>
                 <li><a href="shop.php">shop</a></li>
                 <li><a href="contact.php">contact</a></li>
                 <li><a href="cart.php" class="fas fa-shopping-cart"></a></li>
              </ul>
</div>
        </div>
    </div>
 </header>

