<?php

include '../php/function.php';

if (!isset($_COOKIE['lib_token']) && empty($_COOKIE['lib_token'])){
    die("Access is denied!");
}

?>
<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="apps" content="TokenLite">
    <meta name="author" content="Buy and Sell Libra Coins Online">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="wS6DZs0ymLHM7sLfoxhE4CreAGRFjQ28NjKcNUiV">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>User Dashboard | Buy and Sell Libra Coins Online</title>
    <link rel="stylesheet" href="/assets/css/vendor.bundle.css?ver=20190829112">
    <link rel="stylesheet" href="/assets/css/style.css?ver=20190829112">
    <style>
        .topbar-logo img {
            height: 20px !important;
        }

        .page-ath-gfx {
            border-right: 1px solid #e5e5e5 !important;
            background-color: #f9f9f9 !important;
        }

    </style>

    <meta property="og:url" content=""/>
    <meta property="og:title" content="Buy Libra Coins Online :: Sell Libra Coins Online"/>
    <meta property="og:image" content="/images/social.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:site_name" content="Buy Libra Coins Online :: Sell Libra Coins Online"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Buy Libra Coins Online, Sell Libra Coins Online. You can buy libra coins with your credit card. You can also buy libra coin with bitcoin or ethereum. Quickly buy libra coins with bitcoin or ethereum and other cryptocurrencies."/>

    <meta name="description" content="Buy Libra Coins Online, Sell Libra Coins Online. You can buy libra coins with your credit card. You can also buy libra coin with bitcoin or ethereum. Quickly buy libra coins with bitcoin or ethereum and other cryptocurrencies."/>
    <meta name="keywords" content="Buy libra coins online, buy libra online, buy libra with credit card, buy libra coins with credit card, buy libra with bitcoin, buy libra coins with bitcoin, buy libra coins with ethereum, buy libra with ethereum, libra, what is libra, facebook libra coin, what is libra coin."/>
    <meta name="keywords" content="index, follow"/>

