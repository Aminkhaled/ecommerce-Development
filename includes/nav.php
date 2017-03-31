<?php
$sql = "SELECT * FROM category WHERE parent = 0";

$query = $conn->query($sql);

?>

<!--Top nav-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button class="collapsed navbar-toggle" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Shaunta's Boutique</a>

    </div>
    <!--navbar header-->
    <div class="collapse navbar-collapse">
    
        <ul class="nav navbar-nav">
            <?php

            while ($parent = mysqli_fetch_assoc($query)) :
                $cat_name = $parent['category'];
                ?>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo$cat_name ?><span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <?php
                    
                     $parent_id =$parent['id'];
                     $sql2= "select * from category where parent={$parent_id}";
                    $query2 = $conn->query($sql2);
                    
                     while ($dropdown = mysqli_fetch_assoc($query2)):
                         $parent_name = $dropdown['category'];
                    ?>
                    
                    
                    
                    <li><a href="#"><?php echo  $parent_name?></a></li>
                    <?php endwhile; ?>

                </ul>
                


            </li>
            <?php endwhile; ?>

        </ul>

    </div>
</nav>