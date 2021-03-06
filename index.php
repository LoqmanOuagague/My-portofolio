<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <title>Loqman Ouagague</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <header>
        <section class="logo">
            <span>Loqman Ouagague</span>
        </section>
        <nav class="">
            <ul>
                <li>
                    <a href="#about-me">
                        About me
                    </a>
                </li>
                <li>
                    <a href="#contact-me">
                        Contact me
                    </a>
                </li>
                <li>
                    <a href="#my-projects">
                        My projects
                    </a>
                </li>

            </ul>
        </nav>
        <div class="overlay"></div>
        <i class="fas fa-bars"></i>
    </header>
    <main>
        <div class="container">
            <div>
                <h1>I am <span>Loqman Ouagague</span>,</h1>
                <h2>a front-end devolopper and a UI/UX designer</h2>
                <p>If you are looking for a stunning website with a confortable price and a good client service then you
                    need to hire me so I can give some gorgeous designs</p>
                <button>
                    <a href="https://www.freelancer.com/u/loqmanpana7" target="_blank" rel="noopener noreferrer">
                        Hire me
                    </a>
                </button>
            </div>
            <div>
                <img class="resp-img" src="css/imgs/programmer-on-a-laptop.svg" alt="a programmer on a laptop" />
            </div>
        </div>
    </main>
    <section id="about-me">
        <h2 class="h1 text-center">About me</h2>
        <div class="container">
            <div>
                <img src="./css/imgs/my-photo.jpg" class="resp-img thumbnail" alt="">
            </div>
            <div>

                <p>
                    My name is Loqman Ouagague. I am a front-end developper and a UI/UX designer from Morocco. I started
                    learning programming when I was 11 years old. I have a good experience in web design that lets me
                    design beautiful websites.
                </p>
                <div class="my-skills">
                    <h2 class="h1">My skills</h2>
                    <div class="skills">
                        <div class="skill">
                            <div class="skill-title">
                                <i class="fab fa-html5"></i>
                                <span>HTML 5</span>
                            </div>
                            <div class="skill-lvl">
                                <div class="progress-bar" style="width: 90%;">
                                    90%
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                                <i class="fab fa-css3-alt"></i>
                                <span>CSS 3</span>
                            </div>
                            <div class="skill-lvl">
                                <div class="progress-bar" style="width: 95%;">
                                    95%
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="skill-title">
                                <i class="fas fa-paint-brush"></i>
                                <span>Prototyping</span>
                            </div>
                            <div class="skill-lvl">
                                <div class="progress-bar" style="width: 75%;">
                                    75%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="my-projects">
        <h2 class="h1 text-center">My projects</h2>
        <p class="text-center">These are some projects that I did in my career as a front-end web developper or a UI/UX designer</p>
        <section class="portofolio">
            <div>
                <img src="css/imgs/curl.png" alt="">
            </div>
            <div>
                <img src="css/imgs/curl.png" alt="">
            </div>
            <div>
                <img src="css/imgs/coditor.png" alt="">
            </div>
            <div>
                <img src="css/imgs/coditor.png" alt="">
            </div>

        </section>
    </section>
    <section id="contact-me">
        <h2 class="title h1 text-center">Contact me </h2>
        <div class="container">
            <div>

                <form id="contact-me-form">
                    <div id="alert"></div>
                    <br>
                    <br>
                    <label>Your name</label>
                    <input type="text" name="name">
                    <label>Your e-mail address</label>
                    <input type="text" name="email">
                    <label>Your e-mail message</label>
                    <textarea name="message"></textarea>
                </form>
                <button class="send" id="send">
                    Send
                </button>
                <div class="h1 text-center" style="margin-top: 30px;color: #24943e;">OR</div>
                <div class="text-center" >Contact me in this email address: <strong>loqman.ouagague@gmail.com</strong></div>
            </div>
            <div>
                <img src="css/imgs/enelope-illustration.svg" alt="" class="resp-img" />
            </div>
        </div>
    </section>
    <footer>
        <img src="css/imgs/wave.svg"  alt="">
        <div class="container">
            <div>All copyrights are reserved &copy; <?php echo date('Y'); ?></div>
            <div>Designed and Programmed by Loqman Ouagague</div>
        </div>
    </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>