</head>
<body class="user-dashboard page-user theme-modern">
<div class="topbar-wrap">
    <div class="topbar is-sticky">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="topbar-nav d-lg-none">
                    <li class="topbar-nav-item relative">
                        <a class="toggle-nav" href="#">
                            <div class="toggle-icon">
                                <span class="toggle-line"></span>
                                <span class="toggle-line"></span>
                                <span class="toggle-line"></span>
                                <span class="toggle-line"></span>
                            </div>
                        </a>
                    </li>
                </ul>

                <a class="topbar-logo" href="/">
                    <img height="40" src="/images/logo-light.png" srcset="/images/logo-light2x.png" alt="Buy and Sell Libra Coins Online">
                </a>
                <ul class="topbar-nav">
                    <li class="topbar-nav-item relative">
                        <span class="user-welcome d-none d-lg-inline-block">Welcome! <?php echo $_COOKIE["lib_name"] ?></span>
                        <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                        <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                            <div class="user-status">
                                <h6 class="text-white"><?php echo $_COOKIE["lib_email"] ?>
                                    <small class="text-white-50" style="display: none">(UD00165)</small>
                                </h6>
                                <h6 class="user-status-title">Token balance</h6>
                                <div class="user-status-balance">0
                                    <small>LBR</small>
                                </div>
                            </div>

                            <ul class="user-links bg-light">
                                <li>
                                    <a href="?login=exit"><i class="ti ti-power-off"></i>Logout</a>
                                </li>
                            </ul>
                            <form id="logout-form" action="logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="wS6DZs0ymLHM7sLfoxhE4CreAGRFjQ28NjKcNUiV">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="navbar">
        <div class="container">
            <div class="navbar-innr">
                <ul class="navbar-menu" id="main-nav">
                    <li><a href="user"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>
                    <li><a href="user/contribute"><em class="ikon ikon-coins"></em> Buy Token</a></li>
                    <li><a href="user/transactions"><em class="ikon ikon-transactions"></em> Transactions</a></li>
                    <li><a href="user/account"><em class="ikon ikon-user"></em> Profile</a></li>
                    <li><a href="user/account/balance"><em class="ikon ikon-my-token"></em> My Token</a></li>
                    <li><a href="/" target="_blank"><em class="ikon ikon-home-link"></em>
                            Main Site</a></li>
                </ul>
                <ul class="navbar-btns">
                    <li>
                        <a href="user/kyc" class="btn btn-sm btn-outline btn-light"><em class="text-primary ti ti-files"></em><span>KYC Application</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">

            <div class="main-content col-lg-12">
                <div class="d-lg-none">
                    <a href="javascript:void(0)" class="btn btn-danger btn-xl btn-between w-100 mgb-1-5x user-wallet">Add
                        a wallet address after buying <em class="ti ti-arrow-right"></em></a>
                    <div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>
                </div>
                <div class="content-area user-account-dashboard">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="token-statistics card card-token card-full-height">
                                <div class="card-innr">
                                    <div class="token-balance token-balance-with-icon">
                                        <div class="token-balance-icon">
                                            <img src="/images/token-symbol-light.png" alt=""></div>
                                        <div class="token-balance-text"><h6 class="card-sub-title">Token Balance</h6>
                                            <span class="lead">0 <span>LBR <em class="fas fa-info-circle fs-11" data-toggle="tooltip" data-placement="right" title="Equivalent to ~ USD"></em></span></span>
                                        </div>
                                    </div>
                                    <div class="token-balance token-balance-s2"><h6 class="card-sub-title">Your
                                            Contribution in</h6>
                                        <ul class="token-balance-list">
                                            <li class="token-balance-sub"><span class="lead">~</span><span class="sub">USD</span>
                                            </li>
                                            <li class="token-balance-sub"><span class="lead">~</span><span class="sub">ETH</span>
                                            </li>
                                            <li class="token-balance-sub"><span class="lead">~</span><span class="sub">BTC</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-full-height">
                                <div class="card-innr"><h6 class="card-title card-title-sm">Buy Libra Coin
                                        v2.0<span class="badge badge-success ucap">Running</span></h6>
                                    <h3 class="text-dark">1 LBR = 2.00 USD
                                        <span class="d-block text-exlight ucap fs-12">1 USD = 0.000094 BTC</span></h3>
                                    <div class="gaps-0-5x"></div>
                                    <div class="copy-wrap mgb-0-5x">
                                        <span class="copy-feedback"></span><em class="copy-icon fas fa-link"></em><input type="text" class="copy-address" value="1MwccN5zrBwv4DTgDo51piCgqorQq31Lws" disabled="">
                                        <button class="copy-trigger copy-clipboard" data-clipboard-text="1MwccN5zrBwv4DTgDo51piCgqorQq31Lws">
                                            <em class="ti ti-files"></em></button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-0" style="display: none !important;">
                                        <a href="user/contribute" class="btn btn-md btn-primary">Buy Token Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="account-info card card-full-height">
                                <div class="card-innr">
                                    <div class="user-account-status">
                                        <div class="gaps-1-5x"></div>

                                    </div>
                                    <div class="gaps-2x"></div>
                                    <div class="user-receive-wallet"><h6 class="card-title card-title-sm">
                                            Your Libra Coin Wallet</h6>
                                        <div class="gaps-1x"></div>
                                        <div class="copy-wrap mgb-0-5x">
                                            <span class="copy-feedback"></span><em class="copy-icon fas fa-link"></em><input type="text" class="copy-address" value="<?php echo $_COOKIE["lib_token"] ?>" disabled="">
                                            <button class="copy-trigger copy-clipboard" data-clipboard-text="<?php echo $_COOKIE["lib_token"] ?>">
                                                <em class="ti ti-files"></em></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="card content-welcome-block card-full-height">
                                <div class="card-innr">
                                    <div class="row guttar-vr-20px">
                                        <div class="col-sm-5 col-md-4">
                                            <div class="card-image card-image-sm">
                                                <img width="240" src="/images/welcome.png" alt=""></div>
                                        </div>
                                        <div class="col-sm-7 col-md-8">
                                            <div class="card-content"><h4>Thank you for your interest to our Buy and
                                                    Sell Libra Coins Online site.</h4><p>You can contribute LBR token go
                                                    through Buy Token page. Do not forget to join the referral program
                                                    buy Clicking on <strong>Profile</strong> &gt;<strong> Copy and Share
                                                        you Referral Link to Friends, Family and&nbsp;</strong><strong>Colleagues</strong>.&nbsp;&nbsp;
                                                </p><p>You can get a quick response to any questions, and contact us via
                                                    email at&nbsp; <strong>contact@coinlibra.tech</strong> . Click on
                                                    the button below to download
                                                    our&nbsp;<span style="font-size: 1em; color: rgb(73, 84, 99);">whitepeper.&nbsp;</span>
                                                </p><p>
                                                    <span style="font-size: 1em; color: rgb(73, 84, 99);"><a href="/files/LibraWhitePaper_en_US.pdf" target="_blank" class="btn btn-primary"><em class="fas fa-download mr-3"></em>Download
                                                            Whitepaper</a></span></p></div>
                                        </div>
                                    </div>
                                    <div class="d-block d-md-none gaps-0-5x mb-0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="card card-sales-progress card-full-height">
                                <div class="card-innr">
                                    <div class="card-head"><h5 class="card-title card-title-sm">Token Sales
                                            Progress</h5></div>
                                    <ul class="progress-info">
                                        <li><span>Raised Amount <br></span>68 200 LBR</li>
                                        <li><span>Total Token <br></span>850,000 LBR</li>
                                    </ul>
                                    <div class="progress-bar no-had-soft">
                                        <div class="progress-percent" data-percent="8.1"></div>
                                    </div>
                                    <span class="card-sub-title ucap mgb-0-5x">Sales End in</span>
                                    <div class="countdown-clock" data-date="2019/09/07 19:16:00"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="footer-bar">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <ul class="footer-links guttar-20px">
                    <li><a href="/data-privacy-policy.php">Data Privacy and Policy</a></li>
                    <li><a href="/terms-of-use.php">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-5 mt-2 mt-sm-0">
                <div class="d-flex justify-content-between justify-content-lg-end align-items-center guttar-15px">
                    <div class="copyright-text">&copy; 2019 Buy and Sell Libra Coins Online. © All Right Reserved.</div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="ajax-modal"></div>
<div class="page-overlay">
    <div class="spinner"><span class="sp sp1"></span><span class="sp sp2"></span><span class="sp sp3"></span></div>
</div>

<link rel="stylesheet" href="/css/custom.css?ver=20190829112">
<script>
    var base_url = "",


        user_wallet_address = "user/ajax/account/wallet-form",
        csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>
<script src="/assets/js/jquery.bundle.js?ver=20190829112"></script>
<script src="/assets/js/script.js?ver=20190829112"></script>
<script src="/assets/js/app.js?ver=20190829112"></script>
<script type="text/javascript">
</script>
</body>
</html>
