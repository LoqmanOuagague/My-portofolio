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
    <div class="container">
        <main>
            <div class="left">
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
            <div class="right">
                <img src="css/imgs/programmer-on-a-laptop.svg" alt="a programmer on a laptop" />
            </div>
        </main>
        <div style="clear: both;"></div>
        <section id="about-me">
            <div class="left">
                <img src="./css/imgs/my-photo.jpg" alt="">
            </div>
            <div class="left">
                <h1>About me</h1>
                <p>
                    My name is Loqman Ouagague. I am a front-end developper and a UI/UX designer from Morocco. I started
                    learning programming when I was 11 years old. I have a good experience in web design that lets me
                    design beautiful websites.
                </p>
                <h2>My skills</h2>
                <ul>
                    <li>
                        <img src="css/imgs/pen-tool.svg" alt="" width="25" height="25" />
                        <span>Prototyping</span>
                    </li>
                    <li>
                        <img src="css/imgs/html5.svg" alt="" width="25" height="25" />
                        <span>HTML 5</span>
                    </li>
                    <li>
                        <img src="css/imgs/css3.svg" alt="" width="25" height="25" />
                        <span>CSS 3</span>
                    </li>
                </ul>
            </div>
        </section>
        <div style="clear: both;"></div>
        <section id="my-projects">
            <h1>My projects</h1>
            <section class="portofolio">
                <div>
                    <img src="css/imgs/curl.png" alt="">
                    <h2>Curl link shortener</h2>
                    <button>
                        <a href="./curl.php">
                            More details
                        </a>
                    </button>
                </div>
                <div>
                    <img src="css/imgs/coditor.png" alt="">
                    <h2>Coditor</h2>
                    <button>
                        <a href="./coditor.php">
                            More details
                        </a>
                    </button>
                </div>

            </section>
        </section>
        <div style="clear: both;"></div>
        <section id="contact-me">
            <h1 class="title">Contact me </h1>
            <div class="left">

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
            </div>
            <div class="right">
                <img src="css/imgs/enelope-illustration.svg" alt="" width="548" height="447" />
            </div>
        </section>

    </div>
    <script src="js/main.js"></script>
</body>

</html>