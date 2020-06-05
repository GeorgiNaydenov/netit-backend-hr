<?php

namespace controllers;

class EmployerRegistrationController {
    public function indexEmployer() {
        
        if(isset($_POST) && isset($_POST['employer_post_token'])) {
        $username = 
        $_POST['username'];
        
        $email = 
        $_POST['email'];
        
        $password =
        $_POST['password'];
        
        $confirm_your_password = 
        $_POST['confirm_your_password'];
        
        $company_name = 
        $_POST['company'];
        
        $category = 
        $_POST['category'];
        $company_field = 
        $_POST['company_field']; 
        if($password != $confirm_your_password){
            echo '<span style="color:#fa020b;font-size:30px">Моля,погледнете полето за пароли</span>';
            return;
        }
        if(\user\User::employerRegistration($username, $email, $password, $company_name, $category, $company_field)) {
            header("Location:./Registration-Sucess.php");
          
        }
        
        }
    }
}
 