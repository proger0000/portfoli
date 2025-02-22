<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Peter Galenko - Full-Stack Developer & QA Engineer з Києва, Україна. Спеціалізується на Vue.js, PHP (Laravel), PWA-додатках та тестуванні.">
    <meta name="keywords" content="Full-Stack Developer, QA Engineer, Vue.js, Laravel, PWA, Google Maps API, REST API">
    <title>Peter Galenko | Full-Stack Developer & QA Engineer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <aside class="sidebar" data-sidebar>
            <div class="sidebar-info">
                <figure class="avatar-box">
                    <img src="./assets/images/avatar.jpg" alt="Peter Galenko" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Peter Galenko">Peter Galenko</h1>
                    <p class="title">Full-Stack Developer & QA Engineer</p>
                </div>

                <button class="info-more-btn" data-sidebar-btn>
                    <span data-lang="ua">Показати контакти</span>
                    <span data-lang="en">Show Contacts</span>
                    <ion-icon name="chevron-down"></ion-icon>
                </button>
                
                <div class="language-switcher">
                    <button class="lang-btn active" data-lang-switch="ua">UA</button>
                    <button class="lang-btn" data-lang-switch="en">EN</button>
                </div>
            </div>

            <div class="sidebar-info-more">
                <div class="separator"></div>

                <ul class="contacts-list">
                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title" data-lang="ua">Email</p>
                            <p class="contact-title" data-lang="en">Email</p>

                            <a href="mailto:galenkorp@gmail.com" class="contact-link">galenkorp@gmail.com</a>
                        </div>
                    </li>

                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title" data-lang="ua">Телефон</p>
                            <p class="contact-title" data-lang="en">Phone</p>

                            <a href="tel:+380988964479" class="contact-link">+38 098 896 4479</a>
                        </div>
                    </li>

                    <li class="contact-item">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title" data-lang="ua">Місцезнаходження</p>
                            <p class="contact-title" data-lang="en">Location</p>

                            <address data-lang="ua">Київ, Україна</address>
                            <address data-lang="en">Kyiv, Ukraine</address>
                        </div>
                    </li>
                </ul>

                <div class="separator"></div>

                <ul class="social-list">
                    <li class="social-item"><a href="https://github.com/yourusername" class="social-link" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                    <li class="social-item"><a href="https://linkedin.com/in/yourusername" class="social-link" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li class="social-item"><a href="https://t.me/yourusername" class="social-link" target="_blank"><ion-icon name="paper-plane-outline"></ion-icon></a></li>
                </ul>
            </div>
        </aside>

        <div class="main-content">
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <button class="navbar-link active" data-nav-link data-lang="ua">Про мене</button>
                        <button class="navbar-link active" data-nav-link data-lang="en">About</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link data-lang="ua">Резюме</button>
                        <button class="navbar-link" data-nav-link data-lang="en">Resume</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link data-lang="ua">Портфоліо</button>
                        <button class="navbar-link" data-nav-link data-lang="en">Portfolio</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link data-lang="ua">Контакти</button>
                        <button class="navbar-link" data-nav-link data-lang="en">Contact</button>
                    </li>
                </ul>
            </nav>

            <!-- About Section -->
            <article class="about active" data-page="about">
                <header>
                    <h2 class="h2 article-title" data-lang="ua">Про мене</h2>
                    <h2 class="h2 article-title" data-lang="en">About me</h2>
                </header>

                <section class="about-text">
                    <p data-lang="ua">Інноваційний Full-Stack Developer та QA Engineer з досвідом у розробці високонавантажених веб-додатків, тестуванні та впровадженні ефективних цифрових рішень. Спеціалізуюся на створенні PWA-додатків, модульних CRM-систем, інтеграції Google Maps API та захисті API.</p>
                    <p data-lang="en">Innovative Full-Stack Developer and QA Engineer with experience in developing high-load web applications, testing, and implementing effective digital solutions. I specialize in creating PWA applications, modular CRM systems, Google Maps API integration, and API security.</p>
                    
                    <p data-lang="ua">Вміло поєдную навички Frontend і Backend розробки для створення продуктивних та зручних у користуванні веб-додатків. Постійно вдосконалюю свої технічні навички та слідкую за новими технологіями у галузі веб-розробки.</p>
                    <p data-lang="en">I skillfully combine Frontend and Backend development skills to create productive and user-friendly web applications. I constantly improve my technical skills and follow new technologies in the field of web development.</p>
                </section>

                <section class="service">
                    <h3 class="h3 service-title" data-lang="ua">Мої навички</h3>
                    <h3 class="h3 service-title" data-lang="en">My skills</h3>

                    <ul class="service-list">
                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="./assets/images/icon-frontend.png" alt="Frontend Development" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title" data-lang="ua">Frontend Розробка</h4>
                                <h4 class="h4 service-item-title" data-lang="en">Frontend Development</h4>
                                <p class="service-item-text" data-lang="ua">Vue.js, Tailwind CSS, HTML, CSS, JavaScript, адаптивна верстка</p>
                                <p class="service-item-text" data-lang="en">Vue.js, Tailwind CSS, HTML, CSS, JavaScript, responsive design</p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="./assets/images/icon-backend.png" alt="Backend Development" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title" data-lang="ua">Backend Розробка</h4>
                                <h4 class="h4 service-item-title" data-lang="en">Backend Development</h4>
                                <p class="service-item-text" data-lang="ua">PHP (Laravel), MySQL, REST API, безпека додатків</p>
                                <p class="service-item-text" data-lang="en">PHP (Laravel), MySQL, REST API, application security</p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="./assets/images/icon-qa.png" alt="QA Testing" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title" data-lang="ua">Тестування та QA</h4>
                                <h4 class="h4 service-item-title" data-lang="en">Testing and QA</h4>
                                <p class="service-item-text" data-lang="ua">Selenium, Jira, TestRail, Postman, автоматизоване тестування</p>
                                <p class="service-item-text" data-lang="en">Selenium, Jira, TestRail, Postman, automated testing</p>
                            </div>
                        </li>

                        <li class="service-item">
                            <div class="service-icon-box">
                                <img src="./assets/images/icon-pwa.png" alt="PWA Development" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title" data-lang="ua">PWA Розробка</h4>
                                <h4 class="h4 service-item-title" data-lang="en">PWA Development</h4>
                                <p class="service-item-text" data-lang="ua">Progressive Web Apps, оффлайн-функціональність, швидке завантаження</p>
                                <p class="service-item-text" data-lang="en">Progressive Web Apps, offline functionality, fast loading</p>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="clients">
                    <h3 class="h3 clients-title" data-lang="ua">Технології</h3>
                    <h3 class="h3 clients-title" data-lang="en">Technologies</h3>

                    <ul class="clients-list has-scrollbar">
                        <li class="clients-item">
                            <img src="./assets/images/tech-vue.png" alt="Vue.js">
                        </li>
                        <li class="clients-item">
                            <img src="./assets/images/tech-laravel.png" alt="Laravel">
                        </li>
                        <li class="clients-item">
                            <img src="./assets/images/tech-tailwind.png" alt="Tailwind CSS">
                        </li>
                        <li class="clients-item">
                            <img src="./assets/images/tech-mysql.png" alt="MySQL">
                        </li>
                        <li class="clients-item">
                            <img src="./assets/images/tech-google-maps.png" alt="Google Maps API">
                        </li>
                        <li class="clients-item">
                            <img src="./assets/images/tech-git.png" alt="Git">
                        </li>
                    </ul>
                </section>
            </article>
            
            <!-- Resume Section -->
            <article class="resume" data-page="resume">
                <header>
                    <h2 class="h2 article-title" data-lang="ua">Резюме</h2>
                    <h2 class="h2 article-title" data-lang="en">Resume</h2>
                </header>

                <section class="timeline">
                    <div class="title-wrapper">
                        <div class="icon-box"><ion-icon name="book-outline"></ion-icon></div>
                        <h3 class="h3" data-lang="ua">Освіта</h3>
                        <h3 class="h3" data-lang="en">Education</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">Київський національний економічний університет</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">Kyiv National Economic University</h4>
                            <span data-lang="ua">2021 - Теперішній час</span>
                            <span data-lang="en">2021 - Present</span>
                            <p class="timeline-text" data-lang="ua">Аспірантура - Міжнародні економічні відносини</p>
                            <p class="timeline-text" data-lang="en">Postgraduate - International Economic Relations</p>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">Київський національний економічний університет</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">Kyiv National Economic University</h4>
                            <span>2019 - 2021</span>
                            <p class="timeline-text" data-lang="ua">Магістр - Міжнародний облік та аналіз</p>
                            <p class="timeline-text" data-lang="en">Master - International Accounting and Analysis</p>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">Київський національний економічний університет</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">Kyiv National Economic University</h4>
                            <span>2016 - 2019</span>
                            <p class="timeline-text" data-lang="ua">Бакалавр - Маркетинг</p>
                            <p class="timeline-text" data-lang="en">Bachelor - Marketing</p>
                        </li>
                    </ol>
                </section>

                <section class="timeline">
                    <div class="title-wrapper">
                        <div class="icon-box"><ion-icon name="briefcase-outline"></ion-icon></div>
                        <h3 class="h3" data-lang="ua">Досвід роботи</h3>
                        <h3 class="h3" data-lang="en">Experience</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">Full-Stack Developer | QA Engineer</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">Full-Stack Developer | QA Engineer</h4>
                            <span data-lang="ua">Київська служба порятунку (KLS), Київ | 2024 - Теперішній час</span>
                            <span data-lang="en">Kyiv Lifeguard Service (KLS), Kyiv | 2024 - Present</span>
                            <p class="timeline-text" data-lang="ua">
                                • Розробка та впровадження модульної CRM-системи для управління рятувальниками.<br>
                                • Створення інтерактивної карти постів за допомогою Google Maps API.<br>
                                • Оптимізація продуктивності системи та впровадження PWA-функціоналу.<br>
                                • Тестування API та веб-додатків, розробка тест-кейсів та автоматизованих тестів.<br>
                                • Впровадження аутентифікації через Laravel Sanctum та ролей користувачів.
                            </p>
                            <p class="timeline-text" data-lang="en">
                                • Development and implementation of a modular CRM system for lifeguard management.<br>
                                • Creation of an interactive post map using Google Maps API.<br>
                                • System performance optimization and implementation of PWA functionality.<br>
                                • Testing API and web applications, developing test cases and automated tests.<br>
                                • Implementation of authentication through Laravel Sanctum and user roles.
                            </p>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">QA Engineer</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">QA Engineer</h4>
                            <span data-lang="ua">BBQ Chef, Зальцбург | 2023 - Теперішній час</span>
                            <span data-lang="en">BBQ Chef, Salzburg | 2023 - Present</span>
                            <p class="timeline-text" data-lang="ua">
                                • Контроль якості веб-додатків, створення та виконання тест-кейсів.<br>
                                • Виправлення помилок у коді, тестування змін та оновлень.<br>
                                • Робота з Jira, TestRail, Postman.
                            </p>
                            <p class="timeline-text" data-lang="en">
                                • Quality control of web applications, creation and execution of test cases.<br>
                                • Fixing bugs in code, testing changes and updates.<br>
                                • Working with Jira, TestRail, Postman.
                            </p>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">QA Trainee</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">QA Trainee</h4>
                            <span data-lang="ua">Дія, Київ | 2023</span>
                            <span data-lang="en">Diia, Kyiv | 2023</span>
                            <p class="timeline-text" data-lang="ua">
                                • Створення 87+ тест-кейсів, тестування державного порталу Дія.<br>
                                • Використання Postman для тестування API.
                            </p>
                            <p class="timeline-text" data-lang="en">
                                • Creation of 87+ test cases, testing the Diia government portal.<br>
                                • Using Postman for API testing.
                            </p>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">WordPress Developer + QA Engineer</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">WordPress Developer + QA Engineer</h4>
                            <span data-lang="ua">Liki Ukraine, Київ | 2021 - 2023</span>
                            <span data-lang="en">Liki Ukraine, Kyiv | 2021 - 2023</span>
                            <p class="timeline-text" data-lang="ua">
                                • Розробка front-end архітектури, покращення продуктивності сайтів.<br>
                                • Розробка та впровадження QA-процесів.
                            </p>
                            <p class="timeline-text" data-lang="en">
                                • Development of front-end architecture, improving website performance.<br>
                                • Development and implementation of QA processes.
                            </p>
                        </li>
                    </ol>
                </section>

                <section class="skill">
                    <h3 class="h3 skills-title" data-lang="ua">Професійні навички</h3>
                    <h3 class="h3 skills-title" data-lang="en">Professional Skills</h3>

                    <ul class="skills-list content-card">
                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5" data-lang="ua">Frontend (Vue.js, HTML, CSS, JS)</h5>
                                <h5 class="h5" data-lang="en">Frontend (Vue.js, HTML, CSS, JS)</h5>
                                <data value="85">85%</data>
                            </div>

                            <div class="skills-progress-bg">
                                <div class="skills-progress-fill" style="width: 85%;"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5" data-lang="ua">Backend (PHP, Laravel)</h5>
                                <h5 class="h5" data-lang="en">Backend (PHP, Laravel)</h5>
                                <data value="80">80%</data>
                            </div>

                            <div class="skills-progress-bg">
                                <div class="skills-progress-fill" style="width: 80%;"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5" data-lang="ua">Тестування та QA</h5>
                                <h5 class="h5" data-lang="en">Testing and QA</h5>
                                <data value="90">90%</data>
                            </div>

                            <div class="skills-progress-bg">
                                <div class="skills-progress-fill" style="width: 90%;"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5" data-lang="ua">API інтеграції</h5>
                                <h5 class="h5" data-lang="en">API Integrations</h5>
                                <data value="75">75%</data>
                            </div>

                            <div class="skills-progress-bg">
                                <div class="skills-progress-fill" style="width: 75%;"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="title-wrapper">
                                <h5 class="h5" data-lang="ua">WordPress</h5>
                                <h5 class="h5" data-lang="en">WordPress</h5>
                                <data value="85">85%</data>
                            </div>

                            <div class="skills-progress-bg">
                                <div class="skills-progress-fill" style="width: 85%;"></div>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="timeline">
                    <div class="title-wrapper">
                        <div class="icon-box"><ion-icon name="medal-outline"></ion-icon></div>
                        <h3 class="h3" data-lang="ua">Курси та сертифікати</h3>
                        <h3 class="h3" data-lang="en">Courses & Certifications</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">QA Engineer – SkillUp</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">QA Engineer – SkillUp</h4>
                            <span>2023</span>
                        </li>

                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title" data-lang="ua">QA Engineer – GoIT</h4>
                            <h4 class="h4 timeline-item-title" data-lang="en">QA Engineer – GoIT</h4>
                            <span>2021</span>
                        </li>
                    </ol>
                </section>
            </article>

            <!-- Portfolio Section -->
            <article class="portfolio" data-page="portfolio">
                <header>
                    <h2 class="h2 article-title" data-lang="ua">Портфоліо</h2>
                    <h2 class="h2 article-title" data-lang="en">Portfolio</h2>
                </header>

                <section class="projects">
                    <ul class="filter-list">
                        <li class="filter-item"><button class="active" data-filter-btn data-lang="ua">Всі</button></li>
                        <li class="filter-item"><button class="active" data-filter-btn data-lang="en">All</button></li>
                        <li class="filter-item"><button data-filter-btn data-lang="ua">Web-розробка</button></li>
                        <li class="filter-item"><button data-filter-btn data-lang="en">Web Development</button></li>
                        <li class="filter-item"><button data-filter-btn data-lang="ua">CRM-системи</button></li>
                        <li class="filter-item"><button data-filter-btn data-lang="en">CRM Systems</button></li>
                    </ul>

                    <div class="filter-select-box">
                        <button class="filter-select" data-select>
                            <div class="select-value" data-select-value data-lang="ua">Вибрати категорію</div>
                            <div class="select-value" data-select-value data-lang="en">Select Category</div>

                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>
                        </button>

                        <ul class="select-list">
                            <li class="select-item"><button data-select-item data-lang="ua">Всі</button></li>
                            <li class="select-item"><button data-select-item data-lang="en">All</button></li>
                            <li class="select-item"><button data-select-item data-lang="ua">Web-розробка</button></li>
                            <li class="select-item"><button data-select-item data-lang="en">Web Development</button></li>
                            <li class="select-item"><button data-select-item data-lang="ua">CRM-системи</button></li>
                            <li class="select-item"><button data-select-item data-lang="en">CRM Systems</button></li>
                        </ul>
                    </div>

                    <ul class="project-list">
                        <li class="project-item active" data-filter-item data-category="crm systems">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-kls.jpg" alt="KLS CRM" loading="lazy">
                                </figure>

                                <h3 class="project-title" data-lang="ua">CRM для рятувальної служби</h3>
                                <h3 class="project-title" data-lang="en">Lifeguard Service CRM</h3>
                                <p class="project-category" data-lang="ua">CRM-системи</p>
                                <p class="project-category" data-lang="en">CRM Systems</p>
                            </a>
                        </li>

                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-liki.jpg" alt="Liki Ukraine" loading="lazy">
                                </figure>

                                <h3 class="project-title" data-lang="ua">Liki Ukraine</h3>
                                <h3 class="project-title" data-lang="en">Liki Ukraine</h3>
                                <p class="project-category" data-lang="ua">Web-розробка</p>
                                <p class="project-category" data-lang="en">Web Development</p>
                            </a>
                        </li>

                        <li class="project-item active" data-filter-item data-category="web development">
                            <a href="#">
                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-bbq.jpg" alt="BBQ Chef" loading="lazy">
                                </figure>

                                <h3 class="project-title">BBQ Chef</h3>
                                <p class="project-category" data-lang="ua">Web-розробка</p>
                                <p class="project-category" data-lang="en">Web Development</p>
                            </a>
                        </li>
                    </ul>
                </section>
            </article>

            <!-- Contact Section -->
            <article class="contact" data-page="contact">
                <header>
                    <h2 class="h2 article-title" data-lang="ua">Контакти</h2>
                    <h2 class="h2 article-title" data-lang="en">Contact</h2>
                </header>

                <section class="mapbox" data-mapbox>
                    <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162757.72582795525!2d30.392608824222073!3d50.402368200561994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1708531151190!5m2!1suk!2sua" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                </section>

                <section class="contact-form">
                    <h3 class="h3 form-title" data-lang="ua">Контактна форма</h3>
                    <h3 class="h3 form-title" data-lang="en">Contact Form</h3>

                    <form action="contact.php" method="POST" class="form" data-form>
                        <div class="input-wrapper">
                            <input type="text" name="fullname" class="form-input" placeholder="Iм'я / Full name" required data-form-input>
                            <input type="email" name="email" class="form-input" placeholder="Email" required data-form-input>
                        </div>

                        <textarea name="message" class="form-input" placeholder="Повідомлення / Your Message" required data-form-input></textarea>

                        <button class="form-btn" type="submit" disabled data-form-btn>
                            <ion-icon name="paper-plane"></ion-icon>
                            <span data-lang="ua">Надіслати повідомлення</span>
                            <span data-lang="en">Send Message</span>
                        </button>
                    </form>
                </section>
            </article>
        </div>
    </main>

    <!-- Scripts -->
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>