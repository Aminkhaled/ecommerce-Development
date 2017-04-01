<?php ob_start() ?>
<!--Modal Details-->
<div class="modal fade details-1" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="details-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center">levis jeans</h4>
            </div>
            <!--header-->
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="img/products/men4.png" alt="jeans" class="img-responsive text-center details">

                            </div>
                        </div>
                        <!--col-sm-6-->

                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>
                                this is th best offer for you as its so cool and sexy one ....just for you baby.
                                this is th best offer for you as its so cool and sexy one ....just for you baby.
                                this is th best offer for you as its so cool and sexy one ....just for you baby.

                            </p>
                            <hr>
                            <p>Price: $35</p>
                            <p>Brand: Levis</p>

                            <form action="add_cart.php">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" id="quantity" class="form-control" name="quantity">
                                    </div>
                                    <!--col-xs-3 -->
                                    <p>Available: 3</p>
                                </div>
                                <!--form-group -->
                                <br>
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label for="size" >Size: </label>
                                        <select class="form-control" name="size" id="size">
                                            <option value="22">22</option>
                                            <option value="36">36</option>
                                            <option value="21">21</option>
                                            <option value="30">30</option>
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
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>

            </div>

            <!--modal-footer-->
        </div>
        <!--modal content-->
    </div>
    <!--modal-dialog-->
</div>
<!--modal main-->
<?php echo ob_get_clean() ?>