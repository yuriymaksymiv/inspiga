<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Arco onepage themeforest" />
    <meta name="description" content="Arco - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Inspiga | Soft - Brief</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js" integrity="sha384-0AJY8UERsBUKdWcyF3o2kisLKeIo6G4Tbd8Y6fbyw6qYmn4WBuqcvxokp8m2UzSD" crossorigin="anonymous"></script>    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Styles -->


    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<!-- =====================================
==== Start Loading -->

<div class="loading">
    <div class="text-center middle">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
</div>

<!-- End Loading ====
======================================= -->


<!-- =====================================
==== Start Navbar -->

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo-brief" href="/">
            <img src="img/logo-dark.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/brief" data-scroll-nav="6">Бриф</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End Navbar ====
======================================= -->


<!-- =====================================
==== Start Contact -->

<section class="contact section-padding" data-scroll-index="6">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h4>БРИФ</h4>
                <h6>Розкажіть нам про свій проект</h6>
            </div>

            <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                <form class='form'  method='post'>
                    {!! csrf_field() !!}

                    <div class="messages"></div>

                    <div class="controls">



                        <div class="form-group row align-items-center text-right ">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Як до Вас звертатися</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="Ім'я та Прізвище" required="required">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Номер телефону</label>
                            <div class="col-sm-6">
                                <input type="text" name="phone" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" required="required">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Ваш Email</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="" required="required">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Назва компанії</label>
                            <div class="col-sm-6">
                                <input type="text" name="company_name" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Сфера діяльності</label>
                            <div class="col-sm-6">
                                <input type="text" name="activity" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-6 text-right">Яка послуга Вас цікавить?</div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios1" value="Landing Page" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Landing Page
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios2" value="Сайт Візитка">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Сайт Візитка
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios3" value="Інтернет - Магазин">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Інтернет - Магазин
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios4" value="Корпоративний проект">
                                    <label class="form-check-label" for="exampleRadios4">
                                        Корпоративний проект
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios5" value="Обслуговування сайту">
                                    <label class="form-check-label" for="exampleRadios5">
                                        Обслуговування сайту
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service" id="exampleRadios6" value="Розробка мобільного додатку" disabled>
                                    <label class="form-check-label" for="exampleRadios6">
                                        Розробка мобільного додатку
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Бюджет проекту (приблизно)</label>
                            <div class="col-sm-6">
                                <select id="inputState" name="price" class="form-control">
                                    <option value="300$ - 500$">300$ - 500$</option>
                                    <option selected value="500$ - 800$">500$ - 800$</option>
                                    <option value="800$ - 2 000$">800$ - 2 000$</option>
                                    <option value="2 000$ - 4 000$">2 000$ - 4 000$</option>
                                    <option value="від 4 000$">від 4 000$</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-6 text-right"></div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="credit" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="credit" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Потрібно розтермінування по оплаті
                                    </label>
                                </div>
                                <br/>

                                <br/>
                            </div>
                        </div>

                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">На даний момент у Вас є сайт? Чим він вам не подобається?</label>

                            <div class="col-sm-6">
                                <input type="text" name="company_site" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Яка терміновість запуску проекту?</label>
                            <div class="col-sm-6">
                                <input type="text" name="term" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Структура сайту</label>
                            <div class="col-sm-6">
                               <textarea id="form_message" class="form-control form-control-sm" name="structure"
                                         placeholder="Вкажіть сторінки які потрібно реалізувати на сайті"  ></textarea>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-6 text-right">Необхідний  Функціонал</div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="blog" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="blog" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Блог
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="mobile_version" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="mobile_version" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label"  for="defaultCheck1">
                                        Мобільна версія
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="multi_languages" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="multi_languages" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Багатомовність
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="online_pay" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="online_pay" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Онлайн оплата (прийом платежів)
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="google_analytics" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="google_analytics" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Статистика (Google Analytics)
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="gallery" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="gallery" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Фотогалерея
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="search" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="search" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Пошук по сайту
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input"  name="registration" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input"  name="registration" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Кабінет користувача (реєстрація)
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="online_consultant" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="online_consultant" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Онлайн - консультант
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="maps" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="maps" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Карта Google
                                    </label>
                                </div>
                                <br/>
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Сайти які подобаються</label>
                            <div class="col-sm-6">
                                <textarea id="form_message" class="form-control form-control-sm" name="sites_like" placeholder="Вкажіть ссилки на 3-5 сайтів" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Сайти які НЕ подобаються</label>
                            <div class="col-sm-6">
                                <textarea rows="3" id="form_message" class="form-control form-control-sm" name="sites_dislike" placeholder="Вкажіть ссилки на 3-5 сайтів"  ></textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Покажіть нам Вашу статистику</label>
                            <div class="col-sm-6">
                                <textarea rows="3" id="form_message" class="form-control form-control-sm" name="statistic"
                                          placeholder="Приклад: 5 років на ринку, 125 проектів реалізовано, 317 задоволених клієнтів і тд..." ></textarea>

                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-6 text-right">Дизайн</div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="design" id="exampleRadios1" value="exclusive">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Потрібно індивідуальний дизайн + ( 650$ )
                                    </label>
                                </div>
                                <br />
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="design" id="exampleRadios2" value="template" checked>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Можна використати ліцензійні шаблони HTML (для зменшення вартості та терміну розробки)
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{--<div class="form-group row align-items-center text-right">--}}
                            {{--<label class="col-sm-6 col-form-label col-form-label-sm">Завантажити логотип</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input name="logo" type="file" class="form-control-file" id="exampleFormControlFile1">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Основний колір</label>
                            <div class="col-sm-6">
                                <input name="color" type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Дизайн якого сайту можна взяти за основу?</label>
                            <div class="col-sm-6">
                                <input name="basic_site" type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
                            </div>
                        </div>
                        <br/>

                        <div class="form-group row ">
                            <div class="col-sm-6 text-right">Додаткові послуги та сервіси</div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="photosession" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="photosession" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Потрібна фотосесія товарів
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="copywriter" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="copywriter" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Потрібно послуги копірайтера, рерайтера
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="add_content" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="add_content" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Наповнення контентом
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="support" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="support" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Технічна підтримка сайту
                                    </label>
                                </div>
                                <br/>
                                <div class="form-check">
                                    <input class="form-check-input" name="update_content" type="hidden" value="0" id="defaultCheck1">
                                    <input class="form-check-input" name="update_content" type="checkbox" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ведення сайту (регулярне оновлення контенту)
                                    </label>
                                </div>
                                <br/>

                            </div>
                        </div>
                        <div class="form-group row align-items-center text-right">
                            <label class="col-sm-6 col-form-label col-form-label-sm">Додаткові побажання</label>
                            <div class="col-sm-6">
                                <textarea rows="3" id="form_message" class="form-control form-control-sm" name="details"
                                          placeholder="Розкажіть нам детальніше про ваш проект" ></textarea>
                            </div>
                        </div>
                        {{--<div class="form-group row align-items-center text-right">--}}
                            {{--<label class="col-sm-6 col-form-label col-form-label-sm">Завантажити матеріали для проекту (якщо є)</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input name="document" type="file" class="form-control-file" id="exampleFormControlFile1">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <br>


                        <div class="col-sm-12 text-center">
                            <button type="submit"><span>Надіслати</span></button>
                        </div>
                    </div>

                </form>
            </div>



        </div>
    </div>
</section>


<!-- End Contact ====
======================================= -->


<!-- =====================================
==== Start Footer -->

<footer class="text-center">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="/">
            <img src="img/logo-light.png" alt="logo">
        </a>
        <p>+38 (095) 88 48 602</p>
        <p>inspiga.soft@gmail.com</p>
        <br>
        {{--<div class="social">--}}
        {{--<a href="#0" class="icon">--}}
        {{--<i class="fab fa-facebook-f"></i>--}}
        {{--</a>--}}
        {{--<a href="#0" class="icon">--}}
        {{--<i class="fab fa-instagram"></i>--}}
        {{--</a>--}}
        {{--</div>--}}

        <p>&copy; 2018 Inspiga | Soft -  All Rights Reserved.</p>

    </div>
</footer>

<!-- End Footer ====
======================================= -->





<!-- jQuery -->
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>

<!-- popper.min -->
<script src="js/popper.min.js"></script>

<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- scrollIt -->
<script src="js/scrollIt.min.js"></script>

<!-- jquery.waypoints.min -->
<script src="js/jquery.waypoints.min.js"></script>

<!-- jquery.counterup.min -->
<script src="js/jquery.counterup.min.js"></script>

<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- jquery.magnific-popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- stellar js -->
<script src="js/jquery.stellar.min.js"></script>

<!-- isotope.pkgd.min js -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- YouTubePopUp.jquery -->
<script src="js/YouTubePopUp.jquery.js"></script>

<!-- Map -->
<script src="js/map.js"></script>

<!-- validator js -->
<script src="js/validator.js"></script>

<!-- custom scripts -->
<script src="js/scripts.js"></script>

<!-- google map api -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&callback=initMap">
</script>

</body>
