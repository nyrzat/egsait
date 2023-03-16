
<?php include 'include/layout/head.php'?>
<?php include 'include/layout/nav.php'?>
<?php include 'confing.php'?>
<div class="bg">
<div class="container mt-5 ">
    <div class="row justify-content-between ">
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
            $sql = "SELECT * FROM `products`  ";
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
                    $categories = $row['categories'];

                     

                   ?>
                 
                <div class="card mb-3" style="width: 18rem;">
                    <img src="../assets/img/highlitre.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?=  $title ?></h3>
                        <p class="card-title"> <?=  $discription ?></p>
                        <p class="card-title text-danger"> <?=  $price ?>c</p>
                        <h5 class="card-price"><?=  $categories ?></h5>
                        <a href="oversize?id=<?=$id?>" class="btn btn-primary">Подробнее</a>
                        </div>
                </div>
            <?php }?>
        <?php }?>
    
    </div>
</div>
</div>




<?php include 'include/layout/footer.php'?>