<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hello! </title>
    <link rel="shortcut icon" href="media/icon5.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/match.css">

</head>

<body>

<!-- Место над хедером -->
<div class="container" id="pre_header"></div>

<!-- Хедер если залогинен -->
<?php if(isset($_SESSION['logged_user'])) : ?>
    <nav class="navbar navbar-expand-lg navbar-light col-12" id="head">
        <div class="container">
            <div class="navbar-brand">
                <img src="media/logo.png" id="logo">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">

                        <div class="elems_in_header"> <a class="link" href="#" id="support_in_header" data-toggle="modal" data-target="#modal_contact"> Техподдержка </a> </div>

                    </li>

                    <li class="nav-item">

                        <div class="elems_in_header">
                            <i class="ion-ios-help-outline"> </i>
                            <a class="link" href="#" data-toggle="modal" data-target="#modal_FAQ"> FAQ </a>
                        </div>

                    </li>

                    <li class="nav-item">

                        <div class="elems_in_header">
                            <div class="row" id="div_hello">

                                <a href="#" id="a_messages"> <img src="media/messages.png" id="messages"> <span class="badge">4</span> </a>
                                <div id="hello"> Добрый день, Login! </div>

                            </div>

                        </div>

                    </li>

                    <li class="nav-item">

                        <div class="row" id="balance_and_other">

                            <div id="balance"> Баланс: <span> 100 </span> <img src="media/snowflake.png" id="snowflake" class="text-center"> </div>

                            <div class="column">
                                <div class="row" id="btn_other_in_header">

                                    <button id="btn_input_money"> Внести </button>

                                    <div class="dropdown show" id="dropdown">

                                        <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btn_other_actions"> Мой профиль </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"> История ставок </a>
                                            <a class="dropdown-item" href="#"> Депозит </a>
                                            <a class="dropdown-item" href="#"> Вывести </a>
                                            <a class="dropdown-item" href="#"> Настройки </a>
                                            <a class="dropdown-item" href="#"> Выход </a>
                                        </div>

                                    </div>

                                </div>
                                <div class="text-right column" id="choose_game">

                                    <div id="games">
                                        <a href="#" id="csgo"><img src="media/csgo_logo.png"></a>
                                        <a href="#" id="dota2"><img src="media/dota_logo.png"></a>
                                    </div>
                                    <button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btn_choose_game"> Выбрать игру </button>

                                </div>
                            </div>

                        </div>

                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- Хедер если не залогинен -->
<?php else : ?>
    <nav class="navbar navbar-expand-lg navbar-light col-12" id="head">
        <div class="container">
            <div class="navbar-brand">
                <img src="media/logo.png" id="logo">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">

                        <div id="support"> <a class="link" href="#" id="support_in_header" data-toggle="modal" data-target="#modal_contact"> Техподдержка </a> </div>

                    </li>

                    <li class="nav-item ml-lg-2">

                        <i class="ion-ios-help-outline"> </i>
                        <a class="link" href="#" data-toggle="modal" data-target="#modal_FAQ"> FAQ </a>

                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">

                    <div class="column">
                        <div id="form_login">
                            <div class="container" id="login_error">Неправильный логин или пароль</div>
                            <input class="form-control mb-2 mb-sm-0" type="text" placeholder="Логин" name="login" id="input1">
                            <input class="form-control" type="password" placeholder="Пароль" name="password" id="input2">
                            <div class="container"> <a id="fargot_password" href="#" data-toggle="modal" data-target="#modal_fargot_password"> Забыли пароль? </a> </div>
                        </div>
                        <div class="text-right column" id="choose_game_index">

                            <div id="games_index">
                                <a href="#" id="csgo"><img src="media/csgo_logo.png"></a>
                                <a href="#" id="dota2"><img src="media/dota_logo.png"></a>
                            </div>
                            <button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btn_choose_game_index"> Выбрать игру </button>

                        </div>
                    </div>
                    <button class="ml-2 ml-lg-0 my-2 my-sm-0 mr-lg-2" id="btn_login">Войти</button>

                </form>
                <button class="btn my-2 my-sm-0" id="btn_registration" data-toggle="modal" data-target="#modal_registration">Регистрация</button>

            </div>
        </div>
    </nav>
