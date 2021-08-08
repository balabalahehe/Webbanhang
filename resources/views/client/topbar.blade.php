<!-- Login Modal -->
<div class="modal1 mfp-hide" id="modal-login">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header py-3 bg-transparent center">
            <h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
        </div>
        <div class="card-body mx-auto py-5" style="max-width: 70%;">
            <form class="mb-0 row" action="{{ Route('clientLogin') }}" method="post">
                @csrf
                <div class="col-12">
                    <input type="text" name="email" value="" class="form-control not-dark" placeholder="Email" />
                </div>

                <div class="col-12 mt-4">
                    <input type="text" name="password" value="" class="form-control not-dark" placeholder="Password" />
                </div>

                <div class="col-12">
                    <a href="#" class="float-end text-dark fw-light mt-2">Forgot Password?</a>
                </div>

                <div class="col-12 mt-4">
                    <button class="button w-100 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Register Modal -->
<div class="modal1 mfp-hide" id="modal-register">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header py-3 bg-transparent center">
            <h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
        </div>
        <div class="card-body mx-auto py-5" style="max-width: 70%;">
            <form class="mb-0 row" action="{{ Route('clientRegister') }}" method="post">
                @csrf
                <div class="col-12">
                    <input type="text" name="fullname" class="form-control not-dark" placeholder="FullName" />
                </div>
                <div class="col-12 mt-2">
                    <input type="text" name="email" class="form-control not-dark" placeholder="Email" />
                </div>
                <div class="col-12 mt-2">
                    <input type="text" name="password" class="form-control not-dark" placeholder="Password" />
                </div>
                <div class="col-12 mt-2">
                    <input type="text" name="phonenumber" class="form-control not-dark" placeholder="Phone Number" />
                </div>
                <div class="col-12 mt-2">
                    <a href="#" class="float-end text-dark fw-light mt-2">Forgot Password?</a>
                </div>
                <div class="col-12 mt-2">
                    <button class="button w-100 m-0">Register</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div id="top-bar" class="dark" style="background-color: #a3a5a7;">
    <div class="container">

        <div class="row justify-content-between align-items-center">

            <div class="col-12 col-lg-auto">
                <p class="mb-0 d-flex justify-content-center justify-content-lg-start py-3 py-lg-0"><strong>Free U.S.
                        Shipping on Order above $99. Easy Returns.</strong></p>
            </div>

            <div class="col-12 col-lg-auto d-none d-lg-flex">

                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="#">About</a></li>
                        <li class="top-links-item"><a href="#">FAQS</a></li>
                        <li class="top-links-item"><a href="#">Blogs</a></li>
                        <li class="top-links-item"><a href="#">EN</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/french.png"
                                            alt="French"> FR</a></li>
                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/italian.png"
                                            alt="Italian"> IT</a></li>
                                <li class="top-links-item"><a href="#"><img src="images/icons/flags/german.png"
                                            alt="German"> DE</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul id="top-social">
                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span
                                class="ts-text">Facebook</span></a></li>
                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                    class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i
                                    class="icon-call"></i></span><span class="ts-text">+1.11.85412542</span></a></li>
                    <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i
                                    class="icon-envelope-alt"></i></span><span
                                class="ts-text">info@canvas.com</span></a></li>
                </ul>

            </div>
        </div>

    </div>
</div>
