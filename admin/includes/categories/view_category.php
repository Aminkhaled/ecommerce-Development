<?php
 $sql = "SELECT * FROM category where parent = 0";
 global $conn;
$category_query = $conn->query($sql);
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
                                    <th>Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php while ($category= mysqli_fetch_assoc($category_query)):
                                    $category_name = $category['category'];
                                    $category_id = (int)$category['id'];
                                    
                                    $sql2 = "SELECT * FROM category where parent = {$category_id}";
                                    $parent = $conn->query($sql2);
                                    ?>

                                    <tr>

                                        <td class="btn btn-info"><?php echo $category_name?></td>
                                        <td>parent</td>
                                        <td><a href="categories.php?source=edit_brands&b_id=<?php echo$category_id ?>"><i class="fa fa-pencil"></i> Edit</a></td>
                                        <td><a href="categories.php?delete=<?php echo$category_id ?>"><i class="icon-trash"></i> Delete</a></td>
                                    </tr>

                                    <?php while ($child =mysqli_fetch_assoc($parent)): 
                                    
                                    ?>
                                    <tr>

                                        <td><?php echo $child['category']?></td>
                                        <td><?php echo $category_name?></td>
                                        <td><a href="categories.php?source=edit_brands&b_id=<?php echo $child['id'] ?>"><i class="fa fa-pencil"></i> Edit</a></td>
                                        <td><a href="categories.php?delete=<?php echo $child['id'] ?>"><i class="icon-trash"></i> Delete</a></td>
                                    </tr>


                                <?php endwhile ?>

                                <?php endwhile ?>
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
    $delete_query ="delete from category WHERE id={$delete_id}";

    $select_delete = $conn->query($delete_query);
    header('location:../index.php');

}
?>