<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('includes/head');
?>
    <body>
        
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <?php
        $this->load->view('includes/sidebar');
        ?>

        <!-- Categories Right quickview -->

        <!-- Shop quickview -->
        <div class="shop-quickview has-background-image" data-background="assets/images/bg/sidebar.jpeg">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2>Nephos</h2>
                    <span id="close-shop-sidebar"><i data-feather="x"></i></span>
                </div>
                <!-- Shop menu -->
                <ul class="shop-menu">
                    <li>
                        <a href="shop.html">
                            <span>Shop</span>
                            <i data-feather="grid"></i>
                        </a>
                    </li>
                    <li>
                        <a href="account.html">
                            <span>My Account</span>
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="orders.html">
                            <span>My Orders</span>
                            <i data-feather="credit-card"></i>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html">
                            <span>My Wishlists</span>
                            <i data-feather="heart"></i>
                        </a>
                    </li>
                </ul>
                <!-- Profile image -->
                <ul class="user-profile">
                    <li>
                        <a href="account.html">
                            <img src="assets/images/avatars/altvatar.png.jpeg" alt="">
                            <span class="user">
                                <span>Guest</span>
                                <span>0 <small>Items in Cart</small></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Cart quickview -->
        <div class="cart-quickview">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2> Uploads</h2>
                    <span id="close-cart-sidebar"><i data-feather="x"></i></span>
                </div>
                <!-- Cart quickview body -->
                <div class="cart-body">
                    <div class="empty-cart has-text-centered">
                        <h3>Current catalog empty</h3>
                        <img src="assets/images/feather/upload.svg" alt="">
                        <a href="shop.html" class="button big-button rounded">Upload Music</a>
                        <small>You can create your account later</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main wrapper -->
        <div class="shop-wrapper">
        
            <!-- Search overlay -->
            <div class="search-overlay"></div>
            
            <!-- Search input -->
            <div class="search-input-wrapper is-desktop is-hidden">
                <div class="field">
                    <div class="control">
                        <input type="text" name="search" autofocus required>
                        <span id="clear-search" role="button"><i data-feather="x"></i></span>
                        <span class="search-help">Type the name of the product you are looking for</span>
                    </div>
                </div>
            </div>
            <!-- Main section -->
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Authentication Layout -->
                    <div class="columns account-header is-auth">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="auth-title">
                                <h2>LOGIN</h2>
                                <a href="index.html" class="button feather-button is-small primary-button upper-button raised is-hidden-mobile">
                                    <span>Home</span>
                                </a>
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
                            <!-- Card -->
                            <div class="flat-card is-auto is-auth-form">
                                <div class="columns is-gapless is-flex-mobile">
                                    <!-- Image Columns -->
                                    <div class="column is-6 has-text-centered image-columnn is-padded" style="background-image: url(assets/images/beta.jpg);background-size: cover">
                                        <div class="store-wrapper">
                                            <img src="assets/images/logo/nephos-white.svg" alt="">
                                            <div class="title">
                                                RippleTune
                                            </div>
                                            <div class="subtitle">Get your music heard</div>
                                        </div>
                                        <div class="nephos-overlay"></div>
                                    </div>
                                    <!-- Login/Register form -->
                                    <div class="column is-6 is-mobile-padded">
        
                                        <div class="tabs-wrapper animated-tabs">
                                            <!-- Tabs -->
                                            <div class="tabs is-form-tabs">
                                                <ul>
                                                    <li class="is-active" data-tab="login"><a>Login</a></li>
                                                    <li data-tab="register"><a>Register</a></li>
                                                </ul>
                                            </div>
                                            <!-- Login form -->
                                            <div id="login" class="navtab-content is-active">
                                                <form>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Email*</label>
                                                        <input type="email" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Password*</label>
                                                        <input type="password" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="checkbox-wrap is-small">
                                                            <input id="house" type="checkbox" class="d-checkbox" checked>
                                                            <span></span>
                                                            <small>Remember me?</small>
                                                        </label>
                                                    </div>
                                                    <!-- Form Submit -->
                                                    <div class="button-wrapper">
                                                        <button type="submit" class="button feather-button is-small primary-button upper-button raised">
                                                            <span>Login</span>
                                                        </button>
                                                        <a class="forgotten">Forgot Password ?</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Register form -->
                                            <div id="register" class="navtab-content">
                                                <form>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Email*</label>
                                                        <input type="email" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Password*</label>
                                                        <input type="password" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Confirm Password*</label>
                                                        <input type="password" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Submit -->
                                                    <div class="button-wrapper">
                                                        <button type="submit" class="button feather-button is-small primary-button upper-button raised">
                                                            <span>Register</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Login/Register form -->
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- Authentication Layout -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>    </body>  
</html>
