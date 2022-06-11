<?php include_once 'inc/head.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MobiCheck</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php include_once 'inc/header.php'; ?>

    <section class="top-banner">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2>Welcome to <span class="h1 fw-bold">MobiCheck</span></h2>
                    <h6>All Checked Here</h6>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos temporibus, est minus, repudiandae officiis fugit vitae neque perferendis qui quis ea. Incidunt quibusdam repudiandae illum autem sapiente, modi quae esse?</p>
                    <div class="input-group">
                        <span class="input-group-text left-search" id="basic-addon1"><img src="images/icons/icons8-search-30 (2).png" alt="search-icon"></span>
                        <input type="text" class="form-control" placeholder="Search for products " aria-label="Username" aria-describedby="basic-addon1">
                        <!-- onfocus="this.value=''; this.style.color='white'" -->
                        <span class="input-group-text right-go">
                            <p class="mb-0"><img src="images/icons/icons8-right-24 (2).png" alt=""></p>
                        </span>
                    </div>
                </div>

                <div class="col-md image-section">
                    <img src="images/3254119.png" alt="" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-md text-center">
                    <a href="">
                        <img src="images/icons/icons8-down-24.png" alt="" class="animated bounce">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="product-icons">
    <?php include_once 'inc/navbar.php'; ?>
</section> -->

 
<section class="latest_post">
    <div class="container">
        <div class="row justify-content-center heading">
            <div class="col-md-5 text-center">
                <h6>Latest Post</h6>
                <h2>Latest blog</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/blog-1.jpg" alt="blog-1">
                    <div class="card-body">
                        <p>By Admin</p>
                        <h5>Ten Secrets You Will Not Want To Know</h5>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/blog-1 (1).jpg" alt="blog-1">
                    <div class="card-body">
                        <p>By Admin</p>
                        <h5>Ten Secrets You Will Not Want To Know</h5>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/blog.jpg" alt="blog-1">
                    <div class="card-body">
                        <p>By Admin</p>
                        <h5>Ten Secrets You Will Not Want To Know</h5>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>

<script>
    $('.support .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    $('.heart-touching-stories .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>


<script>
    $(function() {
        if (localStorage.getItem('seen') != (new Date()).getDate()) {
            setTimeout(showpanel, 4000);
        }
    });

    function showpanel() {
        $('.reveal-modal').reveal({
            animation: 'fade',
            animationspeed: 800
        });

        localStorage.setItem('seen', (new Date()).getDate());
    }
</script>

<script type="text/javascript">
    function showDiv(select) {
        if (select.value == 1) {
            document.getElementById('german').style.display = "block";
        } else {
            document.getElementById('german').style.display = "none";
        }



        if (select.value == 2) {
            document.getElementById('french').style.display = "block";
        } else {
            document.getElementById('french').style.display = "none";
        }


        if (select.value == 3) {
            document.getElementById('spanish').style.display = "block";
        } else {
            document.getElementById('spanish').style.display = "none";
        }

    }


    function showDiv1(select) {
        if (select.value == 4) {
            document.getElementById('german1').style.display = "block";
        } else {
            document.getElementById('german1').style.display = "none";
        }



        if (select.value == 5) {
            document.getElementById('french1').style.display = "block";
        } else {
            document.getElementById('french1').style.display = "none";
        }


        if (select.value == 6) {
            document.getElementById('spanish1').style.display = "block";
        } else {
            document.getElementById('spanish1').style.display = "none";
        }

    }
</script>



</body>

</html>