<?php endif; ?>

<!--ajax скрипт-->
<script type="text/javascript" src="./js/ajax-login.js"></script>

<!-- Сам сайт -->
<main class="container-fluid">

    <div class="container col-12" id="prebets">


    </div>

    <div class="row mt-2" style="margin: 0;" id="main">

        <div class="col-0 col-sm-1 col-lg-2"></div>

        <div class="col-12 col-sm-10 col-lg-8 row" id="bets">
            <div class="col-6 column" id="l_bet">

                <div class="bet">
                    <div class="column">
                        <div class="l_logo">
                            <a href="#"><img src="media/mouslogo.png"></a>
                        </div>
                        <div class="l_team_name">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="column">
                        <p> ESL Pro League </p>
                        <p> <ion-icon name="time"></ion-icon> 1:08:59</p>
                        <div class="row coef_bet">
                            <a href="#" class="l_team_coef">3.26</a>
                            <div></div>
                            <a href="#" class="r_team_coef">1.56</a>
                        </div>
                        <p>BO3</p>
                    </div>
                    <div class="column">
                        <div class="r_logo">
                            <a href="#"><img src="media/fnaticlogo.png"></a>
                        </div>
                        <div class="r_team_name">
                            <a href="#"> </a>
                        </div>
                    </div>
                </div>

                <div class="bet">
                    <div class="column">
                        <div class="l_logo">
                            <a href="#"><img src="media/mouslogo.png"></a>
                        </div>
                        <div class="l_team_name">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="column">
                        <p> ESL Pro League </p>
                        <p> <ion-icon name="time"></ion-icon> 1:08:59</p>
                        <div class="row coef_bet">
                            <a href="#" class="l_team_coef">3.26</a>
                            <div></div>
                            <a href="#" class="r_team_coef">1.56</a>
                        </div>
                        <p>BO3</p>
                    </div>
                    <div class="column">
                        <div class="r_logo">
                            <a href="#"><img src="media/fnaticlogo.png"></a>
                        </div>
                        <div class="r_team_name">
                            <a href="#"> </a>
                        </div>
                    </div>
                </div>

                <div class="bet">
                    <div class="column">
                        <div class="l_logo">
                            <a href="#"><img src="media/mouslogo.png"></a>
                        </div>
                        <div class="l_team_name">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="column">
                        <p> ESL Pro League </p>
                        <p> <ion-icon name="time"></ion-icon> 1:08:59</p>
                        <div class="row coef_bet">
                            <a href="#" class="l_team_coef">3.26</a>
                            <div></div>
                            <a href="#" class="r_team_coef">1.56</a>
                        </div>
                        <p>BO3</p>
                    </div>
                    <div class="column">
                        <div class="r_logo">
                            <a href="#"><img src="media/fnaticlogo.png"></a>
                        </div>
                        <div class="r_team_name">
                            <a href="#"> </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 column" id="r_bet">

                <div id="bets_name">
                    <h1>LIVE</h1>
                    <p>games now</p>
                </div>

                <div class="bet">
                    <div class="column">
                        <div class="l_logo">
                            <a href="#"><img src="media/mouslogo.png"></a>
                        </div>
                        <div class="l_team_name">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="column">
                        <p> ESL Pro League </p>
                        <p> <ion-icon name="time"></ion-icon> 1:08:59</p>
                        <div class="row coef_bet">
                            <a href="#" class="l_team_coef">3.26</a>
                            <div></div>
                            <a href="#" class="r_team_coef">1.56</a>
                        </div>
                        <p>BO3</p>
                    </div>
                    <div class="column">
                        <div class="r_logo">
                            <a href="#"><img src="media/fnaticlogo.png"></a>
                        </div>
                        <div class="r_team_name">
                            <a href="#"> </a>
                        </div>
                    </div>
                </div>

                <div class="bet">
                    <div class="column">
                        <div class="l_logo">
                            <a href="#"><img src="media/mouslogo.png"></a>
                        </div>
                        <div class="l_team_name">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="column">
                        <p> ESL Pro League </p>
                        <p> <ion-icon name="time"></ion-icon> 1:08:59</p>
                        <div class="row coef_bet">
                            <a href="#" class="l_team_coef">3.26</a>
                            <div></div>
                            <a href="#" class="r_team_coef">1.56</a>
                        </div>
                        <p>BO3</p>
                    </div>
                    <div class="column">
                        <div class="r_logo">
                            <a href="#"><img src="media/fnaticlogo.png"></a>
                        </div>
                        <div class="r_team_name">
                            <a href="#"> </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="col-0 col-sm-1 col-lg-2"></div>

    </div>

