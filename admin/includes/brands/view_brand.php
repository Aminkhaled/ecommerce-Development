<?php
$sql = "SELECT * FROM brand ORDER BY brand";
global $conn;
$brand_query = $conn->query($sql);

?>
<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">simple editable table</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="edit_datable_1" class="table  table-bordered table-striped m-b-0">
                                <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($brand = mysqli_fetch_assoc($brand_query)):
                                    $brand_name = $brand['brand'];
                                    ?>

                                    <tr>

                                        <td><?php echo $brand_name?></td>
                                        <td><a href="brands.php?source=edit_brands&b_id=<?php echo$brand['id'] ?>"><i class="fa fa-pencil"></i> Edit</a></td>
                                        <td><a href="brands.php?delete=<?php echo$brand['id'] ?>"><i class="icon-trash"></i> Delete</a></td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
<?php
if(isset($_REQUEST['delete'])){
    $delete_id = $_REQUEST['delete'];
    $delete_query ="delete from brand WHERE id={$delete_id}";

    $select_delete = $conn->query($delete_query);

    header('location:../index.php');

}
?>