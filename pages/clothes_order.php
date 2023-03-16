<?php include 'include/layout/head.php'?>
<?php include 'include/layout/nav.php'?>

<?php include 'confing.php'?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
?>
<div class="bag-cloth">
<div class="form w-25 mx-auto container ">
    <h2 class="mt-3 mb-3 text-center text-primary" >заказать одежду</h2>
        <form action="" method="POST">
            <div class="mb-3 row">
                <p><label for="staticEmail" class="col-sm-2 col-form-label">адресс</label></p>
                <input type="email" class="form-control" name="email" id="staticEmail" placeholder="введите ваше адрес">
            </div>
            <div class="mb-3 row">
                <p><label for="inputPassword" class="col-sm-2 col-form-label">размер</label></p>
                <input type="name" class="form-control" name="name_razmer" id="inputPassword" placeholder="ваш размер">
            </div>
            <div class="mb-3 row">
                <p><label for="number" class="col-sm-2 col-form-label">номер</label></p>
                <input type="number" class="form-control" name="number" id="number"placeholder="введите ваше номер">
            </div>
            <div class="mb-3 row">
            <label for="city" class="col-form-label">ваш регион</label>
            <select id="city" class="form-select" name="city">
                    <option value="bishkek">Бишкек</option>
                    <option value="osh">Ош</option>
                    <option value="jalal-abad">джалал-абад</option>
                    <option value="karakol">Каракол</option>
                    <option value="kyzyl-kiya">Кызыл-кия </option>
                    <option value="uzgen">Узген</option>
                    <option value="balykchy">Балыкчы</option>
                    <option value="kara-balta">Кара-Балта</option>
                    <option value="naryn">Нарын</option>
                    <option value="talac">Талас</option>
            </select>
            </div>
            <button type="submit" class="btn bg-primary w-100 rounded-pill" name="send">Отправить</button>
        </form>
    </div>
</div>
<?php include 'include/layout/footer.php'?>