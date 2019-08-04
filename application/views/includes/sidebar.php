<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-02-10
 * Time: 07:43
 */ ?>

<nav class="navbar mobile-navbar is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
    <!-- Brand -->
    <div class="navbar-brand">
        <a class="navbar-item" href="home.html">
            <img src="assets/images/logo/nephos.svg" alt="">
        </a>

        <!-- Sidebar mode toggler icon -->
        <a id="sidebar-mode" class="navbar-item is-icon is-sidebar-toggler" href="javascript:void(0);">
            <i data-feather="sidebar"></i>
        </a>

        <!-- Mobile menu toggler icon -->
        <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Navbar mobile menu -->
    <div class="navbar-menu">
        <!-- Account -->
        <div class="navbar-item has-dropdown">
            <a class="navbar-link">
                <img src="assets/images/avatars/elie.jpg" alt="">
                <span class="is-heading">Elie Daniels</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="cart.html" class="navbar-item is-flex">
                    <span>Cart</span>
                    <!-- Number of items in Cart -->
                    <span class="menu-badge">3</span>
                </a>
                <a href="account.html" class="navbar-item">Account</a>
                <a href="wishlist.html" class="navbar-item">Wishlist</a>
                <a href="account-edit.html" class="navbar-item">Settings</a>
                <a href="authentication.html" class="navbar-item">Log out</a>
            </div>
        </div>

        <!-- More -->
        <div class="navbar-item has-dropdown">
            <a class="navbar-link">
                <i data-feather="grid"></i>
                <span class="is-heading">Categories</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="products.html" class="navbar-item">House</a>
                <a href="products.html" class="navbar-item">Office</a>
                <a href="products.html" class="navbar-item">Kids</a>
                <a href="products.html" class="navbar-item">Kitchen</a>
                <a href="products.html" class="navbar-item">Accessories</a>
            </div>
        </div>
    </div>
</nav>
<!-- Main Sidebar-->
<div class="main-sidebar">
    <div class="sidebar-brand">
        <a href="#"><img src="assets/images/logo/nephos.svg" alt=""></a>
    </div>
    <div class="sidebar-inner">
        <ul class="icon-menu">
            <!-- Shop sidebar trigger -->
            <li>
                <a href="javascript:void(0);" id="open-shop"><i data-feather="home"></i></a>
            </li>            <!-- Cart sidebar trigger -->
            <li>
                <a href="javascript:void(0);" id="open-cart"><i data-feather="upload"></i></a>
            </li>            <!-- Search trigger -->
            <li>
                <a href="javascript:void(0);" id="open-search"><i data-feather="search"></i></a>
                <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i
                            data-feather="x"></i></a>
            </li>            <!-- Mobile mode trigger -->
            <li class="is-hidden-desktop is-hidden-tablet">
                <a href="javascript:void(0);" id="mobile-mode"><i data-feather="smartphone"></i></a>
            </li>
        </ul>

        <!-- User account -->
        <ul class="bottom-menu is-hidden-mobile">
            <li>
                <a href="authentication.html"><i data-feather="user"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- /Main Sidebar-->


