<?php
session_start();
include 'header.php'; 
if(isset($_SESSION['user_id'])):
    $username = $_SESSION['username'];
?>
<body class="bg-body-tertiary">
<nav class="navbar navbar-expand-lg bg-body-light border-bottom border-primary">
        <code class="container">
            <a class="navbar-brand text-success" href="./"><small><i>Login with Remember Me</i></small></a>
            <div class="text-success d-flex">
            <span class="d-flex bg-info border border-dark justify-content-center align-items-center rounded-circle border py-2 px-3 me-2" ><figure class="text-primary m-0"><b><?= ucwords(substr($username,0,1)); ?></b></figure></span>
            <small class="mt-2"><?= $username ?></small>
            </div>
        </code>
 </nav>

 <div class="ms-4 mt-2 text-primary">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item"><a href="logout.php" class="text-decoration-none text-danger">Logout</a></li>
        </ul>
    </div>

   
</body>
</html>
<?php else:
header('location: index.php');
exit();
endif;
 ?>