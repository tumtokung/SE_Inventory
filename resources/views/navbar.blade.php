<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css"> -->

  <title>Dashboard</title>
  <!--style nav-->
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
      display: none;
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #1E272E;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .sidenav a,
    .dropdown-btn {
      padding: 8px 8px 15px 0px;
      text-decoration: none;
      font-size: 18px;
      color: #f1f1f1;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    .sidenav a:hover,
    .dropdown-btn:hover {
      color: #818181;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      /* right: 25px;
          font-size: 36px;
          margin-left: 50px; */
    }

    /* Main content */
    .main {
      margin-left: 200px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
      background-color: #1E272E;
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: #1E272E;
      padding-left: 8px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    @media (min-width: 767.98px) {
      .navbar {
        top: 0;
        position: sticky;
        z-index: 999;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark navbar-static-top p-0" style="background-color: #1E272E">
    <div class="col-12 col-md-3 col-lg-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between" style="background-color:; margin-left:10px;">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" onclick="openNav()"></span>
      </button>
      <a href="{{ route('product.index') }}">
        <img src="{{ asset('storage/profile-photos/logo.png') }}" alt="" style="width:40%; margin-left:10px;">
      </a>
      <div id="mySidenav" class="sidenav">
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <button class="navbar-toggler collapsed closebtn" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:10px; margin-top:5px;">
          <span class="navbar-toggler-icon" onclick="closeNav()"></span>
        </button>
        <!-- <img src="logo.png" alt="" style="width:40%; margin-left:10px;"> -->

        <a href="{{ route('dashboard') }}" style="text-align:; margin-top:20px"><img src="{{ asset('storage/profile-photos/dashboardw.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px">แดชบอร์ด</h>
        </a>

        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/supply-chainW.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px">สินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('product.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">ตารางรายการสินค้า</h>
          </a>
          <a href="{{ route('products') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">เชลฟ์</h>
          </a>
        </div>

        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/shopping-listw.png') }}" alt="" style="width:12%; margin-left:25px">
          <h style="margin-left:20px">นำเข้าสินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('ImportProductOrder.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">เพิ่มรายการสินค้านำเข้า</h>
          </a>
          <a href="#"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">รายการสินค้านำเข้า</h>
          </a>
        </div>

        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/notew.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px">นำออกสินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('ExportProduct') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">ออเดอร์</h>
          </a>
          <a href="{{ route('ExportProduct') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">เพิ่มคำร้อง</h>
          </a>
        </div>
        <a href="{{ route('Refund') }}" style="text-align:;"><img src="{{ asset('storage/profile-photos/product-return copy.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px">คืนสินค้า</h>
        </a>
        <a href="{{ route('CheckStock') }}" style="text-align:;"><img src="{{ asset('storage/profile-photos/filew.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px">ตรวจสอบคลัง</h>
        </a>

        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/clockw.png') }}" alt="" style="width:14%; margin-left:27px">
          <h style="margin-left:13px">รายงาน</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('Report') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">สินค้าหมดอายุ</h>
          </a>
          <a href="{{ route('Report') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px">สินค้าใก้ลหมดอายุ</h>
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

      <div class="col-10" style="text-align:end; margin-top:end">
        <a href=""> <img class="h-8 w-8 rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" style="width:5%; margin-left:10px;"></a>
      </div>
      <div class="col" style="color:#ffff; margin-top:-12px;">
        <div class="row">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" color:#ffff">
              <b style="margin-top:; font-size:14px;">{{ Auth::user()->name}}</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
              <li><a class="dropdown-item" href="{{ route('profile.show') }}"><img src="{{ asset('storage/profile-photos/userw.png') }}" alt="" style="width:14%;">
                  <h8 style="color:#ffff; margin-left:5px">Profile</h8>
                </a></li>
              <li><a class="dropdown-item" href="{{ route('users.index') }}"><img src="{{ asset('storage/profile-photos/memberw.png') }}" alt="" style="width:14%;">
                  <h8 style="color:#ffff; margin-left:5px">Manage member</h8>
                </a></li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"> <img src="{{ asset('storage/profile-photos/exitw.png') }}" alt="" style="width:13%; margin-left:4px">
                    <h8 style="color:#ffff; margin-left:5px">Logout</h8>
                  </a>
                </li>
              </form>
            </ul>
          </div>
        </div>
        <div class="row" style="margin-left:5px; margin-top:-7px;">
          <b style="font-size:12px">{{ Auth::user()->roll}}</b>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script> -->
  <script>
    // function openNav() {
    //     document.getElementById("mySidenav").style.width = "230px";
    //     document.getElementById("main").style.marginLeft = "230px";
    // }

    // function closeNav() {
    //     document.getElementById("mySidenav").style.width = "0";
    //     document.getElementById("main").style.marginLeft = "0px";
    // }
    function openNav() {
      document.getElementById("mySidenav").style.display = "block";
    }

    /* Close/hide the sidenav */
    function closeNav() {
      document.getElementById("mySidenav").style.display = "none";
    }
  </script>
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>