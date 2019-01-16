<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
               
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
               width: 75%;
				margin: auto;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			h5 {
				margin-top: 0.53cm;
				margin-bottom: 0.26cm;
				border-top: none;
				border-bottom: 1px solid #cccccc;
				border-left: none;
				border-right: none;
				padding-top: 0cm;
				padding-bottom: 0.05cm;
				padding-left: 0cm;
				padding-right: 0cm;
				color: #66a700;
				text-align: left;
				page-break-after: avoid;
			}
			.user-img {
				width:180px;
				height:200px;
				float: left;
				margin-right: 50px;
			}
			.user-info-row {
				display:table;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
				<img class="user-img" src="/img/koala.jpg"></img>

                <div class="user-info">
                    <p style="margin-left: 0cm">
					<span lang="ru-RU"><b>Web-программист</b></span><br>
					<span lang="ru-RU"><b>Иванов Руслан Владимирович</b></span>
					<br><b>Дата рождения:</b> 14 августа1991
					г.<br><b>Телефон</b> +7<span lang="en-US">9674902016</span><br><b>E-mail:</b>
					89674902016<span lang="en-US">@yandex.ru</span>
					<br><b>Город:</b> Тольятти.</p>
				</div>
					<div class="user-info-row"><h5 class="western">Образование:</h5>
					<p>2009-2014 гг. – ПВГУС, Радиотехник.</p>
					<h5 class="western">Опыт работы:</h5>
					<p>20016-      гг.,ООО Терция- программист.</p>
					<p><b>Обязанности:</b></p>
					<ul>
						<li><p style="margin-bottom: 0cm">создание программных продуктов на
						языках HTML, <span lang="en-US">JS</span>, <span lang="en-US">PHP,
						AJAX, XML;</span> 
						</p>
						</li><li><p style="margin-bottom: 0cm"><span lang="ru-RU">поддержка
						собственной </span><span lang="en-US">CRM</span></p>
						</li><li><p style="margin-bottom: 0cm">разработка веб-приложений; 
						</p>
					</li></ul>
					<h5 class="western">Прочие навыки:</h5>
					<ul>
						<li><p lang="en-US" style="margin-bottom: 0cm">Php, css, js, ajax,
						git</p>
						</li><li><p style="margin-bottom: 0cm">ООП</p>
					</li></ul>
					<h5 class="western">Поверхностные навыки (изучал,мало использовал):</h5>
					<ul>
						<li><p style="margin-bottom: 0cm"><span lang="en-US">Yii, Vue.js,
						Redis</span></p>
						</li><li><p style="margin-bottom: 0cm"><font face="Arial"><font size="2" style="font-size: 9pt"><span lang="en-US"><span style="font-weight: normal"><span style="background: #e5dfec">Фреймворк
						Laravel не знаю, но недавно начал его изучать</span></span></span></font></font></p>
					</li></ul>
					<h5 class="western"><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">Личные
					качества</span></span></font></font></h5>
					<p><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">Потом
					найду в гугле и скопираю, а так человек вроде хороший.</span></span></font></font></p>
					<h5 class="western"><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">Описание</span></span></font></font></h5>
					<p><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">На
					текущей работе разрабатывал и поддерживал </span></span></font></font><font face="Arial"><font size="2" style="font-size: 9pt"><span lang="en-US"><span style="font-weight: normal"><span style="background: #e5dfec">CRM
					 <a href="https://gora.online/">https://gora.online</a>.  </span></span></span></font></font><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">В
					частности разработал модуль Бухгалтерия(Зарплата и кадры), модуль
					отслеживания курьера, интеграцию других систем с нашей(конкретно
					загрузка товара), интеграция нашей системы с облачными онлайн
					кассами, доработка собственного фреймворка. Принимал участие в
					разработке проекта <a href="https://jbs.expert/">https://jbs.expert</a>.
					 Вообщем участвовал во всех передрягах никогда ни от чего не
					отказывался.</span></span></font></font></p>
					<p><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">На
					текущем месте работы не используется современные инструменты
					разработки, думаю</span></span></font></font><font face="Arial"><font size="2" style="font-size: 9pt"><span lang="en-US"><span style="font-weight: normal"><span style="background: #e5dfec">
					</span></span></span></font></font><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">они
					дементоры и хотят высосать всю радость с программиста)))). В связи с
					этим затормозилось развитие в программировании и стало скучно,
					поэтому захотелось поменять место работы, где будут использоваться
					инструменты радующие слух программиста. </span></span></font></font>
					</p>
					<p><font color="#555555"><font face="Helvetica, sans-serif"><font size="3"><span style="font-style: normal"><span style="font-weight: normal"><span style="background: #e5dfec">Спасибо
					за уделенное время и внимание.</span></span></span></font></font></font><font face="Arial"><font size="2" style="font-size: 9pt"><span style="font-weight: normal"><span style="background: #e5dfec">
					</span></span></font></font>
					</p>
                </div>
            </div>
        </div>
    </body>
</html>
