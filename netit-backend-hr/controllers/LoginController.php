<?php

namespace controllers;

class LoginController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $email      = 
            $_POST['email'];
            $password   = 
            $_POST['password'];
            
            if(\user\User::isAvailable($email, $password)) { 
                
               $userObject = \user\User::login($email, $password); 
               \user\User::set($userObject);
               
              if(\user\User::isRegular()) {
                    header('Location: dashboard.php');
                }
                if(\user\User::isCompany()) {
                    header('Location: admin_jobs.php');
                }
            }
        
            
            \session\Session::setFlashMessage('error_message', 'Моля проверете въведените от Вас имейл и парола');
        }
    }
}