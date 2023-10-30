<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "", "remember_me_db");

if($conn){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where username = '$username' AND password = '$password'";
 $result = mysqli_query($conn, $sql);
 if($result){
  if(mysqli_num_rows($result) > 0){
  while($row= mysqli_fetch_assoc($result)){
    if($row['username'] === $username && $row['password'] === $password){

        foreach($row as $k => $v){
            $_SESSION[$k] = $v;
        }

        //Saving the input data to Cookie
       if(isset($_POST['rem_me'])){
       //Store Login Credential for 30 days
         
        setcookie('username', $_POST['username'], ( time() + (24 * 60 * 60) *30));
        setcookie('password', $_POST['password'], ( time() + (24 * 60 * 60) *30));
    
       }else{
       //Delete Login Credential
         
        setcookie('username', $_POST['username'], ( time() - (24 * 60 * 60)));
        setcookie('password', $_POST['password'], ( time() - (24 * 60 * 60)));
        }


        header('location: home.php');
        exit();
    }else{

        $_SESSION['err'] = 'Incorrect username or password!';
         header('location: index.php');
         exit();
        }

  }
 }
}


}else{
die("Database Connection Failed!");
}








