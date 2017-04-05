<?php 
if(isset($_POST['add'])){
    $name = $_POST['name'];
    
    $sql = "INSERT into brand (brand) VALUES('$name')";
    global $conn;
    $query_brand = $conn->query($sql);
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
                <input id="name" name="name"  type="text" placeholder="Brand" class="form-control input-md" required="">

            </div>
        </div>
        
        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="anmelden"></label>
            <div class="col-md-8">
                <button id="anmelden" name="add" class="btn btn-success">Add</button>
            </div>
        </div>

    </fieldset>
</form>