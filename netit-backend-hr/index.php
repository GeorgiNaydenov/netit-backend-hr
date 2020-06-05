<?php
include './external_autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content ="ie=edge"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link rel="shortcut icon" type="image/x-icon" href="./intro"> Test out the feature --> 
    <title>Monster Roaster</title>
    
<!--     CSS here    
    <link rel="stylesheet" href="Styles/RESET.css">
    <link rel="stylesheet" href="Styles/Responsive.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="style/public.css">
    <link rel="stylesheet" href="style/admin.css">-->
<link rel="stylesheet" href="Styling.css">
<body>
    
    <!-- Pre-loader Start -->
    <div id ="application-header" class ="web-header">
        <h1 id = "web-logo-placeholder"><img src="img/MonsterRoaster.png" alt=""> </h1>   
      
    </div>

    
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    
                </div>
            </div>
        </div>
  
    </div>

     <div id="admin-placeholder" class="menu-placeholder">
                <ul>
                   <li><a href="http://localhost/netit-backend-hr/logout.php">Log Out</a></li>
                    <li><a href="http://localhost/netit-backend-hr/Job-Publishing.php">Jobs Posting</a></li>
                    <li><a href="http://localhost/netit-backend-hr/Job_Lister.php">Job_Lister</a></li>
       
                    
                </ul>
            </div>     
    
     <div id="public-placeholder" class="menu-placeholder">
                <ul>
                   
                    <li><a href="http://localhost/netit-backend-hr/Login.php">Log in</a></li>
                    <li><a >Sign Up</a></li>
                     <li><a href="http://localhost/netit-backend-hr/index.php">Начална Страница</a></li>
                     <span class="login-roles">
                        <a class="menu_header_sel" href="employer_registration.php">
                        Фирми </a>
                        <span style ="color:#ff9999; font-weight:bold;">
                    </span>
                         
                            <a class="menu_header_sel_2"href="employee_registration.php">
                             Потребитeли  </a>
             <span style ="color:#ff9999; font-weight: bold;"
                    
                </ul>
            </div>   
        </div> 

    </div>
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/client_based.js"></script>
    <script src="scripts/application based/index.js"></script>
</body>