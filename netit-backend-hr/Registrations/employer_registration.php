<?php
    include   './external_autoload.php';
//NB: Dynamic method ???
    (new controllers\EmployerRegistrationController())->indexEmployer();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HR</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body class="home-page-template">
       <div class="container">
        <div id="application-header" class="web-header"> 
                    <h3 class="logo">Регистрация на фирми</h3>
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
                                <label for="email">E-mail:</label> <br>
                <input class="form-control" type="text" name="email" required>
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
                 <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firm_name">Име на фирмата:</label> <br>
                <input class="form-control" type="text" name="firm_name" required>
                            </div>
                        </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-6">
                         <label for="job-category">Категории:</label> <br>
                         <select class="custom-select" id="categories" name="category" required>
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
                        </select>
                     </div>
                 </div>
                 <br>
                 <div class="form-row">
                        <div class="col-md-6">
                            <textarea id="company_activity" class="form-control" placeholder="Дейност на компанията" name="company_area_of_activity"></textarea>
                        </div>
                 </div>

                 <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                        Прочетох и съм съгласен с политиката за поверителност на <a href="terms-of-use.html">данните</a>
                        </label>
                    <div class="invalid-feedback">
                        <span style="color:#red;text-align:center;">Трябва да се съгласите, преди да продължите!</span>
                </div>
                </div>
                </div>
                 <input class="button" type="submit" name="post_submit" value="Регистрирай">
                <input type="hidden" name="employer_post_token" value="1">
             </form>
                 
    </body>
</html>