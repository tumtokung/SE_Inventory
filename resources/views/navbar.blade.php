<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Public Navbar CSS -->
    <link rel="stylesheet"  href="{{asset('css/navbar.css') }}" >
    
  </head>
  <body>

    <nav class="navbar  navbar-dark "  style="background-color: #1E272E;">

    <!-- Navbar content -->

      

      <!-- Hamburgur Button -->
      <div class="navbar__toggle" id="mobile-menu" onclick="toglenavbar()" >
              <span class="bar"></span> <span class="bar"></span>
              <span class="bar"></span>
      
      </div>
      <!-- <button class="navbar-toggler"  style="background-color: #485460;" type="button" onclick="openNav()">
        <span class="navbar-toggler-icon"></span>
      </button>  -->


      <!-- LOGO WEB -->
      <a class="navbar-brand" href="/dashboards">
        <img src="<?php echo asset('img/logo.png'); ?>" width="100" height="45" alt="">
      </a>

      <a class="navbar-brand" >
        <img src="<?php echo asset('img/profile.png'); ?>" width="40" height="40" alt="">
        <strong style="color:white"> ขวัญฤดี </strong>
        <!-- <p style="color:white" > ผู้จัดการ </p> -->
        
      </a>
    
    
      <!-- Hamburgur Menu -->
      <div id="mySidenav" class="sidenav">
        <ul class="nav navbar-nav">
          
          

          <li class="nav-item">
            <a   class="nav-link" href="/dashboards" style="font-size:20px">
            <img src="<?php echo asset('img/dashboardw.png'); ?>" width="30" height="30" alt="">
            แดชบอร์ด <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo asset('img/supply-chainW.png'); ?>" width="30" height="30" alt="">  
            สินค้า
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
              <a  class="dropdown-item" href="/product" text style="font-size:20px">ตารางรายการสินค้า</a>
              <a  class="dropdown-item" href="/product" text style="font-size:20px">เชลฟ์</a>
            </div>
            
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo asset('img/shopping-listw.png'); ?>" width="30" height="30" alt="">
            นำเข้าสินค้า
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
              <a  class="dropdown-item" href="/ImportProduct" text style="font-size:20px">เพิ่มรายการสินค้านำเข้า</a>
              <a  class="dropdown-item" href="/ImportProduct" text style="font-size:20px">รายการสินค้านำเข้า</a>
            </div>
            
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  style="font-size:20px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo asset('img/notew.png'); ?>" width="30" height="30" alt="">
            นำออกสินค้า
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
              <a  class="dropdown-item" href="ExportProduct" text style="font-size:20px">เพิ่มรายการสินค้านำเข้า</a>
              <a  class="dropdown-item" href="ExportProduct" text style="font-size:20px">รายการสินค้านำเข้า</a>
            </div>
            
          </li>
          

          <li class="nav-item">
            <a  class="nav-link" style="font-size:20px" href="/Refund">
            <img src="<?php echo asset('img/product-return copy.png'); ?>" width="30" height="30" alt="">  
            คืนสินค้า</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link"  style="font-size:20px" href="/CheckStock">
            <img src="<?php echo asset('img/filew.png'); ?>" width="30" height="30" alt="">  
            ตรวจสอบคลัง</a>
          </li>

          <li class="nav-item">
            <a  class="nav-link" style="font-size:20px" href="/Report">
            <img src="<?php echo asset('img/exclamationw.png'); ?>" width="30" height="30" alt="">  
            รายงาน</a>
          </li>

          

        </ul>
      </div>
      
    </nav>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Public Navbar JavaScript -->
  <script  src="{{asset('js/navbar.js')}}"> </script>

  </body>
</html>