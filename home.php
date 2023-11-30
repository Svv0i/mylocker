<?php include "include/header.php";?>


    <div class="name">
        <center>Welcome
            <?php
            // echo $_SESSION['valid'];
            
            echo $_SESSION['username'];

            ?>
            !
        </center>
    </div>

    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                    <h1>My locker service you really want</h1>
                    <p class="text-dark">Private space in (university of Jeddah) to store your stuff within easy and simple way to book
                    </p>
                    <button class="btn"><a href="login.html">Book now</a></button>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img src="images/1101.svg" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- footer section  -->
<?php include "include/footer.php";?>