<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega-Menu</title>
    <!-- Google Fonts (poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Google material fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="demo/style.css">
    <style>
    .content_class .row {
        overflow-y: scroll;
        height: 350px;
        width: 400px;
        padding: 0px;
    }

    .dropdown-menu-right {
        width: 410px;
    }

    /* this is css for user */

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        margin-left: -150px;
        margin-top: 0px;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: light;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid bg-light" id="top_bar">
            <div class="d-flex flex-row">

                <a href="tel: 91+ 1234567890">
                    <div class="p-1"><small>
                            PHONE: (<i class="fa fa-phone">)</i> 91+ 1234567890<span class="pl-5">|</span>
                        </small></div>
                </a>
                <a href="mailto: info@gmail.com">
                    <div class="p-1"><small>
                            <span class="pr-5"></span>EMAIL: <i class="fa fa-envelope"></i> info@gmail.com<span
                                class="pl-5">|</span>
                        </small></div>
                </a>


                <div class="pl-5 pt-1">
                    <a href="cart.php"><small>GIFT CARD <span class="pl-5">|</span></small></a>
                </div>

                <div class="pl-5 pt-1">
                    <a href="tracking.php"><small>TRACK ORDER <span class="pl-5">|</span></small></a>
                </div>

                <div class="pl-5 pt-1">
                    <a href="contact.php"><small>CONTACT US</small></a>
                </div>

            </div>

        </div>
        <a href="index.php" class="brand">Ecommerce</a>
        <div class="menu-container">
            <ul class="mega-menu">
                <a href="index.php">
                    <li class="dropdown">
                        <div>
                            <span>Home</span>
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </div>

                    </li>
                </a>

                <!-- Mens -->
                <li class="dropdown">
                    <div>
                        <span>Men</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="men_shoes.php">Men</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="# ">SKNRS Launch Calendar</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                                <li>
                                    <a href="#">Training and Gym</a>
                                </li>
                                <li>
                                    <a href="#">Skateboarding</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Lyfestyle</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Trousers and Tights</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Kits and Jerseys</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shop By Sport</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Sports</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                                <li>
                                    <a href="#">Training and Gym</a>
                                </li>
                                <li>
                                    <a href="#">Tennis</a>
                                </li>
                                <li>
                                    <a href="#">Golf</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Women section -->
                <li class="dropdown">
                    <div>
                        <span>Women</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Women</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="# ">SKNRS Launch Calendar</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Training and Gym</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Lyfestyle</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Leggings</a>
                                </li>
                                <li>
                                    <a href="#">Trousers</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Sports Bra</a>
                                </li>
                                <li>
                                    <a href="#">Matching Sets</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Skirts and Dresses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shop By Sport</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Sports</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Yoga</a>
                                </li>
                                <li>
                                    <a href="#">HandBall</a>
                                </li>
                                <li>
                                    <a href="#">Training and Gym</a>
                                </li>
                                <li>
                                    <a href="#">Tennis</a>
                                </li>
                                <li>
                                    <a href="#">Golf</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Kids section -->
                <li class="dropdown">
                    <div>
                        <span>Kids</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Kids</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Trousers and Leggings</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Kits and Jerseys</a>
                                </li>
                                <li>
                                    <a href="#">Sport Clothing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Kids by age</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Baby & Toddler(0-3 years)</a>
                                </li>
                                <li>
                                    <a href="#">Younger Kids(3-7 years)</a>
                                </li>
                                <li>
                                    <a href="#">Older Kids(7-15 years)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Home and Kitchen -->
                <li class="dropdown">
                    <div>
                        <span>Home & Kitchen</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Home & Kitchen</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Trousers and Leggings</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Kits and Jerseys</a>
                                </li>
                                <li>
                                    <a href="#">Sport Clothing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Kids by age</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Baby & Toddler(0-3 years)</a>
                                </li>
                                <li>
                                    <a href="#">Younger Kids(3-7 years)</a>
                                </li>
                                <li>
                                    <a href="#">Older Kids(7-15 years)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Beauty and Health -->
                <li class="dropdown">
                    <div>
                        <span>Beauty & Health</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Beauty & Health</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Trousers and Leggings</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Kits and Jerseys</a>
                                </li>
                                <li>
                                    <a href="#">Sport Clothing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Kids by age</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Baby & Toddler(0-3 years)</a>
                                </li>
                                <li>
                                    <a href="#">Younger Kids(3-7 years)</a>
                                </li>
                                <li>
                                    <a href="#">Older Kids(7-15 years)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- Electronic -->
                <li class="dropdown">
                    <div>
                        <span>Electronic</span>
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">Electronic</a>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Featured</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Featured</a>
                                </li>
                                <li>
                                    <a href="#">New Releases</a>
                                </li>
                                <li>
                                    <a href="#">Bestsellers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Shoes</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li>
                                    <a href="#">Jordan</a>
                                </li>
                                <li>
                                    <a href="#">Running</a>
                                </li>
                                <li>
                                    <a href="#">Football</a>
                                </li>
                                <li>
                                    <a href="#">Basketball</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Clothing</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Clothing</a>
                                </li>
                                <li>
                                    <a href="#">Tops and T-Shirts</a>
                                </li>
                                <li>
                                    <a href="#">Hoodies and Sweatshirts</a>
                                </li>
                                <li>
                                    <a href="#">Shorts</a>
                                </li>
                                <li>
                                    <a href="#">Tracksuits</a>
                                </li>
                                <li>
                                    <a href="#">Trousers and Leggings</a>
                                </li>
                                <li>
                                    <a href="#">Jackets</a>
                                </li>
                                <li>
                                    <a href="#">Kits and Jerseys</a>
                                </li>
                                <li>
                                    <a href="#">Sport Clothing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Kids by age</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Baby & Toddler(0-3 years)</a>
                                </li>
                                <li>
                                    <a href="#">Younger Kids(3-7 years)</a>
                                </li>
                                <li>
                                    <a href="#">Older Kids(7-15 years)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-dropdown">
                            <div>
                                <span>Accessories</span>
                                <span class="material-symbols-outlined">
                                    chevron_right
                                </span>
                            </div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">All Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Bags and Backpacks</a>
                                </li>
                                <li>
                                    <a href="#">Socks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <!-- <button class="btn">Contact</button> -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for products & more"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text bg-success" id="basic-addon2"><i
                            class="fa fa-search fa-lg text-light"></i></span>
                </div>
            </div>
            <a href="wishlist.php"><i class="fa fa-heart-o fa-lg"></i></a>
            <!-- <div class="dropdown">
                <a href="#" class="dropbtn"><i class="fa fa-user fa-lg text-dark"></i></a>
                <div class="dropdown-content">
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
            </div> -->
            <!-- <a href="#" class="icons" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-shopping-bag fa-lg text-dark"><sup
                        class="rounded-circle p-1 text-dark bg-success"><strong>7</strong></sup></i></a> -->
            <!-- <div class="dropdown">
                <div class="dropdown-menu dropdown-menu-right mt-4" aria-labelledby="dropdownMenu2">
                    <div class="container-fluid">
                        <div class="row pb-2">
                            <div class="col-sm-5">Item in Cart: 7 </div>
                            <div class="col-sm-7">Cart Subtotal: Rs 3490.00</div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="content_class">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="img/shoes4.jpg" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-left">
                                            Men Black Shoes<br>
                                            Rs : 1745.00 <span><del>Rs:
                                                    3490.00</del></span><span><small class="text-success">(50%
                                                    OFF)</small></span>
                                            SIZE : 9<br>
                                            QTY : 1<br>
                                            <i class="fa fa-trash-o"></i><a href="#"><small>Remove</small></a></li>
                                        </div>


                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="border border-light btn-lg w-100 mb-1"><a href="cart.php"
                                        class="text-dark">VIEW AND EDIT
                                        CART</a></button>
                            </div>
                            <div class="col-md-12">
                                <input type="button" class="btn btn-outline-success btn-lg w-100 mt-1"
                                    onclick="window.location.href='checkout.php';" value="CHECKOUT">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <button class="menu-btn">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button>
        </div>
    </nav>

    <script src="demo/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>