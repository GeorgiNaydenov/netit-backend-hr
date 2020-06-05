<?php

namespace controllers;

class EmployeeRegistrationController {
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_token'])) {
        $username = 
        $_POST['username'];
        $email = 
        $_POST['email'];
        $password = 
        $_POST['password'];
        $repeat_password = 
        $_POST['repeat_password'];
        $fname = 
        $_POST['fname'];
        $lname = 
        $_POST['lname'];
        $age = 
        $_POST['age']; 
        $city = 
        $_POST['city']; 
        $mobile = 
        $_POST['mobile'];
        
        if($password != $repeat_password){
            echo '<span style="color:#fa020b;font-size:30px">Паролите не са въведени правилно</span>';
            return;
        } 
        if(\user\User::employeeRegistration
       ($username, $fname, $lname, $age, $city, $mobile, $email, $password)) {
            header("Location:./Registration-Sucess.php");
        }
        }
    }
}


 