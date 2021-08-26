<!-- header-nav -->
<div class="header-nav mid-header">
    <div class="container">

        <div class="box-header-nav">

            <!-- btn categori mobile -->
            <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

            <!-- btn menu mobile -->
            <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

            <!--categori  -->
            <div class="block-nav-categori">

                <div class="block-title">
                    <span>Categories</span>
                </div>

            </div><!--categori  -->

            <!-- menu -->
            <div class="block-nav-menu">
                <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>

                <ul class="ui-menu">
                    <li class="parent parent-megamenu active">
                        <a >Home</a>
                    </li>
                    @foreach ($menuTop as $value)
                        <li class="parent parent-megamenu">
                            <a>{{ $value->tenLoaiSanPham }}</a>
                        </li>
                    @endforeach
                </ul>

            </div><!-- menu -->

            <!-- mini cart -->
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
                                            <img class="product-image-photo" src="/client/images/media/index1/minicart.jpg" alt="The Name Product">
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
                                            <img class="product-image-photo" src="/client/images/media/index1/minicart2.jpg" alt="The Name Product">
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

            <!-- search -->
            <div class="block-search">
                <div class="block-title">
                    <span>Search</span>
                </div>
                <div class="block-content">
                    <div class="form-search">
                        <form>
                            <div class="box-group">
                                <input type="text" class="form-control" placeholder="i'm Searching for...">
                                <button class="btn btn-search" type="button"><span>search</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- search -->

            <!--setting  -->
            <div class="dropdown setting">
                <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                <div class="dropdown-menu  ">
                    <div class="switcher  switcher-language">
                        <strong class="title">Select language</strong>
                        <ul class="switcher-options ">
                            <li class="switcher-option">
                                <a href="#">
                                    <img class="switcher-flag" alt="flag" src="/client/images/flags/flag_french.png">
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    <img class="switcher-flag" alt="flag" src="/client/images/flags/flag_germany.png">
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    <img class="switcher-flag" alt="flag" src="/client/images/flags/flag_english.png">
                                </a>
                            </li>
                            <li class="switcher-option switcher-active">
                                <a href="#">
                                    <img class="switcher-flag" alt="flag" src="/client/images/flags/flag_spain.png">
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
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Checkout</a></li>
                        <li><a href="">Compare</a></li>
                        <li><a href="">Login/Register</a></li>
                    </ul>
                </div>
            </div><!--setting  -->

        </div>
    </div>
</div><!-- header-nav -->
