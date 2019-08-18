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
<div class="section">
    <!-- Container -->
    <div class="container">

        <!-- Account Layout -->
        <div class="columns account-header">
            <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                <!-- Title -->
                <div class="account-title">
                    <h2>RELEASES</h2>
                    <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                </div>

                <!-- Account tabs -->
                <div class="tabs account-tabs">
                    <ul>
                        <li class="is-active"><a href="#">Releases</a></li>
                        <li><a href="streams">Streams & Revenue</a></li>
                        <li><a href="submission">Submissions</a></li>
                        <li><a href="account">Account</a></li>

                    </ul>
                </div>

                <div class="cart-summary">
                                <span class="cart-total">
                                     0.90 <small>5 <span>Tracks Released</span></small>
                                </span>
                    <a href="upload" class="button feather-button is-bold primary-button raised">
                        Upload Music
                    </a>
                </div>

                <div class="columns is-account-grid is-multiline">
                    <!-- Product list -->
                    <div class="column is-12">
                        <!-- Product -->
                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/rao.png" alt="">
                                    <span class="product-info">
                                                    <span>Rao Riddim</span>
                                                    <span>Nico Nine</span>
                                                </span>
                                    <span class="product-info">
                                                    <span>Status</span>
                                                    <span>Released</span>
                                                </span>

                                    <span class="product-info">
                                                    <span>Release Date</span>
                                                    <span>24-07-19</span>
                                                </span>

                                    <span class="action">
                                                    <span class="action-link is-like popover-removed"
                                                          data-content="More Info" data-placement="top">
                                                        <a href="#">
<i data-feather="more-horizontal"></i>
                                                    </span>

                                                </span>
                                </li>
                            </ul>
                        </div>

                        <div class="flat-card is-auto cart-card">
                            <ul class="cart-content">
                                <li>
                                    <img src="assets/images/rao.png" alt="">
                                    <span class="product-info">
                                                    <span>Rao Riddim</span>
                                                    <span>Nico Nine</span>
                                                </span>
                                    <span class="product-info">
                                                    <span>Status</span>
                                                    <span>Released</span>
                                                </span>

                                    <span class="product-info">
                                                    <span>Release Date</span>
                                                    <span>24-07-19</span>
                                                </span>

                                    <span class="action">
                                                    <span class="action-link is-like popover-removed"
                                                          data-content="More Info" data-placement="top">
                                                        <a href="#">
<i data-feather="more-horizontal"></i>
                                                    </span>

                                                </span>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- /Container -->
</div>

<?php
$this->load->view('includes/end');
?>
