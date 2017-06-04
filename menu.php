
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">PAKISTAN COMMUNITY INTERFACE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Consular Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Foreign Policy</a>
                </li>
                <li>
                    <a class="page-scroll" href="#kashmir">Kashmir Dispute</a>
                </li>
                <li>
                    <!--<a class="page-scroll" href="#portfolio">Events</a>-->
                </li>
                <?php
                if (isset($_SESSION['UserName'])) {
                    // logged in
                    ?>
                    <li>
                        <a class = "page-scroll" href="personalInfo.php">Welcome <?= $_SESSION['UserName'] ?></a>
                    </li>
                    <li>
                        <a class = "page-scroll" href="logout.php">Logout</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a class = "page-scroll" href="login.php">Login</a>
                    </li>
                    <li>
                        <a class = "page-scroll" href="SignUp.php">Sign Up</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
