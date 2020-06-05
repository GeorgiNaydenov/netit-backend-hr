<?php     
include './autoload.php';


(new controllers\LoginController())->index();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster Roaster</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
       integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="style/public.css">-->
<link rel="stylesheet" href="Styling_6.css">
    </head>
    <body>
            <h1 id = "web-logo-placeholder"><img src="img/MonsterRoaster.png" alt=""> </h1>       
        <div id="application-header" class="web-header">
            <h1 class="logo">Login</h1>
        </div>
        
        <?php 
            
            if(\session\Session::checkFlashMessage('error_message')) {
                
                echo '<div class="message error">';
                echo \session\Session::getFlashMessage('error_message');
                echo '</div>';                
            }
        ?>        
        
       
        
        <div class="container login">
            <form action="" method="POST" class="form-group">
                <input type="email" 
                       class="form-control"name= "email" 
                       placeholder="Моля,въведете Вашият имейл">
                
                <input type="password" 
                       class="form-control"
                       name="password" 
                       placeholder="Въведете вашата парола">
                
                <input type="hidden"
                       name="post_tokken"
                       value="1">
                
                <input type="submit" 
                       class="btn btn-primary btn-sec" 
                       name="post_submit">
            </form>
        </div>
            
     
        
    </body>
</html>