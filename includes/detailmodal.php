<?php
require_once ('../core/init.php')
?>
<?php
$id = $_POST['id'];
$id = (int)$id;

$sql ="Select * from products where id ='$id'";
global $conn;
$result = $conn->query($sql);
$product =mysqli_fetch_assoc($result);
$brand_id = $product['id'];
$query = "SELECT brand FROM brand WHERE id ={$brand_id}";
$brand_query = $conn->query($query);
$brand = mysqli_fetch_assoc($brand_query);
if(!$brand){
    die("Connecton failed".mysqli_error($conn));
}
$sizing = $product['sizes'];
$sizing_array = explode(',',$sizing);

?>

<!--Modal Details-->
<?php ob_start() ?>
<div class="modal fade details-1" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="details-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

    <div class="modal-header">
                <button class="close" type="button" onclick="modalClose()">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center"><?php echo $product['title'] ?></h4>
            </div>
            <!--header-->
            <div class="modal-body">
                <div class="container-fluid">                             
                    <div class="row">
                  
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="img-responsive text-center details">

                            </div>
                        </div>
                        <!--col-sm-6-->

                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>
                                <?php echo $product['discription'] ?>

                            </p>
                            <hr>
                            <p>Price: $<?php echo $product['price'] ?></p>
                            <p>Brand: <?php echo $brand['brand'] ?></p>
                            <form action="add_cart.php">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" id="quantity" class="form-control" name="quantity">
                                    </div>
                                    <!--col-xs-3 -->
                                </div>
                                <!--form-group -->
                                <br>
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label for="size" >Size: </label>
                                        <select class="form-control" name="size" id="size">
                                            <?php
                                            foreach($sizing_array as $string) {
                                                $string_array = explode(":",$string);
                                                $quantity=$string_array[0];
                                                echo '<option value="'.$quantity.'">'.$quantity.'(Available)</option>';
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <!--col-xs-3 -->
                                </div>
                                <!--form-group -->
                            </form>

                        </div>
                        <!--col-sm-6-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>
            <!--modal-body-->
            <div class="modal-footer">
                <button class="btn btn-default" onclick="modalClose()">Cancel</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
            </div>
            <!--modal-footer-->
            <div id="modal-ajax"></div>
        </div>
        <!--modal content-->

    </div>
    <!--modal-dialog-->
</div>
<!--modal main-->
<?php echo ob_get_clean(); ?>

<script>
    function modalClose() {
        $('#detail-modal').modal('hide');
        setTimeout(function () {
            $('#detail-modal').remove();

        },300)
    }
</script>