</main>

<!-- Футер -->
<footer class="container-fluid">

    <!-- Шапка футера -->
    <div class="container-fluid" id="footer_header"> </div>

    <!-- Тело футера -->
    <div class="row" id="footer_main">

        <div class="container col-6 col-md-4 mb-2 mb-md-0" id="social_in_footer">

            <h4 class="text_in_footer"> Соцальные сети </h4>

        </div>

        <div class="container ml-0 mb-2 mb-md-0 col-6 col-md-4" id="information_in_footer">

            <div class="text-center">

                <h4 class="text_in_footer"> Информация </h4>
                <a href="#" class="link_in_footer" data-toggle="modal" data-target="#modal_confidentiality"> Конфеденциальность </a> <br/>
                <a href="#" class="link_in_footer" data-toggle="modal" data-target="#modal_agreement" id="a_rules_of_service"> Правила сервиса </a>

            </div>

        </div>

        <div class="container col-12 col-md-4" id="contact_with_administration">

            <div class="text-center">

                <h6 class="text_in_footer" id="label_btn_contact"> Возникла проблема или <br/> есть о чем сообщить? </h6>
                <button id="btn_contact" data-toggle="modal" data-target="#modal_contact"> Напиши нам! </button>

            </div>

        </div>

    </div>

    <!-- Подвал футера -->
    <div class="container-fluid" id="footer_footer">
        <div class="text-center" id="copyright">
            &#169 Copyright Все права защищены.
        </div>
    </div>

</footer>

<!-- Модальное окно регистрации -->
<div class="modal fade" id="modal_registration" tabindex="-1" role="dialog" aria-labelledby="form_registration"
     aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <div class="col-12 text-center mt-2 mb-2" id="text_registration"> Регистрация</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        id="close_modal_registration">
                    <p aria-hidden="true"><i class="ion-close-round"> </i></p>
                </button>

            </div>

            <div class="modal-body" id="modal_body_regestration">

                <form id="form_registration">

                    <div class="coloumn">

                        <label id="error_login_registration" class="col-12 text-center"></label>

                        <input type="text" name="login_registration"
                               class="form-control col-md-9 ml-auto mr-auto text-center" id="login_registration"
                               placeholder="Ваш никнейм">

                        <p class="col-12 text-center display_none" id="error_login_php">Такой login уже
                            зарегестрирован</p>

                    </div>

                    <div class="coloumn">

                        <label id="error_email_registration" class="col-12 text-center"></label>

                        <input type="email" name="email_registration"
                               class="form-control col-md-9 ml-auto mr-auto text-center mt-3" id="email_registration"
                               placeholder="Ваш Email">

                        <p id="error_email_php" class="col-12 text-center display_none">Такой email уже
                            зарегестрирован</p>

                    </div>

                    <div class="coloumn">

                        <input type="password" name="password_registration"
                               class="form-control col-md-9 ml-auto mr-auto text-center mt-4" id="password_registration"
                               placeholder="Пароль">

                    </div>

                    <div class="coloumn">

                        <input type="password" id="repeatpassword_registration" name="repeatpassword_registration"
                               class="form-control col-md-9 ml-auto mr-auto text-center mt-4"
                               placeholder="Повторите пароль">

                    </div>

                    <div class="container" id="reCaptcha">


                    </div>

                    <div class="col-12 text-center">

                        <input type="checkbox" name="check_read_agreement" id="check_read_agreement" class="mt-2">
                        <label id="label_check_read_agreement" class="form-check-label" for="check_read_agreement"> Я
                            прочитал условия <a href="#" id="a_agreement" data-toggle="modal"
                                                data-target="#modal_agreement"> соглашения </a> </label>

                    </div>
                    <p id="success_reg" class="display_none">Вы успешно зарегистрированны</p>

            </div>

            <div class="modal-footer">

                <div class="mr-auto ml-auto">
                    <button id="btn_end_registration" type="button"> Зарегестрироваться</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="./js/ajax-signup.js"></script>
