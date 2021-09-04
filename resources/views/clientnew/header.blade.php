<!-- HEADER -->
@php
    $user = auth('user')->user();
@endphp
<header class="site-header header-opt-1 cate-show">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- nav-left -->
            <ul class="nav-left" >
                <li ><span><i class="fa fa-phone" aria-hidden="true"></i>00-62-658-658</span></li>
                <li ><span><i class="fa fa-envelope" aria-hidden="true"></i> Contact us today !</span></li>
            </ul><!-- nav-left -->

            <!-- nav-right -->
            <ul class=" nav-right">
                <li class="dropdown setting">
                    <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu  ">
                        <ul class="account">
                            @if($user)
                                <li><a href="">My Account</a></li>
                                <li><a href="">Checkout</a></li>
                                <li><a href="/logout">Logout</a></li>
                            @else
                            <li><a href="#login" data-toggle="modal">Login</a></li>
                            <li><a href="#register" data-toggle="modal">Register</a></li>
                            @endif
                        </ul>
                    </div>
                </li>
                <li><a href="" >Services</a></li>
                <li><a href="">Support </a></li>
            </ul><!-- nav-right -->
            {{-- Modal Register --}}
            <div class="modal fade" id="register" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{Route('clientRegister')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter full name">
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                              </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Re-Password</label>
                              <input type="password" name="re-password" class="form-control" placeholder="Enter Re-Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
            {{-- Modal Login --}}
            <div class="modal fade" id="login" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{Route('clientLogin')}}">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div><!-- header-top -->

    <!-- header-content -->
    <div class="header-content">
        <div class="container">

            <div class="row">
                <div class="col-md-3 nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="/"><img src="/client/images/media/index1/logo.png" alt="logo"></a>
                    </strong>
                </div>

                <div class="nav-right">
                    <!-- block mini cart -->
                    <div class="block-minicart dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="cart-icon"></span>
                            <span class="counter qty">
                                <span class="cart-text">Shopping Cart</span>
                                <span class="counter-number">6</span>
                                <span class="counter-label">6 <span>Items</span></span>
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

                </div>

                <div class="nav-mind">
                    <!-- block search -->
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
                    </div>

                </div>
            </div>
        </div>
    </div><!-- header-content -->

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

                    <div class="block-content">
                        <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                        <ul class="ui-categori">
                            @foreach ($menuLeft as $value)
                            <li class="parent">
                                <a href="">
                                    <span class="icon"><img src="/client/images/icon/index1/nav-cat1.png" alt="nav-cat"></span>
                                    {{$value->tenLoaiSanPham}}
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="view-all-categori">
                            <a  class="open-cate btn-view-all">All Categories</a>
                        </div>

                    </div>

                </div><!--categori  -->

                <!-- menu -->
                <div class="block-nav-menu">
                    <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>

                    <ul class="ui-menu">
                        <li class="parent parent-megamenu active">
                            <a href="#">Home</a>
                        </li>
                        @foreach ($menuTop as $value)
                            <li><a href="#">{{ $value->tenLoaiSanPham }}</a></li>
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
                {{-- Modal Login/Register --}}
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header-nav -->
</header>
<!-- end HEADER -->
