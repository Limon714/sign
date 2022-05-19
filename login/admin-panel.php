<?php
session_start();
if (!isset($_SESSION['AdminloginId'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON -->
    <script src="https://unpkg.com/phosphor-icons"></script>
    <!-- MY CSS -->
    <link rel="stylesheet" href="mystyle.css">

    <title>Limon's Dashboard</title>
</head>

<body>

    <!-- start: SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="ph-flame-fill"></i>
        </a>

        <ul class="sidebar__menu">
            <li>
                <a href="#" class="active"><i class="ph-house-fill"></i></a>
                <ul class="sidebar__submenu">
                    <li class="title">Dashboard</li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Analytics</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ph-airplay-fill"></i></a>
                <ul class="sidebar__submenu">
                    <li class="title">Components</li>
                    <li><a href="#">Modals</a></li>
                    <li><a href="#">Alerts</a></li>
                    <li><a href="#">Badges</a></li>
                    <li><a href="#">Tabs</a></li>
                    <li><a href="#">Cards</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ph-clipboard-fill"></i></a>
                <ul class="sidebar__submenu">
                    <li class="title">Forms</li>
                    <li><a href="#">Basic</a></li>
                    <li><a href="#">Input group</a></li>
                    <li><a href="#">Layout</a></li>
                    <li><a href="#">Validation</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ph-file-fill"></i></a>
                <ul class="sidebar__submenu">
                    <li class="title">Pages</li>
                    <li>
                        <a href="#">Authentication <i class="ph-caret-right-fill"></i></a>
                        <ul class="sidebar__dropdown-menu">
                            <li><a href="#">Login page</a></li>
                            <li><a href="#">Register page</a></li>
                            <li><a href="#">Forgot password</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Landing page</a></li>
                    <li>
                        <a href="#">Error <i class="ph-caret-right-fill"></i></a>
                        <ul class="sidebar__dropdown-menu">
                            <li><a href="#">404</a></li>
                            <li><a href="#">503</a></li>
                            <li><a href="#">Maintenance</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ph-user-circle-fill"></i></a>
                <ul class="sidebar__submenu">
                    <li class="title">Accounts</li>
                    <li><a href="#">User settings</a></li>
                    <li><a href="#">Change password</a></li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="ph-gear-fill"></i></a>
            </li>
            <li>
                <a href="#" class="logout"><i class=" ph-sign-out-fill" name="logout"></i></a>
            </li>
        </ul>
    </section>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location:login.php');
    }
    ?>
    <!-- start: SIDEBAR OVERLAY -->
    <div class="sidebar-overlay"></div>
    <!-- end: SIDEBAR OVERLAY -->
    <!-- end: SIDEBAR -->

    <!-- start: SIDEBAR MOBILE -->
    <section id="sidebar-mobile">
        <i class="ph-squares-four-fill toggle-sidebar"></i>
        <a href="#" class="brand">
            <i class="ph-flame-fill"></i>
            Adminweb
        </a>
    </section>
    <!-- end: SIDEBAR MOBILE -->

    <!-- start: MAIN -->
    <section id="main">

        <!-- start: MAIN TOP -->
        <div class="main__top">
            <div class="main__top__title">
                <h3>Welcome to Your Dashboard- <?php echo $_SESSION['AdminloginId']  ?> </h3>
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>
            </div>
            <ul class="main__top__menu">
                <li class="search">
                    <a href="#">
                        <i class="ph-magnifying-glass"></i>
                    </a>
                    <div class="main__dropdown">
                        <form action="#">
                            <input type="text" name="" placeholder="Search">
                        </form>
                        <span>Recent Search</span>
                        <ul class="recent-search">
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h5>Keyword</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="notification">
                    <a href="#">
                        <i class="ph-bell"></i>
                    </a>
                    <div class="main__dropdown">
                        <div class="notification__top">
                            <h4>Notifications</h4>
                            <span>6</span>
                        </div>
                        <ul class="notification__item">
                            <li>
                                <a href="#">
                                    <div class="left">
                                        <h5>Notification title</h5>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                    </div>
                                    <span>3 hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left">
                                        <h5>Notification title</h5>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                    </div>
                                    <span>3 hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left">
                                        <h5>Notification title</h5>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                    </div>
                                    <span>3 hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left">
                                        <h5>Notification title</h5>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                    </div>
                                    <span>3 hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="left">
                                        <h5>Notification title</h5>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                    </div>
                                    <span>3 hours</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="inbox">
                    <a href="#">
                        <i class="ph-chat-circle-dots"></i>
                    </a>
                    <span></span>
                </li>
                <li class="profile">
                    <a href="#">
                        <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                    </a>
                    <div class="main__dropdown">
                        <div class="profile__top">
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="name">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <ul class="profile__menu">
                            <li><a href="#"><i class="ph-user-circle-fill"></i> Edit profile</a></li>
                            <li><a href="#"><i class="ph-gear-fill"></i> Settings</a></li>
                            <li><a href="#"><i class="ph-lock-key"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end: MAIN TOP -->

        <!-- start: MAIN BODY -->
        <div class="main__body">
            <ul class="main__body__box-info">
                <li>
                    <i class="ph-shopping-bag-fill"></i>
                    <h5>$823</h5>
                    <p>Sales</p>
                </li>
                <li>
                    <i class="ph-wallet-fill"></i>
                    <h5>$423</h5>
                    <p>Wallet</p>
                </li>
                <li>
                    <i class="ph-users-fill"></i>
                    <h5>455</h5>
                    <p>Members</p>
                </li>
            </ul>
            <div class="main__body__data">
                <div class="sales-summary">
                    <div class="sales-summary__top">
                        <h4>Sales Summary</h4>
                        <div class="sales-summary__menu">
                            <i class="ph-dots-three-outline-vertical-fill"></i>
                            <ul class="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="sales-summary__info">
                        <li>
                            <p>Avg. Sales</p>
                            <h5>$76</h5>
                        </li>
                        <li>
                            <p>Avg. Sales</p>
                            <h5>$76</h5>
                        </li>
                        <li>
                            <p>Avg. Sales</p>
                            <h5>$76</h5>
                        </li>
                        <li>
                            <p>Avg. Sales</p>
                            <h5>$76</h5>
                        </li>
                    </ul>
                    <div id="chart"></div>
                </div>
                <div class="members">
                    <div class="members__top">
                        <h4>Members</h4>
                        <div class="members__menu">
                            <i class="ph-dots-three-outline-vertical-fill"></i>
                            <ul class="menu">
                                <li>
                                    <a href="#">Edit</a>
                                </li>
                                <li>
                                    <a href="#">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="members__user">
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                        <li>
                            <img src="https://i.postimg.cc/RF2MtpVh/pph-1.png" alt="">
                            <div class="profile">
                                <h5>Limon Islam</h5>
                                <p>Web Developer</p>
                            </div>
                            <span>20 sales</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: MAIN BODY -->

    </section>
    <!-- end: MAIN -->


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
</body>

</html>