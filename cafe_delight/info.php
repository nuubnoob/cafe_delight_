<?php
include('connection.php');
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) ){
        $user_name=$_POST['name'];
        $user_email=$_POST['email'];
        $user_phone=$_POST['phone'];
        $user_guests=$_POST['number-guests'];
        $user_date=$_POST['date'];

        $sql="INSERT INTO `customer`(`name`,`email`,`phone`,`number-guests`,`date`) VALUES('$user_name','$user_email','$user_phone','$user_guests','$user_date');";
        $query=mysqli_query($con,$sql);
        header("location:info.php");

    // if($query){
    //     echo "data_sent";
    //     $form_filled=True;
    // }
    }
    // else{
    //     echo "<p style='color:red;top:80;'>fill the form</p>";
    // }
}
