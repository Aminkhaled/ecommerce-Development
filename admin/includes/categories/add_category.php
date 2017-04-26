<?php
if(isset($_POST['add'])){
    $parent = htmlspecialchars($_POST['parent']);
    $category = htmlspecialchars($_POST['name']);
    $errors = [];
    $sqlform = "select * from category WHERE category = '$category' AND parent='$parent'";
    $result = $conn->query($sqlform);
    $count = mysqli_num_rows($result);
    
    if ($category == ''){
        $errors[] .='This Category not be left blank';
    }
    
    if($count > 0){
        $errors[] .= $category."has already exist,please choose another name";
    }
    
    if(!empty($errors)){
        $display = display_errors($errors);
        echo "
        <script>
        $('document').ready(function() {
          $('#errors').html('$display');
        });
</script>
   <div id=\"errors\" class=\"alert alert-success\"></div>

        ";
    }else{
        $insert_to_data = "insert into category(category,parent) VALUES('$category','$parent') ";
        $query = $conn->query($insert_to_data);
    }
    
}


?>

<form class="form-horizontal"  method="post" >
    <fieldset>

        <!-- Form Name -->
        <legend>Add Brand</legend>
        <div class="form-group">
            <label class="col-md-4 control-label" for="main"></label>
            <div class="col-md-4">
                <select name="parent" id="main" class="form-control">
                    <option value="parent">Parent</option>
                    <?php
                         $sql = "select * from category WHERE parent = 0 ";
                         global $conn;
                         
                         $result = mysqli_query($conn,$sql);
                         while ($parento =mysqli_fetch_assoc($result)):
                             $parent_id = $parento['id'];
                              $cat_name = $parento['category'];
                          echo "<option value='$parent_id'>$cat_name</option>";
                         endwhile;
                    ?>
                </select>
            </div>
        </div>
        
        
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Child Category</label>
            <div class="col-md-4">
                <input id="name" name="name"  type="text" placeholder="child category" class="form-control input-md" required="">

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