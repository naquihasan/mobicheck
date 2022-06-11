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

 
<section class="latest_post_detail">
    <div class="container">
        <div class="row justify-content-center heading">
            <div class="col-md text-center">
                <h2>Best Smart Phones Under 1000/- </h2>
                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="img-part">
                        <img src="images/blog-1.jpg" id="expandedImg" alt="blog-1">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="images/blog-1.jpg" onclick="myFunction(this);">
                            </div>
                             <div class="col-3">
                                <img src="images/blog-1 (1).jpg" onclick="myFunction(this);">
                            </div>
                             <div class="col-3">
                                <img src="images/blog-1.jpg" onclick="myFunction(this);">
                            </div>
                             <div class="col-3">
                                <img src="images//blog.jpg" onclick="myFunction(this);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container blog_writing">
        <div class="row justify-content-center">
            <div class="col-md-10 content_color">
                <h6> <span><img src="images/icons8-chevron-right-48.png"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</h6>
                <h6><span><img src="images/icons8-chevron-right-48.png"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</h6>
                <h6><span><img src="images/icons8-chevron-right-48.png"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</h6>
                <h6><span><img src="images/icons8-chevron-right-48.png"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</h6>
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
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            expandImg.parentElement.style.display = "block";
        }
    </script>





</body>

</html>