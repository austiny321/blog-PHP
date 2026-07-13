<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT)-->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">EGATOR</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Vacancies</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./Images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- ========================== END OF NAV ========================== -->


    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./Images/blog1.jpg">
            </div>
            <div class="post__info">
                <a href="" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Ullam odit dolor maxime dolores accusantium beatae consequatur deserunt quo. Error quod
                        expedita, omnis provident velit soluta eveniet nobis sint! Animi, consequuntur!</a></h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat dolor in excepturi adipisci omnis
                    libero quos culpa asperiores amet sint nam, voluptate optio, quidem voluptatem, saepe vero placeat
                    nesciunt quia.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./Images/avatar2.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Jane Doe</h5>
                        <small>June 10, 2022 - 07:23</small>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================END OF FEATURED===========================-->





    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog3.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog4.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar5.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog6.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar7.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog7.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar8.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog8.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar9.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="Images/blog9.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Natus quidem perspiciatis atque officiis harum! Vitae eligendi possimus, impedit, fuga
                            quis enim quas eos et dignissimos repellat asperiores, magnam atque. Explicabo?</a></h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aliquam modi mollitia
                        reprehenderit asperiores unde, dolores quo hic corporis nesciunt. Earum corrupti saepe et iure
                        sit deserunt expedita totam fugiat.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="Images/avatar10.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </section>
    <!--================= END OF POSTS ========================-->




    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Science & Technology</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
        </div>
    </section>
    <!--================= END OF CATEGORY BUTTONS ========================-->





    <footer>
        <div class="footer__socials">
            <a href="https://youtube.com/egatortutorials" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>

        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>

                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="aboutus.html">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; 2022 EGATOR TUTORIALS</small>
        </div>
    </footer>


    <script src="./main.js"></script>
</body>

</html>
