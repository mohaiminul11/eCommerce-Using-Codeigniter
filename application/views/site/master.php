<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to Online Shop</title>
    <link rel="shortcut icon" href="./Untitled.ico">
    <link rel="stylesheet" href="<?=base_url()."asset/css/bootstrap.min.css"?>">
    <link rel="stylesheet" href="<?=base_url()."asset/css/main.css"?>">
    <script type="text/javascript" src="<?=base_url()."asset/js/jquery.js"?>">
    </script>
    <script type="text/javascript" src="<?=base_url()."asset/js/bootstrap.min.js"?>">
    </script>

</head>

<body>

  <div class="navigation">
      <!-- Start OF Navigation -->
      <div class="topNavSearchBar">
        <div class="row">
          <div class="col-sm-3 col-sm-offset-9">
            <a href="<?=base_url()."authenticate"?>">Login</a>
            <a href="<?=base_url()."authenticate/register"?>">Register</a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 logo">
            <p>Online Shop</p>
          </div>
          <div class="col-xs-8 col-sm-7">
            <form class="" action="index.html" method="post">
                <input type="text" class="form-control" name="" value="">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

            </form>
          </div>
          <div class="col-xs-4 col-sm-2 ">
            <a href="#">
              <div class="cart">
                <span class="glyphicon glyphicon-shopping-cart">
                  <span class="noOfItems">
                    10
                  </span>
                </span>
              </div>
            </a>

          </div>
        </div>
      </div> <!-- End of TopNavSearchBar -->


      <div class="navbar navbar-default secondNavBar" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          </div>

          <div class="collapse navbar-collapse">

              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">ELECTRONICS <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobile <b class="caret"></b></a>
                          <ul class="menuItems">
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Mi</a></li>
                            <li><a href="#">Motorola</a></li>
                          </ul>
                        </li>

                          <li class="submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobile Accessories<b class="caret"></b></a>
                            <ul class="menuItems">
                              <li><a href="#">Mobile Cases</a></li>
                              <li><a href="#">Head Phones</a></li>
                              <li><a href="#">Power Banks</a></li>
                            </ul>
                          </li>

                          <li class="divider"></li>
                          <li><a href="#">Laptops</a></li>
                          <li class="divider"></li>
                          <li><a href="#">TV</a></li>
                      </ul>
                  </li>

                  <!-- MEN -->

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEN<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Footwear<b class="caret"></b></a>
                          <ul class="menuItems">
                            <li><a href="#">Sports Shoes</a></li>
                            <li><a href="#">Casual Shoes</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                          </ul>
                        </li>

                        <li class="submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clothing<b class="caret"></b></a>
                          <ul class="menuItems">
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jeans</a></li>
                          </ul>
                        </li>


                        <li><a href="#">Watches</a></li>
                        <li><a href="#">Accessories</a></li>
                      </ul>
                  </li>

                  <!-- WOMEN -->

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">WOMEN<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li class="submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Footwear<b class="caret"></b></a>
                          <ul class="menuItems">
                            <li><a href="#">Sports Shoes</a></li>
                            <li><a href="#">Casual Shoes</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                          </ul>
                        </li>

                        <li class="submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clothing<b class="caret"></b></a>
                          <ul class="menuItems">
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jeans</a></li>
                          </ul>
                        </li>

                        <li><a href="#">Watches</a></li>
                        <li><a href="#">Accessories</a></li>
                      </ul>
                  </li>

                  <li><a href="#">Kids</a></li>
                  <li><a href="#">Home&Furniture</a></li>
                  <li><a href="#">Books&More</a></li>
              </ul>
          </div>
      </div>

<?=$main_content ?>

  </div>
  <!-- End of Navigation -->
  <footer>
    <p>All rights reserved by &copy Online Shop</p>
  </footer>

</body>

</html>
