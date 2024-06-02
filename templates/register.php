<?php
    include_once('./partials/header.php');

?>
        <div class="container">
            <div class="row">
                <div class="col-50">
                <h1>Registration form</h1><br>
                <?php 
                    $email = "";
                    $password = "";
                    $confirm_password = "";
                    if(isset($_POST['user_register'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $confirm_password = $_POST['confirm_password'];
                        if($password === $confirm_password){
                            $user_object = new User();
                            $register_succeeded = $user_object->register($email, $password);
                            if($register_succeeded){
                                header("Location: login.php");
                            }
                            else{
                                echo "<b>Taký použivateľ už existuje</b><br><br>";
                            }
                        }
                        else{
                            echo "<b>Hesla sa nezhoduju</b><br><br>";
                        }
                    
                    }    
                ?>
                <form action="" id="register" method="POST" class="standart-form">
                        <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> EMAIL</label><br>
                          <input type="email" placeholder="Vaš email" id="email" name="email" value="<?= $email?>" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> PASSWORD</label><br>
                          <input type="password" placeholder="Heslo" name="password" value="<?= $password?>" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true" ></i> CONFIRM PASSWORD</label><br>
                          <input type="password" placeholder="Zopakujte heslo" name="confirm_password" value="<?= $confirm_password?>" required><br>
                          <button type="submit" name="user_register" class="btn">Register</button>
                        </form>
                </div>

                <div class="col-50">
                    <img src="../img/login_img.png" alt="Login" class="img-for-empty-space">
                </div>
            </div>
        </div>
    </main>

<?php
    include_once('./partials/footer.php');
?>