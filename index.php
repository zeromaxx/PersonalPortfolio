<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/c93712fc6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
</head>

<body>
    <div class="sidebar">
        <ul>
            <li class="list"><a class="links" href="#home">HOME</a></li>
            <li class="list"><a class="links" href="#about">ABOUT ME</a></li>
            <li class="list"><a class="links" href="#skills">SKILLS</a></li>
            <li class="list"><a class="links" href="#projects">PROJECTS</a></li>
            <li class="list"><a class="links" href="#contact">CONTACT</a></li>
        </ul>
        <div class="sidebar-footer">
            <p>&copy; Aris Lamprinidis</p>
            2022 all rights reserved
        </div>
    </div>
    <div class="hiddenNav">
        <div>
            <h3>Aristeidis Lamprinidis</h3>
            <img class="menu-icon" width="25px" src="./Images/menu.svg" alt="">
        </div>
    </div>
    <div class="wrapper">
        <section id="home" class="main-img-wrapper">
            <div class="main-img-text">
                <img class="main-img" src="./Images/pc.jpg" alt="">
                <div class="main-img-content">
                    <p>HELLO, I'M</p>
                    <h2 style="color: #FFB03A">ARIS</h2>
                    <h2 style="color: #FFB03A">LAMPRINIDIS</h2>
                    <div class="main-img-job-title">
                        <h3>Web Developer</h3>
                    </div>
                    <a class="links hire-me-btn" href="#contact">Hire Me</a>
                </div>
                <!-- <div class="overlay"></div> -->
            </div>
        </section>
        <section id="about" class="about-me-wrapper">
            <h2>About Me</h2>
            <div class="about-me-wrapper-1">
                <div>
                    <img class="avatar-img" src="./Images/face1.jpg" alt="about-image">
                </div>
                <div class="about-me-info">
                    <h4>Who am i?</h4>
                    <h3>I'm Aris Lamprinidis, a Web <br> Developer</h3>
                    <p>I am a web developer based in Athens and I help organizations <br>
                        leverage software technologies by turning their ideas into well-developed <br> solutions for
                        their
                        business problems. Take a look at my portfolio work and lets <br> see if we can work together on
                        your
                        next project.</p>
                    <div class="about-me-info-1">
                        <h5>Github: <span><a target="_blank" href="https://github.com/zeromaxx"><img width="25px" src="./Images/github.svg" alt="github"></a></span></h5>

                    </div>
                    <h5>LinkedIn: <span><a target="_blank" href="https://www.linkedin.com/in/aris-lamprinidis-aa7b81236/"><img width="25px" src="./Images/linkedin.svg" alt=""></a></span></h5>
                    <h5>Phone: <span style="font-weight: 400;">6937040151</span></h5>
                    <a href="#projects" class="download-btn">Check Out My Projects</a>

                </div>

            </div>

        </section>
        <section id="skills" class="grey-section">
            <div class="skills-wrapper scroll-active">
                <div class="skills-desc">
                    <h2>Skills</h2>
                    <p style="margin-top: 2rem;">I am a creative problem solver. I build fullstack web applications. I
                        have highlighted my key
                        technical skills that <br>
                        I will bring to your project.</p>
                    <div class="skills-container">
                        <div>
                            <i class="devicon-csharp-plain colored"></i>
                            <h3>C# Development</h3>
                            <p>I use C# on a daily basis to build websites. You can see examples of my work in the
                                projects section.</p>
                        </div>
                        <div>
                            <i class="devicon-html5-plain colored"></i>
                            <i class="devicon-css3-plain colored"></i>
                            <i class="devicon-javascript-plain colored"></i>
                            <h3>Front End Development</h3>
                            <p>I use HTML, CSS, Javascript to build attractive responsive websites.</p>
                        </div>
                        <div>
                            <i class="devicon-dot-net-plain colored"></i>
                            <h3>.NET MVC</h3>
                            <p>My go to framework for full stack web development.</p>
                        </div>
                    </div>
                    <div class="skills-container">
                        <div>
                            <img width="50px" src="./Images/pngwing.com.jpg" alt="">
                            <h3 style="margin-top: 1.3rem;">Database Development</h3>
                            <p>Database Development is critical to most projects. I use SQL to query data from the
                                database.</p>
                        </div>
                        <div>
                            <i class="devicon-bootstrap-plain colored"></i>
                            <h3>Bootstrap</h3>
                            <p>The look and feel are very important elements to any project. I use bootstrap to bring a
                                gorgeous design to your project.</p>
                        </div>
                        <div>
                            <i class="devicon-react-original colored"></i>
                            <h3>React</h3>
                            <p>I use React to build high performance websites. You can see examples of my work in the
                                projects section.</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="projects" class="projects-wrapper">
            <h2>My Projects</h2>
            <p style="margin-top: 1rem;">Showcasing complete projects demonstrates what I can bring to your project.</p>
            <div class="projects-container">
                <div class="project-1">
                    <img height="100%" style="object-fit: cover;" src="./Images/project-img.jpg" alt="project-img">
                    <h3>CyberStore</h3>
                    <p>An e-commerce website that allows users to buy computer hardware parts.</p>
                    <div class="project-links-container">
                        <a class="more-info-link modal-btn">More Info</a>
                        <div class="tooltip">
                            <a href="https://github.com/zeromaxx/Cyberstore" target="_blank"><img class="git-link" src="./Images/git-black.jpg" alt="github-img"></a>
                            <span class="tooltiptext">
                                <h5>View Source Code</h5>
                            </span>
                        </div>
                        <a target="_blank" class="demo-link" href="http://arislamprinidis-001-site1.atempurl.com/">Live
                            Demo</a>

                    </div>
                </div>
                <div class="project-1">
                    <img src="./Images/topNews.jpg" alt="project-img">
                    <h3>Top News</h3>
                    <p>Top News provides information about the latest news <br>around the world.</p>
                    <div class="project-links-container">
                        <a class="more-info-link modal-btn-2">More Info</a>
                        <div class="tooltip">
                            <a href="https://github.com/zeromaxx/topNews" target="_blank"><img class="git-link" src="./Images/git-black.jpg" alt="github-img"></a>
                            <span class="tooltiptext">
                                <h5>View Source Code</h5>
                            </span>
                        </div>
                        <a target="_bkank" class="demo-link" href="https://topnews-production.up.railway.app/">Live
                            Demo</a>
                    </div>
                </div>
            </div>
            <div class="modal-overlay">
                <div class="modal-container">
                    <div class="modal-container-1">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="./Images/pro1.jpg">
                                <div class="text">Admin Dashboard</div>
                            </div>

                            <div class="mySlides fade">
                                <img src="./Images/pro2.jpg">
                                <div class="text">Shop</div>
                            </div>

                            <div class="mySlides fade">
                                <img src="./Images/pro3.jpg">
                                <div class="text">Order Details</div>
                            </div>
                            <div class="mySlides fade">
                                <img src="./Images/pro4.jpg">
                                <div class="text">Cart</div>
                            </div>
                            <div class="mySlides fade">
                                <img src="./Images/pro5.jpg">
                                <div class="text">Build Your Custom Desktop</div>
                            </div>


                            <div style="text-align: center;margin-top: 0.5rem;">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                                <span class="dot" onclick="currentSlide(4)"></span>
                                <span class="dot" onclick="currentSlide(5)"></span>
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <div class="project-info">
                            <h1>CyberStore</h1>
                            <p style="margin-top: 1rem;">This project was build during the time I was attending
                                Bootcamp. The team consisted of me and four other developers. I was in charge for the
                                front
                                end.</p>
                            <p>Our app provides a fully functional <b>login system</b> and implements <b>two roles</b>.
                                The roles of <b>admin</b> and <b>customer</b>. Users have the
                                option to <b>favourite products</b> , add them to <b>cart</b> and <b>pay</b> for them.
                                Once we complete an order we have the option to view previous <b>order details</b> and
                                the payment that was used. <b>Admin</b> has his own <b>dashboard</b>, where he can
                                analyze the performance of the website with the help of <b>charts</b>, <b>insert new
                                    products</b> and change user roles.</p>
                            <p>Cyberstore is built with ASP.NET MVC, C# and SQL. The front end was built with HTML CSS
                                and Javascript. The database was built with SQL Server. Please visit the site and try it
                                out.</p>
                            <h3>Technologies:</h3>
                            <p>C#, SQL, ASP.Net MVC, HTML, CSS, Javascript, Jquery</p>

                        </div>
                        <button class="close-btn">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal-overlay-2">
                <div class="modal-container">
                    <div class="modal-container-1">
                        <div style="margin-right: 2rem;" class="slideshow-container">
                            <div class="mySlides-1 fade">
                                <img style="max-height:280px;object-fit: contain;" width="100%" src="./Images/homeNews.jpg">
                                <div class="text">Home</div>
                            </div>

                            <div class="mySlides-1 fade">
                                <img style="max-height:280px;object-fit: contain;" width="100%" src="./Images/newsSearch.jpg">
                                <div class="text">Search News</div>
                            </div>

                            <div style="text-align: center;margin-top: 0.5rem;">
                                <span class="dot-1" onclick="currentSlide1(1)"></span>
                                <span class="dot-1" onclick="currentSlide1(2)"></span>
                            </div>
                            <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides1(1)">&#10095;</a>
                        </div>
                        <div style="letter-spacing: 0.5px;" class="project-info">
                            <h1>Top News</h1>
                            <p>
                                Top News is a website for retrieving the latest news around the world. The
                                project's purpose was to test my overall knowledge in React and API.
                            </p>
                            <p>The data is being obtained from <b><a href="https://developer.nytimes.com/apis/" style="color: black;" target="_blank">https://developer.nytimes.com/apis</a></b>. Apart from showing
                                the news, we
                                have the option to <b>filter news</b> we are not interested in. Finally our website with
                                the help of the API provides a fully functional <b>search system</b>, for searching
                                international news. Please visit the site and try it out.</p>
                            <h3>Technologies:</h3>
                            <p>React, HTML, CSS, Javascript</p>

                        </div>
                        <button class="close-btn-2">&times;</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="grey-section-1">
            <div class="contact-wrapper">
                <h2>CONTACT</h2>

                <h3>LET'S KEEP IN TOUCH</h3>
                <p>If you liked my work, send me an email.</p>
                <div class="contact-form-container">
                    <div class="conact-form-icon">
                        <div class="contact-email-icon">
                            <img width="50px" src="./Images/mail-envelope.svg" alt="">
                            <div>
                                <h3>EMAIL</h3>
                                <span>arislamprinidis@yahoo.com</span>
                            </div>
                        </div>
                        <div class="contact-email-icon">
                            <img width="50px" src="./Images/smartphone-outline.svg" alt="">
                            <div>
                                <h3>PHONE</h3>
                                <span>6937040151</span>
                            </div>
                        </div>

                        <div class="social-data">
                            <h3>I???M IN THE SOCIAL NETWORKS</h3>
                            <a target="_blank" href="https://www.linkedin.com/in/aris-lamprinidis-aa7b81236/">
                                <img width="40px" src="./Images/linkedin2.svg" alt="linkedin-icon">
                            </a>

                        </div>
                    </div>
                    <form method="post" class="contact-form" action="send-email.php">
                        <input id="name-text" required placeholder="Your name" name="name" type="text">
                        <textarea id="msg-text" required name="message" placeholder="Your message"></textarea>
                        <button id="submitBtn" type="submit">SEND</button>
                    </form>
                </div>
            </div>
            <p class="email-sent"></p>
        </section>
    </div>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        const submitBtn = document.querySelector('#submitBtn');
        $(document).ready(() => {
            $('.email-sent').hide();
            $(".contact-form").submit(function(e) {
                e.preventDefault();
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.5';
                $.ajax({
                    method: "post",
                    url: "send-email.php",
                    data: {
                        name: $('#name-text').val(),
                        message: $('#msg-text').val()
                    },
                    success: function(response) {
                        $('.email-sent').show();
                        $(".contact-form").trigger("reset");
                        submitBtn.disabled = false;
                        submitBtn.style.opacity = '1';
                        $('.email-sent').text('Message sent, thank you!');
                        setTimeout(() => {
                            $('.email-sent').hide();
                        }, 3000);

                    }
                });
            });
        })
    </script>
</body>

</html>