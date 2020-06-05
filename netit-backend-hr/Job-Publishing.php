<?php 
include './external_autoload.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monster Roaster</title> <li><a href="http://localhost/netit-backend-hr/index.php">Начална Страница</a></li>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
                               integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
                               crossorigin="anonymous">

        <link rel="stylesheet" href="Styling_3.css">
    </head>
    <body class="home-page-template">
        <div id ="application-header" class ="web-header">
        <h1 id = "web-logo-placeholder"><img src="img/MonsterRoaster.png" alt=""> </h1>
       <div class="container">
        <div id="job-publish-header" class="web-header"> 
                    <h3 class="logo">Въвеждане на обява</h3>
                    <div id="job-publish-placeholder">
                        <ul>
                            <li><a href="http://localhost/netit-backend-hr/index.php?index">Начална страница</a></li>
                            <li>Добави обява</li>
                            <li> <a href="job-listings.php" 
                                    class="edit-post-link">Редактирай обява</a></li>
                        </ul>
                    </div>
        </div>
       </div>
        <div class="container">
           <div id="publish-editor">
               <form method="POST" name="job-publish-editor">
                   <input type="text" class="form-control" id="job-title" placeholder="Заглавие" name="job-title" required> <br> <br>
                   <textarea id="job-content" class="form-control" placeholder="Съдържание" name="job-content" required></textarea> <br>
                   <label for="job-category">Категории:</label> <br>
                       <select id="inputState" class="form-control" name="categories">
                            <option selected>Изберете сферата на работа...</option>
                            <option value="Advertising-PR">Реклама - PR</option>
                            <option value ="Accounting">Счетоводство</option>
                            <option value ="Business,Consulting services">Бизнес, Консулатнски умения</option>
                            <option value ="Banking">Банково дело и Финанси</option>
                            <option value ="Call Centers">Контакт центрове</option>
                            <option value ="Sports,Massage Therapy,Rehabilitation">Спорт, Кинезитерапия, Рехабилитация</option>
                            <option value="Engineers">Инженери</option>
                            <option value="Insurance">Застраховки</option>
                            <option value="IT-administarion-and-sales">ИТ - Административни дейност и продажби</option>
                            <option value="IT-hardware-design">ИТ - Разработка на хардуер</option>
                            <option value="IT-software-development">ИТ - Разработка на софтуер</option>
                            <option value="Management">Мениджмънт</option>
                            <option value="Marketing">Маркетинг</option>
                            <option value="Media-publishing">Медии - Издателство</option>
                            <option value ="Millitary">Армия</option>
                        </select> <br> <br>
                   <input type="submit" class="button" name="job-publish-submit" value="Въведи">
                   <input type="hidden" name="post_token" value="1">  
               </form>
           </div>
           </div>
       
    </body>
</html>