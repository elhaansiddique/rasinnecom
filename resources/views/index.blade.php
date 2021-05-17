<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Aug 2018 17:50:07 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rasinn - A Online Marketplace</title>
    <!--icon-->
    <link rel="icon" href="images/rasinn logo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="cms-index-index index-opt-2">

    <div class="wrapper">
        <!-- HEADER -->
        <header class="site-header header-opt-2 cate-show">

            <!-- header-top -->
            <div class="header-top">
                <div class="container">

                    <!-- hotline -->
                    <ul class=" nav-left" >
                        <li ><span><i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+88016714995627">+88016714995627</a></span></li>
                        <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> 
                            <a href="mailto:proxadbd@gmail.com">Contact us today !</a> 
                        </span></li>
                        <li class="dropdown switcher  switcher-currency">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle switcher-trigger"><span>USD</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-usd" aria-hidden="true"></i> USD
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-eur" aria-hidden="true"></i> eur
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <i class="fa fa-gbp" aria-hidden="true"></i> gbp
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown switcher  switcher-language">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle switcher-trigger" aria-expanded="false">
                                <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">
                                <span>English</span> 
                                <i aria-hidden="true" class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu switcher-options ">
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">English
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="images/flags/flag_french.png">French
                                    </a>
                                </li>
                                <li class="switcher-option">
                                    <a href="#">
                                        <img class="switcher-flag" alt="flag" src="images/flags/flag_germany.png">Germany
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- hotline -->

                    <!-- heder links -->
                    <ul class="nav-right">
                        
                        <li class="dropdown setting">
                        @guest
                        <li role="menuitem" aria-label="Login" class="dropdown setting">
                            <span><i class="fa fa-sign-in" aria-hidden="true"></i>
                                <a href="{{ route('login') }}">Login</a></span>
                        </li>
                        @else
                        <li>
                           <a href="{{route('logout')}}" id="fm">{{\Auth::user()->name}}</a>       
                        </li>
                        @endguest 
                            <!-- <span><i class="fa fa-sign-in" aria-hidden="true"></i>
                                <a href="{{route('login')}}">Login</a></span>
                        </li> -->
                        <li><span><i class="fa fa-truck" aria-hidden="true"></i>
                            <a href="">Delivery</a></span></li>
                        <li><span><i class="fa fa-info-circle" aria-hidden="true"></i>
                            <a href="">Support</a></span></li>
                    </ul><!-- heder links -->

                </div>
            </div> <!-- header-top -->

            <!-- header-content -->
            <div class="header-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="#"><img style="width: 100px; height: 100px;" src="images/rasinn logo.png" alt="logo"></a>
                            </strong><!-- logo -->
                        </div>

                        

                        <div class=" nav-right">

                            <!-- link  wishlish-->
                            <a href="#" class="link-compare"><span>compare</span></a>
                            <!-- link  wishlish-->

                            <!-- link  wishlish-->
                            <a href="#" class="link-wishlist"><span>wishlish</span></a>
                            <!-- link  wishlish-->

                            <!-- block mini cart -->
                            <div class="block-minicart dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <span class="cart-icon"></span>
                                    <span class="cart-text">cart</span>
                                    <span class="counter qty">
                                        <span class="counter-number">6</span>
                                        <span class="counter-label">6 <span>Item(s)</span></span>
                                        <span class="counter-price">$75.00</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div  class="minicart-content-wrapper" >
                                            <div class="subtitle">
                                                You have 6 item(s) in your cart
                                            </div>
                                            <div class="minicart-items-wrapper">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="images/media/index1/minicart.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <a class="product-item-photo" href="#" title="The Name Product">
                                                            <img class="product-image-photo" src="images/media/index1/minicart2.jpg" alt="The Name Product">
                                                        </a>
                                                        <div class="product-item-details">
                                                            <strong class="product-item-name">
                                                                <a href="#">Donec Ac Tempus</a>
                                                            </strong>
                                                            <div class="product-item-price">
                                                                <span class="price">61,19 €</span>
                                                            </div>
                                                            <div class="product-item-qty">
                                                                <span class="label">Qty: </span ><span class="number">1</span>
                                                            </div>
                                                            <div class="product-item-actions">
                                                                <a class="action delete" href="#" title="Remove item">
                                                                    <span>Remove</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="subtotal">
                                                <span class="label">Total</span>
                                                <span class="price">$630</span>
                                            </div>
                                            <div class="actions">
                                                <!-- <a class="btn btn-viewcart" href="">
                                                    <span>Shopping bag</span>
                                                </a> -->
                                                <button class="btn btn-checkout" type="button" title="Check Out">
                                                    <span>Checkout</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- block mini cart -->
                            

                        </div>

                        <div class=" nav-mind">

                            <!-- block search -->
                            <div class="block-search">
                                <div class="block-title">
                                    <span>Search</span>
                                </div>
                                <div class="block-content">
                                    
                                    <div class="form-search">
                                        <form>
                                            <div class="box-group">
                                                <input type="text" class="form-control" placeholder="Search here...">
                                                <button class="btn btn-search" type="button"><span>search</span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="categori-search  ">
                                        <select data-placeholder="All Categories" class="categori-search-option">
                                            <option>All Categories</option>
                                            <option>Fashion</option>
                                            <option>Tops Blouses</option>
                                            <option>Clothing</option>
                                            <option>Furniture</option>
                                            <option>Bathtime Goods</option>
                                            <option>Shower Curtains</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- block search -->

                        </div>
                    </div>                    

                </div>
            </div><!-- header-content -->
            <div class="container">
                <marquee>rasinn is a online marketplace. If you want to promote your product then contact with us, please. rasinn is a online marketplace.</marquee>
            </div>
            <div class="  header-nav mid-header">
                <div class="container">
                    <div class="box-header-nav">

                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span><i aria-hidden="true" class="fa fa-bars"></i></span>

                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <ul class="ui-categori">
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat1.png" alt="nav-cat"></span>
                                            Electronics
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu" style="background-image: url(images/media/index1/bgmenu.jpg);">
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat2.png" alt="nav-cat"></span>
                                            Sports & Outdoors
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <div class="categori-img">
                                                <a href="#"><img src="images/media/index1/categori-img1.jpg" alt="categori-img"></a>
                                            </div>
                                            <ul class="categori-list">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">washing machine</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat3.png" alt="nav-cat"></span>
                                            Smartphone & Tablets
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <strong class="subtitle"><span>special products</span></strong>
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="30" 
                                                data-autoplayTimeout="300" 
                                                data-autoplay="true" 
                                                data-loop="true"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "600":{"items":1},
                                                "992":{"items":4}
                                                }'>
                                                
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu1.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu2.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu3.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu4.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu4.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat4.png" alt="nav-cat"></span>
                                            Health & Beauty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat5.png" alt="nav-cat"></span>
                                            Bags, Shoes & Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat6.png" alt="nav-cat"></span>
                                            Toys & Hobbies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat7.png" alt="nav-cat"></span>
                                            Computers & Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat8.png" alt="nav-cat"></span>
                                            Laptops & Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat9.png" alt="nav-cat"></span>
                                           Jewelry  & Watches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat10.png" alt="nav-cat"></span>
                                            Flashlights & Lamps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat11.png" alt="nav-cat"></span>
                                            Cameras & Photo
                                        </a>
                                    </li>
                                    <li class="cat-link-orther">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat10.png" alt="nav-cat"></span>
                                            Sport & Outdoors
                                        </a>
                                    </li>
                                    <li class="cat-link-orther">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat9.png" alt="nav-cat"></span>
                                            Watch & Jewellry    
                                        </a>
                                    </li>
                                    
                                    
                                </ul>

                                <div class="view-all-categori">
                                    <a  class="open-cate btn-view-all">All Categories</a>
                                </div>
                            </div>
                            
                        </div><!-- categori -->

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                            <ul class="ui-menu">
                                <li class="active">
                                    <a href="index-2.html">Home</a>                                   
                                </li>
                                <li><a href="#">affiliate</a></li>
                                <li><a href="#">consultency</a></li>
                                <li><a href="#">cart</a></li>
                                <li><a href="#">wishlist</a></li>
                                <li><a href="#"> all products </a></li>
                                <li><a href="#"> social service  </a></li>
                                <li><a href="Blog.html">Blog</a></li>
                            </ul>

                        </div><!-- menu -->

                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>

                        <div class="block-minicart dropdown ">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <span class="cart-icon"></span>
                            </a>
                            <div class="dropdown-menu">
                                <form>
                                    <div  class="minicart-content-wrapper" >
                                        <div class="subtitle">
                                            You have 6 item(s) in your cart
                                        </div>
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items">
                                                <li class="product-item">
                                                    <a class="product-item-photo" href="#" title="The Name Product">
                                                        <img class="product-image-photo" src="images/media/index1/minicart.jpg" alt="The Name Product">
                                                    </a>
                                                    <div class="product-item-details">
                                                        <strong class="product-item-name">
                                                            <a href="#">Donec Ac Tempus</a>
                                                        </strong>
                                                        <div class="product-item-price">
                                                            <span class="price">61,19 €</span>
                                                        </div>
                                                        <div class="product-item-qty">
                                                            <span class="label">Qty: </span ><span class="number">1</span>
                                                        </div>
                                                        <div class="product-item-actions">
                                                            <a class="action delete" href="#" title="Remove item">
                                                                <span>Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <a class="product-item-photo" href="#" title="The Name Product">
                                                        <img class="product-image-photo" src="images/media/index1/minicart2.jpg" alt="The Name Product">
                                                    </a>
                                                    <div class="product-item-details">
                                                        <strong class="product-item-name">
                                                            <a href="#">Donec Ac Tempus</a>
                                                        </strong>
                                                        <div class="product-item-price">
                                                            <span class="price">61,19 €</span>
                                                        </div>
                                                        <div class="product-item-qty">
                                                            <span class="label">Qty: </span ><span class="number">1</span>
                                                        </div>
                                                        <div class="product-item-actions">
                                                            <a class="action delete" href="#" title="Remove item">
                                                                <span>Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total</span>
                                            <span class="price">$630</span>
                                        </div>
                                        <div class="actions">
                                            <!-- <a class="btn btn-viewcart" href="">
                                                <span>Shopping bag</span>
                                            </a> -->
                                            <button class="btn btn-checkout" type="button" title="Check Out">
                                                <span>Checkout</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="block-search">
                            <div class="block-title">
                                <span>Search</span>
                            </div>
                            <div class="block-content">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control" placeholder="Search here...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown setting">
                            <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                            <div class="dropdown-menu  ">
                                <div class="switcher  switcher-language">
                                    <strong class="title">Select language</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_french.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_germany.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <img class="switcher-flag" alt="flag" src="images/flags/flag_spain.png">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher  switcher-currency">
                                    <strong class="title">SELECT CURRENCIES</strong>
                                    <ul class="switcher-options ">
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option switcher-active">
                                            <a href="#">
                                                <i class="fa fa-eur" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="#">
                                                <i class="fa fa-gbp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                <ul class="account">
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Compare</a></li>
                                    <li><a href="#">Login/Register</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </header><!-- end HEADER -->            

        <!-- MAIN -->
        <main class="site-main">

            <div class="block-section-top block-section-top2">
                <div class="container">
                    <div class="box-section-top">

                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
                                <ul class="ui-categori">
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat1.png" alt="nav-cat"></span>
                                            Electronics
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu" style="background-image: url(images/media/index1/bgmenu.jpg);">
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat2.png" alt="nav-cat"></span>
                                            Sports & Outdoors
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <div class="categori-img">
                                                <a href="#"><img src="images/media/index1/categori-img1.jpg" alt="categori-img"></a>
                                            </div>
                                            <ul class="categori-list">
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Smartphone</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">TElevision</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">Camera</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-3">
                                                    <strong class="title"><a href="#">washing machine</a></strong>
                                                    <ul>
                                                        <li><a href="#">Skirts    </a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Jumpusuits</a></li>
                                                        <li><a href="#">Scarvest</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="parent">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat3.png" alt="nav-cat"></span>
                                            Smartphone & Tablets
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <strong class="subtitle"><span>special products</span></strong>
                                            <div class="owl-carousel" 
                                                data-nav="true" 
                                                data-dots="false" 
                                                data-margin="30" 
                                                data-autoplayTimeout="300" 
                                                data-autoplay="true" 
                                                data-loop="true"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "600":{"items":1},
                                                "992":{"items":4}
                                                }'>
                                                
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu1.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu2.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu3.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu4.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-1">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/product-menu4.jpg"></a>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat4.png" alt="nav-cat"></span>
                                            Health & Beauty
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat5.png" alt="nav-cat"></span>
                                            Bags, Shoes & Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat6.png" alt="nav-cat"></span>
                                            Toys & Hobbies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat7.png" alt="nav-cat"></span>
                                            Computers & Networking
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat8.png" alt="nav-cat"></span>
                                            Laptops & Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat9.png" alt="nav-cat"></span>
                                           Jewelry  & Watches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat10.png" alt="nav-cat"></span>
                                            Flashlights & Lamps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat11.png" alt="nav-cat"></span>
                                            Cameras & Photo
                                        </a>
                                    </li>
                                    <li class="cat-link-orther">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat10.png" alt="nav-cat"></span>
                                            Sport & Outdoors
                                        </a>
                                    </li>
                                    <li class="cat-link-orther">
                                        <a href="#">
                                            <span class="icon"><img src="images/icon/index3/nav-cat9.png" alt="nav-cat"></span>
                                            Watch & Jewellry    
                                        </a>
                                    </li>
                                    
                                    
                                </ul>

                                <div class="view-all-categori">
                                    <a  class="open-cate btn-view-all">All Categories</a>
                                </div>
                            </div>
                            
                        </div><!-- categori -->

                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-2">

                            <!-- slide -->
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="false" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item2" >
                                   <a href="#" class="img-slide"><img src="images/media/index2/slide1.jpg" alt="img"></a>
                                </div>

                                <div class="item item1" >
                                    <a href="#" class="img-slide"><img src="images/media/index2/slide1.jpg" alt="img"></a>
                                </div>
                                
                                <div class="item item3" >
                                    <a href="#" class="img-slide"><img src="images/media/index2/slide1.jpg" alt="img"></a>
                                </div>
                            </div> <!-- slide -->

                        </div><!-- block slide top -->


                    </div>
                </div>
            </div>

            <!-- Block deals of 
            <div class="container ">
                <div class="block-deals-of-opt2">
                    <div class="block-title ">
                        <span class="title">Latest Deals</span>
                        <div class="deals-of-countdown">
                            <span class="title">End In</span>
                            <div class="count-down-time" data-countdown="2016/9/27"></div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="true" 
                            data-dots="false" 
                            data-margin="8" 
                            data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "640":{"items":3},
                            "992":{"items":4},
                            "1200":{"items":5}
                            }'>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals1.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        <span class="product-item-label label-sale-off">-30% <span>0ff</span></span>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">$52.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals2.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals3.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals4.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals5.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">$52.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals5.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals3.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals4.jpg"></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas Consequat Mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="80%" class="rating-result">
                                                        <span style="width:80%">
                                                            <span><span>80</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                                    
                    </div>
                </div>
            </div>  Block deals of 

            

            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 30px; padding-top:30px;">
            
                <!-- block -floor -products / floor 1 :Fashion-
                <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title ">
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor1.png"></span>
                                <span class="text">Fashion</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Specials          </a></li>
                                        <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab">Most Reviews </a></li>
                                        <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab">  On Sales </a></li>
                                        <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab"> Trending   </a></li>
                                        <li role="presentation"><a href="#floor1-7"  role="tab" data-toggle="tab">Recommendatation</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            <div class="col-banner">
                                <a href="#" class="box-img"><img src="images/media/index2/baner-floor1.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-5.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-6.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-5.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor1-6.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 --
                                <div class="tab-pane  fade" id="floor1-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 5 --
                                <div class="tab-pane fade " id="floor1-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 6 --
                                <div class="tab-pane  fade" id="floor1-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 7 --
                                <div class="tab-pane  fade" id="floor1-7" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor1-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :Fashion-->

                <!-- block -floor -products / floor 2 :Sports--
                <div class="block-floor-products block-floor-products-opt2 floor-products2 show-deal" id="floor0-2">
                    <div class="container">
                        <div class="block-title">
                          
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor2.png"></span>
                                <span class="text">Sports</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor2-1"  role="tab" data-toggle="tab">Best salers  </a></li>
                                        <li role="presentation"><a href="#floor2-2"  role="tab" data-toggle="tab">Specials </a></li>
                                        <li role="presentation"><a href="#floor2-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor2-4"  role="tab" data-toggle="tab">Most Reviews            </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-1" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-3" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            

                            <div class="col-banner">

                                <div class="col-deal">
                                    <div class="box-title ">
                                        <span >Deals of The Day</span>
                                    </div>
                                    <div class="box-content">
                                        <div class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/deals-of-day1.jpg"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">Top selling earphone </a></strong>
                                                    
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                        <span class="old-price">$52.00</span>
                                                        <span class="label-price">-15%</span>
                                                    </div>
                                                    <div class="deals-of-countdown">
                                                        <div class="count-down-time" data-countdown="2016/9/27"></div>
                                                    </div>
                                                    
                                                    <div class="product-reviews-summary">
                                                        <img src="images/icon/index2/star.png" alt="reviews">
                                                    </div>
                                                    <div class="product-reviews-des">
                                                        Sound performance tuning includes the smallest details like...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <a href="" class="box-img"><img src="images/media/index2/baner-floor2.jpg" alt="baner-floor"></a> --
                                <div class="box-banner">
                                    <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-autoplayTimeout="700" 
                                            data-autoplay="true" 
                                            data-loop="true"
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":1},
                                            "600":{"items":1},
                                            "768":{"items":1},
                                            "992":{"items":1},
                                            "1200":{"items":1}
                                        }'>
                                        <div class="item">
                                            <a href="#" class="img-slide"><img src="images/media/index2/baner-floor2.jpg" alt="baner-floor"></a>
                                        </div>
                                        <div class="item">
                                            <a href="#" class="img-slide"><img src="images/media/index2/baner-floor2.jpg" alt="baner-floor"></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane fade " id="floor2-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane fade " id="floor2-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4 --
                                <div class="tab-pane fade " id="floor2-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor2-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :Sports-->

                <!-- block -floor -products / floor 3:electronic--
                <div class="block-floor-products block-floor-products-opt2 floor-products3" id="floor0-3">
                    <div class="container">
                        <div class="block-title ">
                           
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor3.png"></span>
                                <span class="text">electronic</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor3-1"  role="tab" data-toggle="tab">Best salers   </a></li>
                                        <li role="presentation"><a href="#floor3-2"  role="tab" data-toggle="tab">Specials   </a></li>
                                        <li role="presentation"><a href="#floor3-3"  role="tab" data-toggle="tab">New Arrivals       <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor3-4"  role="tab" data-toggle="tab">Most Reviews         </a></li>
                                        <li role="presentation"><a href="#floor3-5"  role="tab" data-toggle="tab">    On Sales             </a></li>
                                        <li role="presentation"><a href="#floor3-6"  role="tab" data-toggle="tab">Trending          </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-2" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-4" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            <div class="col-banner">
                                <a href="#" class="box-img"><img src="images/media/index2/baner-floor3.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor3-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index2/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane fade " id="floor3-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane fade " id="floor3-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                                <!-- tab 4 --
                                <div class="tab-pane fade " id="floor3-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                                <!-- tab 5 --
                                <div class="tab-pane fade " id="floor3-5" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                                <!-- tab 6 --
                                <div class="tab-pane fade " id="floor3-6" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor3-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor :electronic-->

                <!-- block -floor -products / floor 4 :Digital--
                <div class="block-floor-products block-floor-products-opt2 floor-products4 show-brand" id="floor0-4">
                    <div class="container">

                        <div class="block-title ">
                           
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor4.png"></span>
                                <span class="text">Digital</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor4-1"  role="tab" data-toggle="tab">Best salers    </a></li>
                                        <li role="presentation"><a href="#floor4-2"  role="tab" data-toggle="tab">Specials          </a></li>
                                        <li role="presentation"><a href="#floor4-3"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor4-4"  role="tab" data-toggle="tab"> Most Reviews            </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-3" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-5" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            <div class="col-brand">
                                <ul class="slide-brand">
                                    <li><a href="#"><img src="images/media/index2/brand-floor1.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor2.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor3.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor4.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor5.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor6.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor7.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor8.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor6.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor7.jpg" alt="brand"></a></li>
                                    <li><a href="#"><img src="images/media/index2/brand-floor8.jpg" alt="brand"></a></li>
                                </ul>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor4-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane fade " id="floor4-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane fade " id="floor4-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>

                                <!-- tab 4 --
                                <div class="tab-pane fade " id="floor4-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor4-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 4 :Digital-->

                <!-- block -floor -products / floor 5 :furniture--
                <div class="block-floor-products block-floor-products-opt2 floor-products5" id="floor0-5">
                    <div class="container">
                        <div class="block-title ">
                          
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor5.png"></span>
                                <span class="text">furniture</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor5-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor5-2"  role="tab" data-toggle="tab">Specials          </a></li>
                                        <li role="presentation"><a href="#floor5-3"  role="tab" data-toggle="tab"> New Arrivals              <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor5-4"  role="tab" data-toggle="tab"> Most Reviews         </a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-4" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-6" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            <div class="col-banner">
                                <a href="#" class="box-img"><img src="images/media/index2/baner-floor5.jpg" alt="baner-floor"></a>
                            </div>

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor5-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane fade " id="floor5-2" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane fade " id="floor5-3" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                                <!-- tab 4 --
                                <div class="tab-pane fade " id="floor5-4" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-1.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-2.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor5-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone </a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 5 :furniture-->

                <!-- block -floor -products / floor 6 :jewelry--
                <div class="block-floor-products block-floor-products-opt2 floor-products6 show-carousel-banner" id="floor0-6">
                    <div class="container">
                        <div class="block-title ">
                           
                            <span class="title">
                                <span class="icon"><img alt="img"  src="images/media/index2/floor6.png"></span>
                                <span class="text">jewelry</span>
                            </span>
                            <div class="links dropdown">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor6-1"  role="tab" data-toggle="tab">Best Seller </a></li>
                                        <li role="presentation"><a href="#floor6-2"  role="tab" data-toggle="tab">Specials          </a></li>
                                        <li role="presentation"><a href="#floor6-3"  role="tab" data-toggle="tab">New Arrivals           <span class="label-cat">12</span></a></li>
                                        <li role="presentation"><a href="#floor6-4"  role="tab" data-toggle="tab">Most Reviews        </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="#floor0-5" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>


                        <div class="block-content">

                            <div class="col-categori">
                                <ul>
                                    <li><a href="#">Girf Sets</a></li>
                                    <li><a href="#">Shirt For Man</a></li>
                                    <li><a href="#">Maecenas</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Manicure & Pedicure</a></li>
                                    <li><a href="#">Bath & Spa</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li class="cat-orther"><a href="#">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="#">ARM</a></li>
                                    <li class="cat-orther"><a href="#">Accessories</a></li>
                                    <li class="cat-orther"><a href="#">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>

                            

                            <div class="col-products tab-content">

                                <!-- tab 1 --
                                <div class="tab-pane active in  fade " id="floor6-1" role="tabpanel">
                                    <div class="col-left">
                                        <div class="box-banner">
                                            <div class="owl-carousel" 
                                                    data-nav="true" 
                                                    data-dots="false" 
                                                    data-autoplayTimeout="700" 
                                                    data-autoplay="true" 
                                                    data-loop="true"
                                                    data-margin="0" 
                                                    data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":1},
                                                    "600":{"items":1},
                                                    "768":{"items":1},
                                                    "992":{"items":1},
                                                    "1200":{"items":1}
                                                }'>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-product">
                                            
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="col-right">
                                        <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":3}
                                        }'>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 2--
                                <div class="tab-pane fade " id="floor6-2" role="tabpanel">
                                    <div class="col-left">
                                        <div class="box-banner">
                                            <div class="owl-carousel" 
                                                    data-nav="true" 
                                                    data-dots="false" 
                                                    data-autoplayTimeout="700" 
                                                    data-autoplay="true" 
                                                    data-loop="true"
                                                    data-margin="0" 
                                                    data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":1},
                                                    "600":{"items":1},
                                                    "768":{"items":1},
                                                    "992":{"items":1},
                                                    "1200":{"items":1}
                                                }'>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-product">
                                            
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="col-right">
                                        <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":3}
                                        }'>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 3 --
                                <div class="tab-pane fade " id="floor6-3" role="tabpanel">
                                    <div class="col-left">
                                        <div class="box-banner">
                                            <div class="owl-carousel" 
                                                    data-nav="true" 
                                                    data-dots="false" 
                                                    data-autoplayTimeout="700" 
                                                    data-autoplay="true" 
                                                    data-loop="true"
                                                    data-margin="0" 
                                                    data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":1},
                                                    "600":{"items":1},
                                                    "768":{"items":1},
                                                    "992":{"items":1},
                                                    "1200":{"items":1}
                                                }'>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-product">
                                            
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="col-right">
                                        <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":3}
                                        }'>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>

                                <!-- tab 4--
                                <div class="tab-pane fade " id="floor6-4" role="tabpanel">
                                    <div class="col-left">
                                        <div class="box-banner">
                                            <div class="owl-carousel" 
                                                    data-nav="true" 
                                                    data-dots="false" 
                                                    data-autoplayTimeout="700" 
                                                    data-autoplay="true" 
                                                    data-loop="true"
                                                    data-margin="0" 
                                                    data-responsive='{
                                                    "0":{"items":1},
                                                    "420":{"items":1},
                                                    "600":{"items":1},
                                                    "768":{"items":1},
                                                    "992":{"items":1},
                                                    "1200":{"items":1}
                                                }'>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" class="img-slide"><img src="images/media/index2/baner-floor6.jpg" alt="baner-floor"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-product">
                                            
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="col-right">
                                        <div class="owl-carousel" 
                                            data-nav="true" 
                                            data-dots="false" 
                                            data-margin="0" 
                                            data-responsive='{
                                            "0":{"items":1},
                                            "420":{"items":2},
                                            "600":{"items":3},
                                            "768":{"items":3},
                                            "992":{"items":3},
                                            "1200":{"items":3}
                                        }'>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-3.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-4.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="item">
                                                <div class=" product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-1.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                    <span class="old-price">$52.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item product-item-opt-2">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/floor6-2.jpg"></a>
                                                            <div class="product-item-actions">
                                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#">Headphone & earphone</a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">$45.00</span>
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                            <span style="width:80%">
                                                                                <span><span>80</span>% of <span>100</span></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- block -floor -products / floor 5 :furniture-->

            </div>

            <!-- Banner -->
            <div class="block-banner-lag effect-banner3 ">
                <div class="container">
                    <div class="clearfix">
                        <div class="col-sm-6 no-padding">
                            <a href="#" class="box-img"><img src="images/media/index2/banner7-1.jpg" alt="banner"></a>
                        </div>
                        <div class="col-sm-6 no-padding">
                            <a href="#" class="box-img"><img src="images/media/index2/banner7-2.jpg" alt="banner"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Banner -->

            <!-- Block Blog --
            <div class="block-the-blog">
                <div class="container">
                    <div class="block-title">
                        <span class="title">From The  Blog</span>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" 
                            data-nav="true" 
                            data-dots="false" 
                            data-margin="30" 
                            data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "768":{"items":2},
                            "992":{"items":3},
                            "1200":{"items":4}
                        }'>
                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index2/blog1.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Share the love for KuteShop </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>February 27, 2015</span></div>
                                        <div class="blog-comment"><span>27 comment</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index2/blog2.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Send your Question to Kuteshop </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>February 27, 2015</span></div>
                                        <div class="blog-comment"><span>27 comment</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index2/blog3.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">The history the hype </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>February 27, 2015</span></div>
                                        <div class="blog-comment"><span>27 comment</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index2/blog4.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Collection Summer Fashion </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>February 27, 2015</span></div>
                                        <div class="blog-comment"><span>27 comment</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="blog-photo">
                                    <a href="#"><img src="images/media/index2/blog4.jpg" alt="blog"></a>
                                    
                                </div>
                                <div class="blog-detail">
                                    <strong class="blog-name"><a href="#">Share the love for KuteShop </a></strong>
                                    <div class="blog-info">
                                        <div class="blog-date"><span>February 27, 2015</span></div>
                                        <div class="blog-comment"><span>27 comment</span></div>
                                    </div>
                                    <div class="blog-actions">
                                        <a href="#" class="action">Read more</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div><!-- Block Blog -->
        
            <!--  block-service-->
            <div class="block-service-opt2">
                <div class="container">
                    <div class="items">
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service1.png" alt="service">
                                <span class="title">Great Value</span>
                            </div>
                            <div class="des">
                                We offer competitive prices on our 100 million plus product range.
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service2.png" alt="service">
                                <span class="title">Worldwide Delivery</span>
                            </div>
                            <div class="des">
                                With sites in 5 languages, we ship to over 200 countries & regions.
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service3.png" alt="service">
                                <span class="title">Safe Payment</span>
                            </div>
                            <div class="des">
                                Pay with the world's most popular and secure payment methods.
                            </div>
                        </div>
                   
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service4.png" alt="service">
                                <span class="title">Shop with Confidence</span>
                            </div>
                            <div class="des">
                                Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service5.png" alt="service">
                                <span class="title">24/7 Help Center</span>
                            </div>
                            <div class="des">
                                Round-the-clock assistance for a smooth shopping experience.
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="images/media/index2/service6.png" alt="service">
                                <span class="title">Shop On-The-Go</span>
                            </div>
                            <div class="des">
                                Download the app and get the world of AliExpress at your fingertips.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  block-service-->

        </main><!-- end MAIN -->

        <!-- FOOTER -->
        <footer class="site-footer footer-opt-1">

            <div class="container">
                <div class="footer-column">
                
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <strong class="logo">
                                <a href="#"><img style="height: 80px; width: 80px;" src="images/rasinn logo.png" alt="logo"></a>
                            </strong>

                            <table class="address">
                                <tr>
                                    <td><b>Address:  </b></td>
                                    <td>100 Feet road, Saeed Nagar, Bhatara, Dhaka, Bangladesh</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>+88016714995627</td>
                                </tr>
                                <tr>
                                    <td><b>Email:</b></td>
                                    <td>Support@rasinn.com</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">Company</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">My Account</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="#">New User Guide</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Report Spam</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <div class="block-newletter">
                                <div class="block-title">NEWSLETTER</div>
                                <div class="block-content">
                                    <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your Email Address">
                                        <span class="input-group-btn">
                                            <button class="btn btn-subcribe" type="button"><span>ok</span></button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="block-social">
                                <div class="block-title">Let’s Socialize </div>
                                <div class="block-content">
                                    <a href="#" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="sh-pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="#" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                    <a href="#" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    
                    Copyright © 2022 All Rights Reserved. Designed by <a href="http://rasinn.com/">rasinn.com</a>
                   
                </div>

            </div>

        </footer><!-- end FOOTER -->        
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    <!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Boostrap --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Countdown --> 
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    
    <!-- actual --> 
    <script type="text/javascript" src="js/jquery.actual.min.js"></script>

    <!-- Chosen jquery-->    
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    
    <!-- parallax jquery--> 
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

    <!-- elevatezoom --> 
    <script type="text/javascript" src="js/jquery.elevateZoom.min.js"></script>

    <!-- fancybox -->
    <script src="js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- arcticmodal -->
    <script src="js/arcticmodal/jquery.arcticmodal.js"></script>
    
    <!-- Main -->  
    <script type="text/javascript" src="js/main.js"></script>

    
    
</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Aug 2018 17:51:26 GMT -->
</html>