<!-- Модальое окно связи с администрацией -->
<div class="modal fade" id="modal_contact" tabindex="-1" role="dialog" aria-labelledby="form_contact" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <img src="media/logo.png" id="logo_in_modalregistration">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal">
                    <span aria-hidden="true"><i class="ion-close-round"> </i></span>
                </button>

            </div>

            <div class="modal-body" id="body_modal_contact">

                <form id="contact_form">

                    <div class="form-group row">
                        <label for="email_contact" class="col-sm-2 col-1 ml-2 font-weight-bold"> Email </label>
                        <div class="col-sm-6">
                            <input type="email" name="email_contact" class="form-control" id="email_contact" placeholder="Email"  aria-describedby="help_login">
                            <small id="help_email_contact"></small>
                        </div>
                    </div>

                    <div class="form-groups">
                        <label for="topic_of_problem" class="col-12 font-weight-bold"> 1) Выберите одну из тем: </label>
                        <div class="col-sm-10 mb-2">
                            <select class="form-control" id="topic_of_problem">
                                <option>Проблема с выводом средств</option>
                                <option>Ставка прошла, а средства не зачислились</option>
                                <option>Проблема с пополнение кошелька</option>
                                <option>Другое</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-groups" id="div_other_topic">
                        <label for="other_topic" class="col-sm-6 col-1 ml-2 font-weight-bold"> Введите тему обращения </label>
                        <div class="col-sm-8">
                            <input type="text" name="other_topic" class="form-control" id="other_topic" placeholder="Другая тема"  aria-describedby="help_login">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="i_read_faq" class="ml-3 font-weight-bold"> 2) Я полностью прочитал(а) <a href="#" data-toggle="modal" data-target="#modal_FAQ">FAQ</a> и не нашел(а) описание своей проблемы <input type="checkbox" name="i_read_faq" id="i_read_faq"> </label>
                    </div>

                    <div class="form-group">

                        <label for="textarea_for_contact" class="col-12 font-weight-bold text-center"> Ваше сообщение нам </label>
                        <div class="col-sm-12">
                            <textarea id="textarea_for_contact"></textarea>
                        </div>

                    </div>

            </div>

            <div class="modal-footer">

                <div class="mr-auto ml-auto"> <button id="btn_end_contact"> Отправить </button> </div>

            </div>
            </form>
        </div>
    </div>
</div>

<!-- Модальое окно "Забыл пароль" -->


