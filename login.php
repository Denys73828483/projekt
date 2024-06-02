<?php include_once('templates/header.php')?>

<div class="container">
            <div class="row">
                <div class="col-50">
                <h1>Sign in your account</h1>
                <h4>or <a href="./register.php" style="text-decoration: none;">register</a> if you don't have one</h4> <br>
                <?php
                    $email="";
                    $password="";
                            if(isset($_POST['user_login'])){
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $user_object = new User();
                                $user_object->login($email, $password);
                            }
                        ?>
                <form action="" method="POST" class="standart-form">
                        <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i>Vas email</label><br>
                          <input type="email" placeholder="Vaš email" name="email" value="<?= $email?>" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i>Vas password</label><br>
                          <input type="password" placeholder="Heslo" name="password" value="<?= $password?>" required><br>
                          <button type="submit" name="user_login" class="btn">Login</button>
                        </form>
                        
                </div>
                <div class="col-50">
                    <img src="../img/login_img.png" alt="Login" class="img-for-empty-space">
                </div>
            </div>
        </div>
    </main>