<?php
$title = "Simple product";
$h1_header = "Product name";
$li_main_menu = "<li>Put on this page information about your product</li>
                 <li>A detailed description of your product</li>
                 <li>Tell us about the advantages and merits</li>
                 <li>Associate the page with the payment system</li>";
$h2_about = "About your product";
$p_about_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis facilis fuga, illo at. Natus eos, eligendi illum rerum omnis porro ex, magni, explicabo veniam incidunt in quam sapiente ut ipsum.";
$p_about_2 = "Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde per&shy;ferendis nemo debitis dolor.";
$h2_pluses = "Dignity and pluses product";
$pluses_details = "<summary>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</summary>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, mollitia debitis minima nulla commodi laboriosam in nisi ut sed, quisquam deleniti nobis quo esse necessitatibus itaque. Eligendi laborum consectetur corporis.</p>";
$h2_screenshots = "Screenshots";
$screenshots_figcaption = "<h3>The description for the image</h3>
                            <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>";
$rewiew_box = '<div class="circle"></div>
                        <div class="reviews-text">
                            <p>Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehen&shy;derit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                            <span class="review-author">Lourens S.</span>
                        </div>';
$h2_buy = "Buy it now";
$buy_li_1 = "<li>Porro officia cumque sint deleniti;</li>
            <li>Тemo facere rem vitae odit;</li>
            <li>Cum odio, iste quia doloribus autem;</li>
            <li>Aperiam nulla ea neque.</li>";
$buy_li_2 = "<li>Porro officia cumque sint deleniti;</li>
            <li>Тemo facere rem vitae odit;</li>
            <li>Cum odio, iste quia doloribus autem;</li>
            <li>Aperiam nulla ea neque.</li>";
$buy_li_3 = "<li>Porro officia cumque sint deleniti;</li>
            <li>Тemo facere rem vitae odit;</li>
            <li>Cum odio, iste quia doloribus autem;</li>
            <li>Aperiam nulla ea neque.</li>";
$p_skype = "here_your_login_skype";
$p_icq = "279679659";
$p_email = "psdhtmlcss@mail.ru";
$p_phone = "80 00 4568 55 55";
$footer_copiright = "Copyright &copy; 2014 Product name · PSD HTML CSS";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <div class="top">
        <header>
            <div class="product-name">
                <h1> <?= $h1_header ?> </h1>
                <ul>
                   <?= $li_main_menu ?>
                </ul>
            </div>
            <img src="img/engine.JPG" alt="Изображение товара">
        </header>
        <section>
            <article class="about">
                <div>
                    <h2> <?= $h2_about ?> </h2>
                    <p> <?= $p_about_1 ?> </p>
                    <p> <?= $p_about_2 ?> </p>
                </div>
                <video controls="controls">
                    <source src="video/videoplayback.webm"> 
                    <source src="video/videoplayback.webm"> 
                </video>
            </article>
            <article class="pluses">
                <h2> <?= $h2_pluses ?> </h2>

                <div class="pluses-box">
                    <details> <?= $pluses_details ?> </details>
                    <details> <?= $pluses_details ?> </details>
                    <details> <?= $pluses_details ?> </details>
                    <details> <?= $pluses_details ?> </details>
                    <details> <?= $pluses_details ?> </details>
                    <details> <?= $pluses_details ?> </details>
                </div>
            </article>
            <article class="screenshots">
                <h2> <?= $h2_screenshots ?></h2>
                <div class="figure-container">
                    <figure class="figure-box">
                        <img src="img/collector.jpg" alt="Image of the product">
                        <figcaption> <?= $screenshots_figcaption ?> </figcaption>
                    </figure>
                    <figure class="figure-box">
                        <img src="img/collector.jpg" alt="Image of the product">
                        <figcaption> <?= $screenshots_figcaption ?> </figcaption>
                    </figure>
                    <figure class="figure-box">
                        <img src="img/collector.jpg" alt="Image of the product">
                        <figcaption> <?= $screenshots_figcaption ?> </figcaption>
                    </figure>
                    <figure class="figure-box">
                        <img src="img/collector.jpg" alt="Image of the product">
                        <figcaption> <?= $screenshots_figcaption ?> </figcaption>
                    </figure>
                </div>
            </article>
            <article class="reviews">
                <h2>Reviews</h2>
                <div class="reviews-container">
                    <div class="rewiew-box"> <?= $rewiew_box ?> </div>
                    <div class="rewiew-box"> <?= $rewiew_box ?> </div>
                    <div class="rewiew-box"> <?= $rewiew_box ?> </div>
                    <div class="rewiew-box"> <?= $rewiew_box ?> </div>
                </div>
            </article>
            <article class="buy">
                <h2><?= $h2_buy ?></h2>
                <div class="buy-container">
                    <div class="buy-price">
                        <span class="buy-price-class">Standart</span>
                        <span class="buy-price-price">$100</span>
                        <div class="buy-list">
                            <ol>
                                <?= $buy_li_1 ?>
                            </ol>
                            <button>Buy</button>
                        </div>
                    </div>
                    <div class="buy-price">
                        <span class="buy-price-class">Premium</span>
                        <span class="buy-price-price">$150</span>
                        <div class="buy-list">
                            <ol>
                                <?= $buy_li_1 ?>
                                <?= $buy_li_2 ?>
                            </ol>
                            <button>Buy</button>
                        </div>
                    </div>
                    <div class="buy-price">
                        <span class="buy-price-class">Lux</span>
                        <span class="buy-price-price">$200</span>
                        <div class="buy-list">
                            <ol>
                                <?= $buy_li_1 ?>
                                <?= $buy_li_2 ?>
                                <?= $buy_li_3 ?>
                            </ol>
                            <button>Buy</button>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <footer>
        <h2>Contacts</h2>
        <div class="footer-container">
            <form action="#">
                <input type="text" placeholder="Your name:">
                <input type="email" placeholder="Your email:">
                <textarea name="comment" placeholder="Your message:"></textarea>
                <input class="submit" type="submit" value="Send">
            </form>
            <div class="contacts">
                <p class="skype"><?= $p_skype ?></p>
                <p class="icq"><?= $p_icq ?></p>
                <p class="email"><?= $p_email ?></p>
                <p class="phone"><?= $p_phone ?></p>
                <div class="icons">
                    <a href="https://twitter.com" class="icon" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com" class="icon" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" class="icon" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.google.ru" class="icon" target="_blank" title="Google">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.youtube.com" class="icon" target="_blank" title="Youtube">
                    <i class="fab fa-youtube"></i>
                   </a>
                </div>
            </div>
        </div>
        <div class="footer-copiright"> <?= $footer_copiright ?> </div>
    </footer>
</body>

</html>