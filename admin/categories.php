<?php
include('includes/head.php');

?>

    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper">
        <!--nav-top-->
        <?php include('includes/nav-top.php')?>

        <!--    nav-left-->
        <?php include('includes/nav-left.php') ?>
        <div class="page-wrapper">
            <div class="container-fluid">

                <?php

                if(isset($_GET['source'])) {

                    $source = $_GET['source'];
                } else{

                    $source = '';
                }


                switch ($source) {
                    case 'add_categories':
                        include('includes/categories/add_category.php');
                        break;

                    case 'edit_categories':
                        include('includes/categories/edit_category.php');
                        break;

                    default:
                        include('includes/categories/view_category.php');
                        break;
                }



                ?>




            </div>
        </div>


    </div>


<?php include('includes/footer.php') ?>


