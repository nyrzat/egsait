
<?php include 'include/layout/head.php'?>
<?php include 'include/layout/nav.php'?>

<?php include 'confing.php'?>

<div class="container">
<?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            
            $sql = "SELECT * FROM products where id='$id' ";
            $result = mysqli_query($connect, $sql);

            global $reg_user;

            if(isset($_COOKIE['translator_sait'])){
                $reg_user = $_COOKIE['translator_sait'];
            }

            if($result){
                while($row = mysqli_fetch_assoc($result)){ 
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $discription = $row['discription'];

                   ?>
                 
                 <div class="block-info d-flex justify-content-evenly align-items-center">
                    <img  src="../assets/img/oversaiz.jpg" width="300px" alt="oversize">
                    <div class="oversize_info ">
                        <h2><?=  $title ?></h2>
                        <p><?=  $discription ?></p>
                        <h5>цена: <span class="text-danger"><?=  $price ?></span>сом</h5>
                        <a href="clothes_order" class="btn btn-primary">заказать</a>
                    </div>
                    </div>
            <?php }?>
        <?php }?>


</div>


<?php include 'include/layout/footer.php'?>