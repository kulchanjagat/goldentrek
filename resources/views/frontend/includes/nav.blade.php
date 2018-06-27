<!-- Header - start -->
<div class="header">

    <!-- Navmenu Mobile Toggle Button -->
    <a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

    <div class="header-info">

        <!-- Personal Menu -->
        <div class="header-personal">
            <a href="#" class="header-gopersonal"></a>
            <ul>
                <li>
                    <a href="message.html">Messages <span>12</span></a>
                </li>
                <li>
                    <a href="#">Bookmarks <span>6</span></a>
                </li>
                <li>
                    <a href="cart.html">Shopping Cart <span>5</span></a>
                </li>
                <li class="header-order">
                    <a href="orders.html">Order Status</a>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
                <li>
                    <a href="#">Log out</a>
                </li>
            </ul>
        </div>

        <!-- Small Cart -->
        <a href="cart.html" class="header-cart">
            <div class="header-cart-inner">
                <p class="header-cart-count">
                    <img src="img/cart.png" alt="">
                    <span>3</span>
                </p>
                <p class="header-cart-summ">$300</p>
            </div>
        </a>

        <a href="#" class="header-compare"></a>
        <a href="#" class="header-favorites"></a>

        <!-- Search Form -->
        <a href="#" class="header-searchbtn" id="header-searchbtn"></a>
        <form action="#" class="header-search" id="header-search">
            <input type="text" placeholder="Search parts or vehicles">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

    </div>

    <!-- Logotype -->
    <p class="header-logo">
        <a href="index.html"><img src="{{asset('/frontend/img/logo.png')}}" alt=""></a>
    </p>

    <!-- Navmenu - start -->
    <nav id="top-menu">
        <ul>
            <li class="active">
                <a href="index.html">Home</a>
            </li>
            <li class="has-child">
                <a href="catalog.html">Catalog</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="catalog.html">Catalog: List Mode</a></li>
                    <li><a href="catalog-gallery.html">Catalog: Gallery Mode</a></li>
                    <li><a href="product.html">Product: Standart</a></li>
                    <li><a href="product-vehicle.html">Product: Vehicle</a></li>
                </ul>
            </li>
            <li class="has-child">
                <a href="#">Pages</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="err404.html">Error 404</a></li>
                </ul>
            </li>
            <li class="has-child">
                <a href="blog.html">Blog</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="blog.html">Blog: Standart</a></li>
                    <li><a href="blog-full.html">Blog: Full Width</a></li>
                    <li><a href="blog-left.html">Blog: Left Sidebar</a></li>
                    <li><a href="post.html">Single Post: Standart</a></li>
                    <li><a href="post-map.html">Single Post: With a Map</a></li>
                    <li><a href="post-video.html">Single Post: Video</a></li>
                    <li><a href="post-slider.html">Single Post: Slider</a></li>
                    <li><a href="post-sidebar.html">Single Post: Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="contacts.html">Contacts</a>
            </li>
            <li class="has-child">
                <a href="orders.html">Orders</a>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li><a href="orders.html">Orders</a></li>
                    <li><a href="message.html">Messages</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Navmenu - end -->

</div>
<!-- Header - end -->