<!-- Модальое окно FAQ -->
<div class="modal fade" id="modal_FAQ" tabindex="-1" role="dialog" aria-labelledby="FAQ" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header" id="head_FAQ">

                <img src="media/logo.png" id="logo_in_modalregistration">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal">
                    <span aria-hidden="true"><i class="ion-close-round"> </i></span>
                </button>

            </div>

            <div class="modal-body" id="body_FAQ">

                <div class="container" id="icons">



                </div>

                <div class="container">

                    <h4 class="headers_in_FAQ"> О проекте FROSTBETS.COM </h4>
                    <p class="text_in_FAQ"> Сайт представляет собой биржу ставок, на которой любой игрок играет против других игроков и может поставить условные единицы “Снежинки” <img src="media/snowflake.png" id="snowflake" class="text-center"> на победу одной из двух команд. Если вы разбираетесь в Counter-Strike: Global Offensive и можете предсказывать результаты матчей, то наш сайт предоставляет Вам прекрасный способ заработать на своих знаниях и опыте по Counter-Strike: Global Offensive. </p>

                </div>

                <div class="container">

                    <h4 class="headers_in_FAQ"> Часто задаваемые вопросы </h4>
                    <h5 class="headers_in_FAQ"> Как это работает? </h5>
                    <div class="row">

                        <div class="col-6 col-md-4">

                            <img src="media/1.png" class="numbers_in_FAQ">
                            <div class="text_numbers">
                                <p class="text_in_FAQ"> Вы можете выбрать любой удобный способ пополнения. Пополняя счёт вам зачисляются виртуальная валюта “Снежинки” <br/>
                                    1 RUB = 1 <img src="media/snowflake.png" id="snowflake" class="text-center">
                                </p>
                            </div>

                        </div>

                        <div class="col-6 col-md-4">

                            <img src="media/2.png" class="numbers_in_FAQ">
                            <div class="text_numbers"> <p class="text_in_FAQ"> Выбираем матч между двумя командами на главной странице. </p> </div>

                        </div>

                        <div class="col-6 col-md-4">

                            <img src="media/3.png" class="numbers_in_FAQ">
                            <div class="text_numbers"> <p class="text_in_FAQ"> Нажимаем на название или логтип команды на которую хотим поставить, и делаем на нее ставку. Можно поставить любое количество <img src="media/snowflake.png" id="snowflake" class="text-center"> на эту команду. </p> </div>

                        </div>

                        <div class="col-6 col-md-4">

                            <img src="media/4.png" class="numbers_in_FAQ">
                            <div class="text_numbers"> <p class="text_in_FAQ"> Дожидаемся конца матча и  узнаем результат на странице ставки. </p> </div>

                        </div>

                        <div class="col-6 col-md-4">

                            <img src="media/5.png" class="numbers_in_FAQ">
                            <div class="text_numbers"> <p class="text_in_FAQ"> Система делит “Снежинки” <img src="media/snowflake.png" id="snowflake" class="text-center"> , поставленные на проигравшую команду, между людьми, поставившими на победившую команду, пропорционально сделанным ими ставками. </p> </div>

                        </div>

                        <div class="col-6 col-md-4">

                            <img src="media/6.png" class="numbers_in_FAQ">
                            <div class="text_numbers"> <p class="text_in_FAQ"> Система удерживает комиссию n% с каждого выигрыша. После завершения матча вы можете перевести “Снежинки” <img src="media/snowflake.png" id="snowflake" class="text-center"> в валюту и забрать банк </p> </div>

                        </div>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Конфидециальность </h5>
                        <p class="text_in_FAQ"> Мы не храним какие-либо данные о пользователях, кроме логина и пароля от сайта FROSTBETS.COM. Ваш аватар и никнейм доступен каждому пользователю. FROSTBETS.COM не является аффилированным лицом компании VALVE и Counter-Strike:Global Offensive </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Виртуальная валюта не была зачислена </h5>
                        <p class="text_in_FAQ"> Валюта на счет поступает почти мгновенно, после оплаты. В редких случаях возможны задержки со стороны платежной системы. Не стоит беспокоиться, баланс обязательно поступит. Если через 24 часа Вы так и не получили “Снежинки” <img src="media/snowflake.png" id="snowflake" class="text-center"> на счёт, то стоит обратиться в поддержку сайта, Мы обязательно Вам поможем! </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Деньги не пришли на счёт после вывода </h5>
                        <p class="text_in_FAQ"> Процесс обработки заявки на вывод обычно занимает менее часа, но в некоторых ситуациях может занять до 	3 рабочих дней. Вывод производится на кошелёк WebMoney, QIWI, Яндекс.Деньги, Visa или MasterCard. 		Вывод на другие платёжные системы не производится. </p>

                        <p class="text_in_FAQ" style="text-align: center;"> ! В случае указания неправильного номера кошелька средства не возвращаются. ! </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Поставил ставку по ошибке, что делать? </h5>
                        <p class="text_in_FAQ"> Отмена ставок невозможна по техническим причинам. Пользователи влияют на коэффициенты, которые генерируются после каждой сделанной ставки. Возможны переносы игр: как на время раньше, так и позже, будьте внимательны. </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Как работают коэффициенты? </h5>
                        <p class="text_in_FAQ"> Коэффициент - числовой множитель, используемый при выплате выигрышной ставки. При ставке 200 <img src="media/snowflake.png" id="snowflake" class="text-center"> на коэффициент 2.000, в случае выигрыша вы получите 400 (которые включают в себя сумму ставки) </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Что такое “Снежинки” <img src="media/snowflake.png" id="snowflake" class="text-center"> ? </h5>
                        <p class="text_in_FAQ"> Снежинки <img src="media/snowflake.png" id="snowflake" class="text-center"> - это виртуальная игровая валюта не имеющая физической ценности. </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Ко мне в Steam / VK добавился Модератор / Администратор сайта, что делать в таком случае? </h5>
                        <p class="text_in_FAQ"> Это мошенник, будьте бдительны и не попадитесь на их уловки! <strong> МЫ НЕ ДОБАВЛЯЕМ В СТИМЕ! ЭТО ВСЕ ОБМАН! У ВАС УКРАДУТ ВАШИ ПРЕДМЕТЫ / ДЕНЬГИ! </strong> У нас нет НИКАКИХ работников в Стиме. Единственное и правильное решение в таком случае, заблокировать мошенника </p>

                    </div>

                    <div class="container">

                        <h5 class="headers_in_FAQ"> Как работает служба поддержки? Как долго ждать ответ? </h5>
                        <p class="text_in_FAQ"> Наша служба поддержки работает круглосуточно. Если Вам нужна помощь – сформируйте соответсвующий запрос на странице ТЕХ.ПОДДЕРЖКИ. Как правило, мы отвечаем в течении 60 минут, но возможны более 	длительные сроки из-за большой очереди обращений, выходных или праздничных дней. </p>

                    </div>

                    <div class="container">

                        <h4 class="headers_in_FAQ"> <strong> Если Вы не нашли ответа на свой вопрос, то напишите в службу поддержки сайта, Вам обязательно помогут! </strong> </h4>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- Соглашение -->
