<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar_style.css">
    <style>
    .content_class .row {
        overflow-y: scroll;
        height: 350px;
        width: 410px;
        padding: 3px;
    }

    .content-section {
        margin-left: -40px;
        width: 170px;
    }

    .content-section a:hover {
        text-decoration: none;
    }

    input:focus::placeholder {
        color: transparent;
    }
    </style>
</head>

<body>
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <a href="tel:9876543210">
                                <p>Phone: +01 1234567890</p>
                            </a>
                            <a href="mailto:info@gmail.com">
                                <p>email: info@gmail.com</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="float-right">
                            <ul class="right_side">
                                <li>
                                    <a href="cart.php">
                                        gift card
                                    </a>
                                </li>
                                <li>
                                    <a href="tracking.php">
                                        track order
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <!-- <img src="img/logo.png" alt="" /> -->
                        <span><strong>Ecommerce</strong></span>
                    </a>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <!-- <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="category.html">Shop Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="single-product.html">Product Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Product Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Shopping Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="single-blog.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tracking.html">Tracking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="elements.html">Elements</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div> -->
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6 pr-0">
                                <div class="main">
                                    <div class="input-group p-3 mt-1 ml-2">
                                        <input type="text" class="form-control search-bar"
                                            placeholder="What are you looking for?">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2  pr-0">
                                <ul class="nav navbar-nav navbar-center right_nav pull-left">
                                    <!-- <div class="main">
                                    <div class="input-group p-3 mt-1 ml-2">
                                        <input type="text" class="form-control search-bar" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div> -->
                                    <li class="nav-item">
                                        <a href="#" class="icons" id="dropdownMenu2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-shopping-cart"></i></a>
                                        <div class="dropdown">
                                            <div class="dropdown-menu dropdown-menu-right mt-3"
                                                aria-labelledby="dropdownMenu2" style="width:400px;">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <span>Item in Cart:</span>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span>Cart Subtotal: Rs 3490.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="content_class">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="card">
                                                                        <img src="img/shoes4.jpg" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <ul>
                                                                        <li>Men Black Shoes</li>
                                                                        <li>Rs : 1745.00 <span><del>Rs:
                                                                                    3490.00</del></span><span><small
                                                                                    class="text-success">(50%
                                                                                    OFF)</small></span></li>
                                                                        <li>SIZE : 9</li>
                                                                        <li>QTY : 1</li>
                                                                        <li><i class="fa fa-trash-o"></i><a
                                                                                href="#"><small>Remove</small></a></li>
                                                                    </ul>
                                                                    <hr>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="card">
                                                                        <img src="img/shoes4.jpg" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <ul>
                                                                        <li>Men Black Shoes</li>
                                                                        <li>Rs : 1745.00 <span><del>Rs:
                                                                                    3490.00</del></span><span><small
                                                                                    class="text-success">(50%
                                                                                    OFF)</small></span></li>
                                                                        <li>SIZE : 9</li>
                                                                        <li>QTY : 1</li>
                                                                        <li><i class="fa fa-trash-o"></i><a
                                                                                href="#"><small>Remove</small></a></li>
                                                                    </ul>
                                                                    <hr>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="card">
                                                                        <img src="img/shoes4.jpg" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <ul>
                                                                        <li>Men Black Shoes</li>
                                                                        <li>Rs : 1745.00 <span><del>Rs:
                                                                                    3490.00</del></span><span><small
                                                                                    class="text-success">(50%
                                                                                    OFF)</small></span></li>
                                                                        <li>SIZE : 9</li>
                                                                        <li>QTY : 1</li>
                                                                        <li><i class="fa fa-trash-o"></i><a
                                                                                href="#"><small>Remove</small></a></li>
                                                                    </ul>
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card">
                                                                        <img src="img/shoes4.jpg" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <ul>
                                                                        <li>Men Black Shoes</li>
                                                                        <li>Rs : 1745.00 <span><del>Rs:
                                                                                    3490.00</del></span><span><small
                                                                                    class="text-success">(50%
                                                                                    OFF)</small></span></li>
                                                                        <li>SIZE : 9</li>
                                                                        <li>QTY : 1</li>
                                                                        <li><i class="fa fa-trash-o"></i><a
                                                                                href="#"><small>Remove</small></a></li>
                                                                    </ul>
                                                                    <hr>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="card">
                                                                        <img src="img/shoes4.jpg" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <ul>
                                                                        <li>Men Black Shoes</li>
                                                                        <li>Rs : 1745.00 <span><del>Rs:
                                                                                    3490.00</del></span><span><small
                                                                                    class="text-success">(50%
                                                                                    OFF)</small></span></li>
                                                                        <li>SIZE : 9</li>
                                                                        <li>QTY : 1</li>
                                                                        <li><i class="fa fa-trash-o"></i><a
                                                                                href="#"><small>Remove</small></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="border border-light btn-lg w-100 mb-1"><a
                                                                    href="cart.php" class="text-dark">VIEW AND EDIT
                                                                    CART</a></button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="button"
                                                                class="btn btn-outline-success btn-lg w-100 mt-1"
                                                                onclick="window.location.href='checkout.php';"
                                                                value="CHECKOUT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a href="#" class="icons" data-toggle="modal" data-target="#exampleModal"
                                                data-whatever="@mdo" title="User Profile">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-content content-section">

                                                <div class="row bg-light p-2 border rounded-1">
                                                    <a href="">
                                                        <div class="row border-bottom">
                                                            <div class="col-md-3">
                                                                <i class="fa fa-dashboard"></i>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h4>Dashboard</h4>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="">
                                                        <div class="row border-bottom">
                                                            <div class="col-md-3">
                                                                <i class="fa fa-shopping-bag fa-lg"></i>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h4>My Orders</h4>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="">
                                                        <div class="row border-bottom">
                                                            <div class="col-md-3">
                                                                <i class="fa fa-heart fa-lg"></i>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h4>&nbsp;Wishlist</h4>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="">
                                                        <div class="row border-bottom">
                                                            <div class="col-md-3">
                                                                <i class="fa fa-sign-out fa-lg"></i>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <h4>&nbsp;Sign Out</h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="icons">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-white w-100">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav justify-content-center">
                            <a class="nav-link active m-1" href="index.php"><strong>HOME</strong> <span
                                    class="sr-only">(current)</span></a>
                            <!-- <a class="nav-link" href="#">MEN</a> -->
                            <div class="nav-item dropdown">
                                <a href="men_shoes.php" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>MEN</strong></span></a>
                                <div class="dropdown-content men">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <a href="#"><strong>Topwear</strong></a>
                                                <a class="text-left" href="#">All Top Wear</a>
                                                <a href="#" class="text-left">Tshirts</a>
                                                <a href="#" class="text-left">Shirts</a>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <a href="#"><strong>Bottomwear</strong></a>
                                                <a class="text-left" href="#">Track Pants</a>
                                                <a href="#" class="text-left">Jeans</a>
                                                <a href="#" class="text-left">Trousers</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#"><strong>Men Accessories</strong></a>
                                                <a href="#" class="text-left">All Men Accessories</a>
                                                <a href="#" class="text-left">Watches</a>
                                                <a href="#" class="text-left">Belts</a>
                                                <a href="#" class="text-left">Wallets</a>
                                                <a href="#" class="text-left">Jewellary</a>
                                                <a href="#" class="text-left">Sunglasses</a>
                                                <a href="#" class="text-left">Bags</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="men_shoes.php"><strong>Men Footwear</strong></a>
                                                <a href="#" class="text-left">Casual Shoes</a>
                                                <a href="#" class="text-left">Sports Shoes</a>
                                                <a href="#" class="text-left">Sandals</a>
                                                <a href="#" class="text-left">Formal Shoes</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#"><strong>Ethnic Wear</strong></a>
                                                <a href="#" class="text-left">Men Kurtas</a>
                                                <a href="#" class="text-left">Ethnic Jackets</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#"><strong>Inner & Sleep Wear</strong></a>
                                                <a href="#" class="text-left">All Inner & Sleep Wear</a>
                                                <a href="#" class="text-left">Vests</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="nav-link" href="#">WOMEN</a> -->
                            <div class="nav-item dropdown">
                                <a href="women_shoes.php" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>WOMEN</strong></span></a>
                                <div class="dropdown-content women">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <a href="#"><strong>Topwear</strong></a>
                                                <a class="text-left" href="#">Tops</a>
                                                <a href="#" class="text-left">Dresses</a>
                                                <a href="#" class="text-left">Sweaters</a>
                                                <a href="#" class="text-left">Jumpsuits</a>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <a href="#"><strong>Bottomwear</strong></a>
                                                <a class="text-left" href="#">Jeans</a>
                                                <a href="#" class="text-left">Jeggings</a>
                                                <a href="#" class="text-left">Palazzos</a>
                                                <a href="#" class="text-left">Shorts</a>
                                                <a href="#" class="text-left">skirts</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href=""><strong>Innerwear</strong></a>
                                                <a href="#" class="text-left">Bra</a>
                                                <a href="#" class="text-left">Briefs</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><strong>Sleepwear</strong></a>
                                                <a href="#" class="text-left">Nightsuits</a>
                                                <a href="#" class="text-left">Babydolls</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="women_shoes.php"><strong>Footwear</strong></a>
                                                <a class="text-left" href="#">Flats</a>
                                                <a href="#" class="text-left">Bellies</a>
                                                <a href="#" class="text-left">Juttis</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><strong>Bags</strong></a>
                                                <a class="text-left" href="#">All Women Bags</a>
                                                <a class="text-left" href="#">Handbags</a>
                                                <a class="text-left" href="#">clutches</a>
                                                <a class="text-left" href="#">Slingbags</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><strong>Jewellary</strong></a>
                                                <a class="text-left" href="#">Jewellary Set</a>
                                                <a class="text-left" href="#">Earrings</a>
                                                <a class="text-left" href="#">Mangalsutras</a>
                                                <a class="text-left" href="#">Studs</a>
                                                <a href="#" class="text-left">Bangles</a>
                                                <a href="#" class="text-left">Necklaces</a>
                                                <a href="#" class="text-left">Rings</a>
                                                <a href="#" class="text-left">Anklets</a>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="#"><strong>Accessory</strong></a>
                                                <a class="text-left" href="#">Watches</a>
                                                <a href="#" class="text-left">Hair Accessories</a>
                                                <a href="#" class="text-left">Sunglasses</a>
                                                <a href="#" class="text-left">Socks</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="nav-link" href="#">KIDS</a> -->
                            <div class="nav-item dropdown">
                                <a href="kids_shoes.php" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>KIDS</strong></span></a>
                                <div class="dropdown-content kids">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h5>Boys & Girls 2+ Years</h5>
                                                <a class="text-left" href="#">Dresses</a>
                                                <a href="kids_shoes.php"><strong>Footwear</strong></a>
                                                <a href="boy_shoes.php">Boys Footwear</a>
                                                <a href="girl_shoes.php">Girls Footwear</a>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h5>Infant 0-2 Year</h5>
                                                <a class="text-left" href="#">Rompers</a>
                                            </div>
                                            <div class="col-md-3">
                                                <h5>Toys & Accessories</h5>
                                                <a href="#" class="text-left">Soft Toys</a>
                                                <a href="#" class="text-left">Footwear</a>
                                                <a href="#" class="text-left">Stationary</a>
                                                <a href="#" class="text-left">Watches</a>
                                                <a href="#" class="text-left">Bags & Backpacks</a>
                                            </div>
                                            <div class="col-md-3">
                                                <h5>Baby Care</h5>
                                                <a href="#" class="text-left">All baby Care</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="nav-link" href="#">JEWELLERY & ACCESSORIES</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>JEWELLERY &
                                            ACCESSORIES</strong></span></a>
                                <div class="dropdown-content jewellary">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-6 col-sm-6 col-xs-6">


                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <a class="nav-link" href="#">BAGS & FOOTWEAR</a> -->
                            <!-- <a class="nav-link" href="#">BRANDS</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>BAGS &
                                            FOOTWEAR</strong></span></a>
                                <div class="dropdown-content bags">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-3 col-sm-4 col-xs-4">


                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h5>Men Bags</h5>
                                                <a class="text-left" href="#">All Men Bags</a>
                                                <a class="text-left" href="#">Men Wallets</a>

                                            </div>
                                            <div class="col-md-3">
                                                <a href="men_shoes.php"><strong>Men Footwear</strong></a>
                                                <a class="text-left" href="#">Sports Shoes</a>
                                                <a href="#" class="text-left">Casual Shoes</a>
                                                <a href="#" class="text-left">Formal Shoes</a>
                                                <a href="#" class="text-left">Sandals</a>
                                            </div>
                                            <div class="col-md-3">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <a class="nav-link" href="#">RAINY SHOES</a> -->
                            <!-- <a class="nav-link" href="#">HOME & KITCHEN</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>HOME &
                                            KITCHEN</strong></span></a>
                                <div class="dropdown-content kitchen">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <h5>Home Furnishing</h5>
                                                <a class="text-left" href="#">Bedsheets</a>
                                                <a class="text-left" href="#">Doormats</a>
                                                <a class="text-left" href="#">Curtains & Sheers</a>
                                                <a class="text-left" href="#">Cushions & Cushion Covers</a>
                                                <a href="#" class="text-left">Mattress Protectors</a>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <h5>Home Decor</h5>
                                                <a class="text-left" href="#">All Home Decor</a>
                                                <a class="text-left" href="#">Stickers</a>
                                                <a class="text-left" href="#">Clocks</a>
                                                <a href="#" class="text-left">Showpieces</a>

                                            </div>
                                            <div class="col-md-4">
                                                <h5>Kitchen & Dining</h5>
                                                <a class="text-left" href="#">Kitchen Storage</a>
                                                <a href="#" class="text-left">Cookware & Bakeware</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="nav-link" href="#">BEAUTY & HEALTH</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>BEAUTY &
                                            HEALTH</strong></span></a>
                                <div class="dropdown-content beauty">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <h5>Make up</h5>
                                                <a class="text-left" href="#">Face</a>
                                                <a class="text-left" href="#">Eyes</a>
                                                <a class="text-left" href="#">Lips</a>
                                                <a class="text-left" href="#">Nails</a>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <h5>Wellness</h5>
                                                <a class="text-left" href="#">Sanitizers</a>
                                                <a class="text-left" href="#">Oral Care</a>
                                                <a class="text-left" href="#">Feminine Hygiene</a>

                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                <h5>Skincare</h5>
                                                <a class="text-left" href="#">Deodorants</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="nav-link" href="#">ELECTRONIC</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropbtn nav_tab dropdown-toggle text-dark m-1"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="serbtn"><strong>ELECTRONIC</strong></span></a>
                                <div class="dropdown-content electronic">
                                    <div class="card border rounded-3 shadow-lg mb-5">
                                        <div class="row p-3 res_mobile">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h5>Mobile & Accessories</h5>
                                                <a class="text-left" href="#">All Mobile & Accessories</a>
                                                <a class="text-left" href="#">Smartwatches</a>
                                                <a class="text-left" href="#">Mobile Holders</a>
                                                <a class="text-left" href="#">Mobile Cases & Covers</a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <h5>Appliances</h5>
                                                <a class="text-left" href="#">All Appliances</a>
                                                <a class="text-left" href="#">Grooming</a>
                                                <a class="text-left" href="#">Home Appliances</a>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </nav>
                <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <ul class="d-flex">
                        <li class="ml-5 p-1"><strong>MEN</strong></li>
                        <li class="ml-5 p-1"><strong>WOMEN</strong></li>
                        <li class="ml-5 p-1"><strong>KIDS</strong></li>
                        <li class="ml-5 p-1"><strong>ACCESSORIES</strong></li>
                        <li class="ml-5 p-1"><strong>BAGS</strong></li>
                        <li class="ml-5 p-1"><strong>BRANDS</strong></li>
                        <li class="ml-5 p-1"><strong>RAINY SHOES</strong></li>
                        <li class="ml-5 p-1"><strong>CONTACT US</strong></li>
                    </ul>
                    </div>
                    
                </div>
            </div> -->
            </div>
        </div>
    </header>
    <!-- section for login section from navbar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Login or SignUp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">+91</span>
                            </div>
                            <input type="tel" class="form-control" id="recipient-name"
                                placeholder="Enter Mobile Number*" pattern="[0-9]{10}" required>
                        </div>
                        <div class="text-left m-2">
                            <small>By continuing, I agree to the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy
                                    Policy</a></small>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Continue <i class="fa fa-angle-double-right"
                            aria-hidden="true"></i></a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i
                            class="fa fa-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>