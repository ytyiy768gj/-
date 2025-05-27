<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Путешествия мечты</title>
</head>

<body>
    <header class="site-header">
        <div class="logo-container">
            <img src="assets/img/logotype.png" alt="Логотип Sunmar" class="logo-image">
        </div>

        <nav class="navigation">
            <ul>
                <li><a href="#services">Услуги</a></li>
                <li><a href="app/components/about.html">О нас</a></li>
                <li><a href="app/components/reviews.html">Отзывы</a></li>
                <li><a href="app/components/contacts.html">Контакты</a></li>
            </ul>
        </nav>

        <div class="contact-info">
            <p class="address">г.Омск, ул.Ленина д.19</p>
            <p class="phone">тел +7(913) 635-31-39</p>
        </div>
    </header>

    <div class="hero">
        <div>
            <h1>ПУТЕШЕСТВИЯ МЕЧТЫ</h1>
            <h2>Туристическая компания</h2>
        </div>
        <div class="offer">
            <p>Предоставляем скидку на первый тур</p>
            <p>в виде 10% от стоимости заказа</p>
<button id="registerBtn">Записаться</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span id="closeBtn">&times;</span>
        <h2>Отправить заявку</h2>
        <form id="registerForm">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" placeholder="Имя" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required><br><br>
            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" placeholder="+7(908)800-41-56" required><br><br>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("registerBtn");
    var span = document.getElementById("closeBtn");

    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
        </div>
    </div>

    


    <h1 id="advantages">ПРЕИМУЩЕСТВА</h1>
    <div class="advantages">
        <div class="advantage">
            <h3 style="margin-left: 38%;">Удобство</h3>
            <!-- <h3>Удобство</h3> -->
            <img src="assets/img/1.png" alt="">
            <p>Сайт туристической компании предоставляет простой и понятный интерфейс</p>
        </div>
        <div class="advantage">
            <h3 style="margin-left: 42%;" >Контент</h3>
            <img src="assets/img/2.png" alt="">
            <p>Сайт туристической компании предоставляет простой и понятный интерфейс</p>
        </div>
        <div class="advantage">
            <h3 style="margin-left: 38%;" >Поддержка</h3>
            <img src="assets/img/3.png" alt="">
            <p>Хорошо организованный сайт предоставляет возможность обращения в службу поддержки</p>
        </div>
    </div>
    
    <h1 id="services">НАШИ УСЛУГИ</h1><br>
    <div class="services">
        <div class="service">
            <img src="assets/img/11.jpg" alt="">
            <div class="service-content">
                <h3>Индивидуальные экскурсии</h3>
                <p>Наши опытные гиды помогут вам разработать уникальный маршрут, учитывающий ваши пожелания и интересы</p>
                <div class="price"><h1>19 990 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/img/12.jpg" alt="">
            <div class="service-content">
                <h3>Культурное погружение</h3>
                <p>Углубитесь в местные традиции и обычаи с нашими специальными программами, включающими мастер-классы, гастрономические </p>
                <div class="price"><h1>22 990 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/img/13.jpg" alt="">
            <div class="service-content">
                <h3>Тематические туры</h3>
                <p>Отправьтесь в увлекательное путешествие, посвященное конкретной теме: искусству, гастрономии, истории</p>
                <div class="price"><h1>15 990 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/img/14.jpg" alt="">
            <div class="service-content">
                <h3>Корпоративные поездки</h3>
                <p>Организуем незабываемые путешествия для команд, сочетая неформальное общение и командное мероприятия</p>
                <div class="price"><h1>36 990 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/img/15.jpg" alt="">
            <div class="service-content">
                <h3>Семейные путешествия</h3>
                <p>Подбираем индивидуальные программы для семейного отдыха с учетом интересов детей и взрослых. Безопасность и  контент</p>
                <div class="price"><h1>28 990 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/img/16.jpg" alt="">
            <div class="service-content">
                <h3>Увлекательные экскурсии</h3>
                <p>Наши опытные гиды помогут вам разработать уникальный маршрут, учитывающий ваши пожелания и интересы</p>
                <div class="price"><h1>25 490 руб.</h1></div>
                <button class="button">Записаться</button>
            </div>
        </div>
    </div>


    <div class="title"><h1>ЭТАПЫ РАБОТЫ</h1></div>
    <div class="container"> 
        <div class="section">
            <div class="section-title">Консультация клиента:</div>
            На этом этапе агент выясняет предпочтения и желания клиента, обсуждает бюджет и цели.
        </div>
        <div class="section">
            <div class="section-title">Подбор предложений:</div>
             Исходя из собранной информации, агент ищет подходящие туры, отели и авиабилеты.
        </div>
        <div class="section">
            <div class="section-title">Оформление заявки:</div>
             После выбора клиентом подходящего варианта, агент приступает к оформлению.
        </div>
        <div class="section">
            <div class="section-title">Предоставление информации:</div>
            Туроперат передает клиенту всю важную информацию о поездке: даты вылета.
        </div>
        <div class="section">
            <div class="section-title">Поддержка в поездке:</div>
            Во время путешествия агент обеспечивает связь с клиентом, готов предложить помощь.
        </div>
        <div class="section">
            <div class="section-title">Обратная связь:</div>
             По завершении поездки туроперат собирает отзывы клиентов, что позволяет улучшить обслуживание.
        </div>
    </div>


    <div class="container3">
        <div class="image">
            <img src="assets/img/sunny.jpg" alt="Природа">
        </div>
        <div class="content">
            <h1>НАШИ ЦЕЛИ</h1>
            <h3>Индивидуальный подход</h3>
            Наша туркомпания предлагает планирование путешествий с учётом уникальных предпочтений и желаний каждого клиента. Мы внимательно слушаем ваши пожелания и создаем маршрут, который будет соответствовать вашим интересам.
            <h3>Подбор оптимальных условий</h3>
            Мы осуществляем тщательный анализ рынка и всегда работаем с надёжными партнёрами. Это позволяет нам предлагать вам лучшие цены и условия путешествия. Наша команда постоянно обновляет информацию о скидках.
            <h3>Поддержка и консультации</h3>
            Наша служба поддержки доступна в любое время, готовая ответить на все ваши вопросы и предложить помощь в любой ситуации. Мы обеспечиваем вас подробной информацией о каждом аспекте вашего путешествия.
        </div>
    </div>




    <h1>ДОПОЛНИТЕЛЬНО</h1><br>
    <div class="container4">
        <div class="text-section">
            <p>Приглашаем вас в волшебное путешествие, полное захватывающих приключений и незабываемых впечатлений. Наша туристическая компания предлагает уникальные маршруты</p>
            <ul>
                <li>Экскурсии по историческим местам</li>
                <li>Тур по живописным природным паркам</li>
                <li>Тематические кулинарные туры</li>
                <li>Пляжные каникулы на островах</li>
                <li>Автобусные туры по городам Европы</li>
                <li>Круизы по морям и океанам</li>
                <li>Спортивные приключения</li>
                <li>Медицинский туризм</li>
                <li>Короткометражные туры</li>
                <li>Эксклюзивные дегустации</li>
                <li>Персонализированные маршруты</li>
            </ul>
        </div>
        <div class="image-section"></div>
    </div>

<br><br><br><br><br>
   

    <footer class="footer">
        <p>предложения на сайте не являются публичной офертой и носят исключительно информационный характер</p>
        <p>ООО "АРТТРЭВЭЛ" Юр.адрес: 644099 Омск, ул. Ленина, д.19 пом. П4, ИНН 5507256506 / КПП 550701001</p>
    </footer>
</body>
</html>