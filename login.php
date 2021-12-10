<?php
$conn1=mysqli_connect("localhost", "root", "", "personal_project");

    if (!$conn1) {
        echo "<script>alert('Connection failed.');</script>";
    }





if(isset($_POST['login_user'])){
  
    $email= $_POST['email'];
    $password=$_POST['password'];
    
    $query1= "SELECT * from user_register_details WHERE user_email = '$email'and user_password= '$password'";

    $que = mysqli_query($conn1,$query1); 
    
    $row1 = mysqli_fetch_array($que);

  

  
    //if row1 is not empty 
    if($row1){
         $email= $user_email;
         $password=$user_password;
       
         if($password== $row1['user_password']){
          session_start();
          
          $_SESSION['password'] = $row1['user_password']; 
          header("location: Contact.php");


        }else{
            echo '<script> alert("password is wrong");</script>';
        }


    }else{
        header("location: Contact.php");
       // echo '<script> alert("user not found");</script>'; 
    }
 



    


}

?>