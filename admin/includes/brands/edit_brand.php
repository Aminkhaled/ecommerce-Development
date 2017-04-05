<?php
if(isset($_GET['b_id'])) {

    $b_id = $_GET['b_id'];

    $sql = "SELECT * FROM brand ORDER BY brand";
    global $conn;
    $brand_query = $conn->query($sql);
    while ($brand = mysqli_fetch_assoc($brand_query)) {
        $brand_name = $brand['brand'];
    }
    
    if (isset($_POST['edit'])){
        $name = $_POST['name'];
        $sql_update = "update brand set brand ='$name' WHERE id ='$b_id'";
        $query_update = $conn->query($sql_update);
        header('Location:brands.php');
    }

}
?>

<form class="form-horizontal" method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Add Brand</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Brand</label>
            <div class="col-md-4">
                <input id="name" name="name" value="<?php echo$brand_name?>"  type="text" placeholder="Brand" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="anmelden"></label>
            <div class="col-md-8">
                <button id="anmelden" name="edit" class="btn btn-success">Edit</button>
            </div>
        </div>

    </fieldset>
</form>