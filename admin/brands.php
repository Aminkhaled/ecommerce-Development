<?php
include('includes/head.php');
$sql = "SELECT * FROM brand ORDER BY brand";
global $conn;
$brand_query = $conn->query($sql);
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

                switch ($source) {
                    case 'edit_brands':
                        include('includes/brands/edit_brand.php');
                        break;

                    default:
                        include('includes/brands/view_brand.php');
                        break;
                }


            }
            ?>
            
            

          
        </div>
    </div>


    </div>


<?php include('includes/footer.php') ?>


<?php
if(isset($_REQUEST['delete'])){
    $delete_id = $_REQUEST['delete'];
    $delete_query ="delete from brand WHERE id={$delete_id}";
    
    $select_delete = $conn->query($delete_query);
    
}
?>