<div class="modal fade" id="modal_agreement" tabindex="-1" role="dialog" aria-labelledby="agreement" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <div class="col-12 text-center" id="text_agreement"> Соглашение </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal_registration">
                    <span aria-hidden="true"><i class="ion-close-round"> </i></span>
                </button>

            </div>

            <div class="modal-body" id="modal_body_agreement">

                <div class="container">

                    <p> Сайт <u> frostbets.com</u> с одной стороны, и лицо, акцептовавшее оферту, размещенную в сети Интернет по постоянному адресу <u> https://frostbets.com</u>, с другой стороны, заключили настоящее пользовательское соглашение о нижеследующем. </p>

                </div>

                <div class="container">

                    <h5 class="headers_in_FAQ"> <img src="media/1.png" class="numbers_in_FAQ"> Термины и определения </h5>
                    <p> В настоящем пользовательском соглашении, если из текста прямо не вытекает иное, следующие термины будут иметь указанные ниже значения: </p>
                    <p> <strong> «Администрация» </strong> - создатели или руководители сайта. </p>
                    <p> <strong> «Пользователь» </strong> - Дееспособное физическое лицо, заключившее Соглашение. </p>
                    <p> <strong> «Сайт» </strong> - Совокупность информации, текстов, графических элементов, дизайна, изображений, фото и видеоматериалов, программ для ЭВМ, иных результатов интеллектуальной деятельности, доступных в сети интернет по доменному адресу <u> https://frostbets.com</u> </p>
                    <p> <strong> «Соглашение» </strong> - Настоящее пользовательское соглашение. </p>
                    <p> <strong> «Виртуальная валюта» </strong> - совокупность цифровых данных не имеющая материальной ценности и располагаемая на серверах <u> frostbets.com</u> </p>
                    <p> <strong> «Снежинки» <img src="media/snowflake.png" id="snowflake" class="text-center"> </strong> - виртуальная игровая валюта используемая на сайте и не имеющая материальной ценности. </p>
                    <p> <strong> «Депозит» </strong> - конвертация денежных средств в Снежинки <img src="media/snowflake.png" id="snowflake" class="text-center">. </p>
                    <p> <strong> «Ставка» </strong> - электронный документ, формируемый с помощью сервисов Сайта по указанию Пользователя, совершенным им на Сайте по средством специальных программных команд. Указанный электронный документ – Ставка – служит целям оформления/фиксации участия Пользователя, совершившего конкретную Ставку, в том или ином Раунде развлекательных безрисковых игр на Сайте. </p>

                </div>

                <div class="container" id="rules_of_service">

                    <h5 class="headers_in_FAQ"> <img src="media/2.png" class="numbers_in_FAQ"> Общие условия </h5>
                    <p> Регистрируясь на сайте <u>froatbets.com</u> вы автоматически соглашаетесь с условиями пользования сайтом, а так же подтверждаете что вам как-минимум <strong> 18 </strong> полных лет: </p>
                    <p> 1. Администрация имеем право изменять условия по различным причинам, в том числе коммерческим или техническим, информируя Пользователя обо всех поправках, изменениях и дополнениях. Пользователь несет ответственность за ознакомление с условиями пользования сайтом. Администрация может изменять условия в любое время без предварительного оповещения пользователя. </p>
                    <p> 2. Запрещены любые мошеннические действия, злоупотребление функциями Сайта, попытки заблуждения Администрации. В случае обнаружения подобного, Администрация сайта имеет право заморозить счет, заблокировать Профиль Пользователя на неопределенный срок, прекратить предоставлять услуги (блокировка доступа в техподдержку, отключение от партнерской программы и др). </p>
                    <p> 3. Любые вопросы касательно сайта Пользователь может задать в разделетех.поддержки. </p>
                    <p> 4. Мы не одобряем создание нескольких аккаунтов (мульти-аккаунты) и в случае обнаружения создания Пользователем мультиаккаунтов с целью злоупотребления бонусной системой и прочими функциями, Администрация имеет право заблокировать все аккаунты Пользователя. </p>
                    <p> 5. <u>Frostbets.com</u> не стремится предоставить Пользователю услуги, нарушающие законодательство государства, гражданином которого он является. Регистрируясь на сайте, Пользователь подтверждает, что использование сайта не противоречит законодательству, действующему на территории государства, гражданином которого он является. </p>
                    <p> 6. В некоторых исключительных случаях Администрация сайта имеет право заморозить счет Пользователя в связи с подозрением о взломе или мошенничестве, в таком случае Пользователь должен обратиться в тех.поддержку. </p>
                    <p> 7. В случае ошибочного получения Снежинок сверх денежных средств, внесенных во время Депозита, Администрация имеет право заморозить счет и принять решение о списании ошибочно зачисленных Монет. </p>
                    <p> 8. Администрация сайта не несет ответственности за Ставки пользователей. </p>
                    <p> 9. Окончательные решения спорных ситуаций всегда принимает Администрация сайта. </p>
                    <p> 10. Пользователь обязуется проверять информацию касательно матча, названия турнира и времени его проведения, информация на сайте не всегда является точной. </p>
                    <p> 11. В случае отмены матча до его начала или преждевременного завершения матча по техническим причинам, все Ставки возвращаются Пользователям в полном размере. Так же, Администрация сайта оставляет за собой право в некоторых исключительных случаях отменять матчи с возвратом всех сделанных ставок. </p>
                    <p> 12. В случае нарушения условий пользования сайтом или многочисленных нарушений правил пользования чатом, Администрация оставляет за собой право бессрочно заблокировать профиль Пользователя, включая заморозку баланса и приостановление вывода. </p>
                    <p> 13. Пользователь несет ответственность за свой Профиль и обязуется не передавать данные для входа третьим лицам. Таким образом в случае получения доступа к Профилю злоумышленниками по вине пользователя - вся ответственность лежит на Пользователе. </p>
                    <p> 14. В случае если результаты Матча были аннулированы/изменены организаторами после его завершения, спустя не более 2-х часов - решение о возврате ставок остается на усмотрение Администрации. В случае если результат Матча был аннулирован/изменен организаторами спустя более 2-х часов после завершения, ставки возврату не подлежат. </p>
                    <p> 15. В случае если команда была дисквалифицирована с турнира по любым причинам, включая: использование читов, наличие банов на других аккаунтах (Steam, ESEA, FaceIt) или нарушение условий турнира - результаты уже прошедших матчей остаются действительными и не подлежат отмене. В остальных случаях решение о возврате ставок остается на усмотрение Администрации. </p>

                </div>

                <div class="container">

                    <h4 class="headers_in_FAQ"> <strong> В случае, если Пользователь не согласен с условиями данного соглашения или сайт предоставляет услуги, противоречащие законодательству страны, гражданином которой он является - он обязуется немедленно прекратить пользование сайтом. </strong> </h4>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Конфиденциальность -->
