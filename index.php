<?php
session_start();
include 'header.php'; 
?>
<body class="bg-body-tertiary">

    <nav class="navbar navbar-expand-lg bg-body-light border-bottom border-primary">
        <div class="container">
            <a class="navbar-brand text-success" href="./"><small><i>Login with Remember Me</i></small></a>
            <code class="text-success">
              <small><i>
                <?= date("D, d M Y") ?>
              </i></small>
            </code>
        </div>
    </nav>

    <div class="container-fluid px-5 my-3">
        <div class="col-lg-4 col-md-5 col-sm-12 mx-auto my-5 pt-5" >
            <div class="card rounded shadow text-center">
                <div class="card-body">
                    <div class="container-fluid">
                    <h6 class="text-center text-primary"><small>Welcome 🔹 Login</small></h6>
                    <small class="text-danger"><i>
                        <?= isset($_SESSION['err']) ? $_SESSION['err'] : '' ?>
                        <?php unset($_SESSION['err']) ?>
                    </i></small>
                    <hr>
                        <form action="login.php" method="POST" autocomplete="off">

                            <div class="mb-3">
                                <input  style="box-shadow: none;" type="text" class="form-control form-control-sm rounded-0 text-success" name="username" placeholder="Username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <code class="form-label float-end text-primary">
                                    <a href="./" class="text-decoration-none"><small><i>Forgot Passwprd?</i></small></a>
                                </code>
                                <input  style="box-shadow: none;" type="password" class="form-control form-control-sm rounded-0 text-success" name="password" placeholder="Password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" required autocomplete="off">
                            </div>

                            <div class="mb-3">
                                <div class="form-check text-start">
                                    <input  style="box-shadow: none;" class="form-check-input rounded-0" type="checkbox" name="rem_me" <?= (isset($_COOKIE['username']) && isset($_COOKIE['password'])) ? "checked" : '' ?>>
                                    <label class="form-check-label text-success">
                                        Remember me
                                    </label>
                                </div>
                                <hr>
                            </div>
                      </div>
                  </div>
               
                <div class="text-center">
                    <button class="btn border border-primary text-primary col-lg-4 col-md-6 col-sm-12">Login</button>
                </div>
                </form>
              
                <div class="text-center mb-2 mt-2">
                    <small><i>Don't have account? <a href="./" class="text-decoration-none">Register</a></i></small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>