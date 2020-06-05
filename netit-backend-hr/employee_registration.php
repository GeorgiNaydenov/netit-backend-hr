<?php
    include  './external_autoload.php';
    
    (new controllers\EmployeeRegistrationController.php());
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Monster Roaster</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Styling_5.css">
        
    </head>
    <h1 id = "web-logo-placeholder"><img src="img/MonsterRoaster.png" alt=""> </h1>  
    <body class="home-page-template">
       <div class="container">
        <div id="application-header" class="web-header"> 
                    <h3 class="logo">Регистрация на потребители</h3> <li><a href="http://localhost/netit-backend-hr/index.php">Начална Страница</a></li>
        </div>
       </div>
        <div class="container">
         <div class="wrapper">
             <form method="POST" name="registration">
                 <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Потребителско име:</label> <br>
                                <input class="form-control" type="text" name="username" required>
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Име:</label> <br>
                <input class="form-control" type="text" name="fname">
                            </div>
                        </div>
                 </div>
                  <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Фамилия:</label> <br>
                <input class="form-control" type="text" name="lname">
                            </div>
                        </div>
                 </div>
                  <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="age">Възраст:</label> <br>
                <input class="form-control" type="text" name="age">
                            </div>
                        </div>
                 </div>
                <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">Град:</label> <br>
                <input class="form-control" type="text" name="city">
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="mobile">Телефон:</label> <br>
                <input class="form-control" type="text" name="mobile">
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail:</label> <br>
                <input class="form-control" 
                       type="text" 
                       name="email" requred>
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password">Парола:</label> <br>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="repeat_password">Повторете паролата:</label> <br>
                                <input class="form-control" type="password" name="repeat_password" required>
                            </div>
                        </div>
                 </div> 
                 
                 <input class="button" type="submit" name="post_submit" value="Регистрирай">
                <input type="hidden" name="post_token" value="1">
            </form>
        </div>
        </div>
    </body>
</html>