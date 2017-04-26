<?php




 if(isset($_GET['b_id'])){
     $b_id = ($_GET['b_id']);
     
     if(isset($_POST['edit'])){
         $cat_name = htmlspecialchars($_POST['category']);
         $parent_name = htmlspecialchars($_POST['parent']);
         $main_sql = "update category set category='$cat_name',parent='$parent_name' WHERE id='$b_id'";
         $update = $conn->query($main_sql);
     }
     
     $sql = "select * from category WHERE id ='$b_id'";
     global $conn;
     $query = $conn->query($sql);

     while ($result = mysqli_fetch_assoc($query)):
         $category = $result['category'];
         $parent =  $result['parent'];

     endwhile;
 }
 
 


?>

<form class="form-horizontal" method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Add Brand</legend>
        <div class="form-group">
            <label class="col-md-4 control-label" for="category">Category</label>
            <div class="col-md-4">
                <input id="name" name="category" value="<?php echo $category ?>"  type="text" placeholder="Brand" class="form-control input-md" required="">

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="parent">Parent</label>
            <div class="col-md-4">
                <input id="name" name="parent" value="<?php echo $parent?>"  type="text" placeholder="Brand" class="form-control input-md" required="">

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