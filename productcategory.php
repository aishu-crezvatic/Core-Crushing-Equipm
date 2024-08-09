<?php
// Include necessary files
include 'navbar.php';
?> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <div class="container-fluid custom-container-banner">
        <!-- <?php echo "Last URI segment: " . $lastSegment;
                echo "<pre> ";
                echo $Prod_category[$lastSegment]['category_name'];
                echo BASEURL . 'cone-crushers';
                ?> -->
        <!-- Banner -->

        <section class="about-us-banner">
            <!-- <div class="container"> -->
            <div class="">
                <img class="desktop-banner" src="<?php echo BASEURL .  $Prod_category[$lastSegment]['banner_image_desktop'] ?>" alt="product-cat">
                <img class="mobile-banner" src="<?php echo BASEURL .  $Prod_category[$lastSegment]['banner_image_mob'] ?>" alt="product-cat">
            </div>
            <!-- </div> -->
        </section>
        <!-- Products -->
        <section class="category-product-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="category-sub-title">
                            <p><?php echo $Prod_category[$lastSegment]['product-category-description'] ?></p>
                            <h1 class="section-title">OUR PRODUCTS</h1>
                        </div>
                        <!-- <div class="category-main-title">
                        <h2><?php echo $Prod_category[$lastSegment]['category_name'] ?></h2>
                    </div> -->
                    </div>
                </div>
                <!-- 1 -->
                <?php
                if ($Prod_category[$lastSegment]['category_name'] == "Classifiers") {
                ?>
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_1'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $Prod_category[$lastSegment]['product_title_1'] ?></h3>
                                    <p><?php echo $Prod_category[$lastSegment]['category_description1'] ?></p>
                                    <div class="product-btn">
                                        <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- 2 -->
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_1'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $Prod_category[$lastSegment]['product_title_1'] ?></h3>
                                    <p><?php echo $Prod_category[$lastSegment]['category_description1'] ?></p>
                                    <div class="product-btn">
                                        <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url1']; ?>">View More</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $Prod_category[$lastSegment]['product_title_2'] ?></h3>
                                    <p><?php echo $Prod_category[$lastSegment]['category_description2'] ?></p>
                                    <div class="product-btn">
                                        <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url2']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_2'] ?> class="product-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_3'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $Prod_category[$lastSegment]['product_title_3'] ?></h3>
                                    <p><?php echo $Prod_category[$lastSegment]['category_description3'] ?></p>
                                    <div class="product-btn">
                                        <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url3']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row product-grid-row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $Prod_category[$lastSegment]['product_title_4'] ?></h3>
                                    <p><?php echo $Prod_category[$lastSegment]['category_description3'] ?></p>
                                    <div class="product-btn">
                                        <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url4']; ?>">View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_4'] ?> class="product-img"></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>


        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>