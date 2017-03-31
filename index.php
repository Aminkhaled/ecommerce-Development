<?php
require_once ('core/init.php');
include ('includes/header.php');
include ('includes/nav.php');
include ('includes/headfull.php');
include ('includes/leftsidebar.php');

  $sql = "SELECT * FROM products WHERE featured = 1";
  global $conn;
  $query = $conn->query($sql);  
?>
        <div class="col-md-8">
            <div class="row">
                <h2 class="text-center">Products Features</h2>
                <?php
                while($product = mysqli_fetch_assoc($query)):
                    $product_title =$product['title'];
                    $product_list_price = $product['list_price'];
                    $product_price =$product['price'];
                    $product_image =$product['image'];
                    $product_discription =$product['discription'];
                    ?>
                <div class="col-md-3">
             
                        <h4><?php echo$product_title?></h4>
                    <img src="<?php echo $product_image?>" alt="<?php echo $product?>">
                    <p class="list-price text-danger">List price: <s>$<?php echo $product_list_price?></s></p>
                    <p class="price">Price: $<?php echo$product_price ?></p>
                    <button class="btn btn-sm btn-success" type="button" data-target="#details-1" data-toggle="modal">Details</button>
                </div>
                <!--col-md-3-->
                <?php endwhile; ?>
            </div>
            <!--second row-->
        </div>
        <!--content-->
            <?php include 'includes/rightsidebar.php'; ?>
    </div>
    <!--row-->
</div>
<!--container fluid-->
<?php
include 'includes/footer.php'
?>
