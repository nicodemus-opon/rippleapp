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


<!-- Main section -->
<div class="section">
    <!-- Container -->
    <div class="container">
        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
        <!-- Title -->
        <div class="account-title">
            <h2>RELEASES</h2>
            <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
        </div>

        <!-- Account tabs -->
        <div class="tabs account-tabs">
            <ul>
                <li class="is-active"><a href="account.html">Releases</a></li>
                <li><a href="wishlist.html">Streams & Revenue</a></li>
                <li><a href="orders.html">Submissions</a></li>
                <li><a href="account">Account</a></li>

            </ul>
        </div>


    </div>
    <!-- /Container -->
</div>
</div>
<!-- /Main section -->

<?php
$this->load->view('includes/end');
?>
