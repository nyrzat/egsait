<?php include 'include/layout/head.php'?>
<?php include 'include/layout/nav.php'?>
<div class="bag-cloth">
    <div class="form w-25 mx-auto container">
        <h2 class="mt-3 mb-3 text-center text-primary" >Регистрация</h2>
            <form action="registration_user.php" method="POST">
                <div class="mb-3 row">
                    <p><label for="name" class="col-sm-2 col-form-label">Name</label></p>
                    <input type="text" class="form-control" name="name" id="name" placeholder="введите ваше имя">
                </div>
                <div class="mb-3 row">
                    <p><label for="staticEmail" class="col-sm-2 col-form-label">Email</label></p>
                    <input type="email" class="form-control" name="email" id="staticEmail" placeholder="введите ваше email">
                </div>
                <div class="mb-3 row">
                    <p><label for="inputPassword" class="col-sm-2 col-form-label">Password</label></p>
                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="введите пароль">
                </div>
                <button type="submit" class="btn bg-primary w-100 rounded-pill" name="send">Отправить</button>
            </form>
    </div>
</div>
<?php include 'include/layout/footer.php'?>