<div class="modal fade" id="modal_confidentiality" tabindex="-1" role="dialog" aria-labelledby="agreement" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <div class="col-12 text-center" id="text_agreement"> Конфиденциальность </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal_registration">
                    <span aria-hidden="true"><i class="ion-close-round"> </i></span>
                </button>

            </div>

            <div class="modal-body" id="modal_body_confidentiality">

                <div class="container">

                    <p> Просим Вас знакомиться с правилами обработки персональных данных о посетителях и пользователях сервиса <u>Frostbets.com</u> </p>

                </div>

                <div class="container">

                    <p> Под персональными данными понимается информация, используемая с целью установления чьей-либо личности, в том числе Ф.И.О., адрес электронном почты, телефон, и т.п. Предоставляя персональные данные, вы даете согласие на их передачу, хранение и обработку. </p>

                </div>

                <div class="container">

                    <p> Регистрируясь на сайте <u>Frostbets.com</u> Вы соглашаетесь с положениями Политики конфиденциальности, в которой описаны принципы обработки ваших данных, включая следующие ключевые моменты: </p>
                    <p> - Адрес электронной почты (e-mail). Будет использоваться Вами для входа на сайт и восстановления пароля в случаи его утери. Данные об электронной почте не передаются третьим лицам; </p>
                    <p> - Данные о ваших посещениях сайта, в том числе, данные о местонахождении, IP-адрес, операционной системе, идентификационный код устройства (id материнской платы). Информация используется исключительно для анализа и поддержания качественной работы сайта; </p>
                    <p> - Информация о файлах cookie. Под файлом cookie понимается небольшой текстовый документ, формируемый сайтом через используемый вами браузер и расположенный на жестком диске вашего устройства. Данные файлы не содержат личных сведений о вас и используются сервисом <u>Frostbets.com</u> исключительно для упрощения пользования сайтом и быстрого получения статистических данных (загрузка изображений, т.д). </p>
                    <h4 class="headers_in_FAQ"> <strong> Пользуясь сервисом <u>Frostbets.com</u>, вы принимаете условия, описанные выше. </strong> </h4>

                </div>

                <div class="container">

                    <p> По вопросам, связанным с обработкой персональной информации вы можете обратиться на адрес электронной почты <u>frostbetssupport@gmail.com</u> </p>

                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/control_registration.js"></script>
<script type="text/javascript" src="js/control_contact.js"></script>
</body>
</html>