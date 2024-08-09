<?php
// Include necessary files
include 'navbar.php';

?>

<body>
    <div class="container-fluid custom-container-banner">
        <!-- <?php echo "Last URI segment: " . $lastSegment;
                echo "<pre> ";
                echo BASEURL . $App_category[$lastSegment]['Application_cat_name'];
                echo BASEURL . 'cone-crushers';
                ?> -->
        <!-- Banner -->
        <section class="about-us-banner">
            <!-- <div class="container"> -->
            <div class="">
                <img class="desktop-banner" src="<?php echo BASEURL .  $App_category[$lastSegment]['banner_image_desktop'] ?>" alt="product-cat">
                <img class="mobile-banner" src="<?php echo BASEURL .  $App_category[$lastSegment]['banner_image_mob'] ?>" alt="product-cat">
            </div>
            <!-- </div> -->
        </section>
        <!-- Applications -->
          
        <section class="category-product-section " >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="category-sub-title">
                            <p><?php echo $App_category[$lastSegment]['application-category-description'] ?></p>
                            <h1 class="section-title">OUR APPLICATIONS</h1>
                        </div>
                        <!-- <div class="category-main-title">
                        <h2><?php echo $App_category[$lastSegment]['Application_cat_name'] ?></h2>
                    </div> -->
                    </div>
                </div>
                <!-- 1 Classification-->
                <div class="application_background">
                <?php
                if (isset($App_category[$lastSegment]['Application_cat_name'])) {
                    $categoryName = $App_category[$lastSegment]['Application_cat_name'];
                    //  echo "categoryname= ", $categoryName;
                    //  exit;
                    if ($categoryName === "Classification") { ?>
                        <div class="row product-grid-row product-grid-row-reverse ">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_1'] ?> class="product-img"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_1'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description1'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ($categoryName === "Aggregate Crushing And Screening Plant") { ?>
                        <!-- 2> Aggregate_CrushingAnd_Screening_Plant -->

                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_1'] ?> class="product-img"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_1'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description1'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_2'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description2'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_2'] ?> class="product-img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_3'] ?> class="product-img"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_3'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description3'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_4'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description4'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_4'] ?> class="product-img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <a href="#"><img src=<?php echo $App_category[$lastSegment]['application_image_5'] ?> class="product-img"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_5'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description5'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div> 
                    <?php } else { ?>
                        <!-- 3 -->
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_1'] ?> class="product-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_1'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description1'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_2'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description2'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_2'] ?> class="product-img">
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_3'] ?> class="product-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_3'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description3'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_4'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description4'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_4'] ?> class="product-img">
                                </div>
                            </div>
                        </div>

                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_5'] ?> class="product-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_5'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description5'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_6'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description6'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_6'] ?> class="product-img">
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_7'] ?> class="product-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_7'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description7'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3><?php echo $App_category[$lastSegment]['application_title_8'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description8'] ?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_8'] ?> class="product-img">
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-row product-grid-row-reverse">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-image">
                                    <img src=<?php echo $App_category[$lastSegment]['application_image_9'] ?> class="product-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-content">
                                <div class="product-content-inner">
                                    <h3 class="underline"><?php echo $App_category[$lastSegment]['application_title_9'] ?></h3>
                                    <p><?php echo $App_category[$lastSegment]['category_description9'] ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    // Fallback behavior if $lastSegment doesn't match any key in $App_category

                    <h1>echo "Invalid Application or category not found.";</h1>
                <?php } ?>
                </div>
            </div>
        </section>
        


        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>