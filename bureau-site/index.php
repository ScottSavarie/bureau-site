<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>  <![endif]-->
<html class='no-js'>
  <!-- <![endif] -->
  <head>
    <script src='js/modules/modernizr.custom.js'></script>
    <meta charset='utf-8'>
    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Bureau - Home</title>
    <meta content='' name='description'>
    <meta content='width=device-width' name='viewport'>
    <meta content='yes' name='apple-mobile-web-app-capable'>
    <meta content='yes' name='apple-touch-fullscreen'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='css/style.css' rel='stylesheet'>
    <link href='webfonts/ss-social.css' rel='stylesheet'>
  </head>
  <body class='page-home'>



    <nav class='nav-bg l-module' id='nav-fixed'>
      <span class='red-bar'></span>
      <div class='l-container--full nav-wrap'>
        <div class='nav-bar'>
          <a class ="language" href ="#">Français</a>
          <a class="logo" href="index.html"><h1>Bureau</h1></a>
          <div class='nav-btn' id='navtoggle'>
            <span class='nav-icon'></span>
            <span class='nav-icon'></span>
            <span class='nav-icon'></span>
          </div>
        </div>
        <div class='nav-container nav-hidden'>
          <ul class='nav-links'>
            <li>
              <a class="page-work__link" href="work.html">Work</a>
            </li>
            <li>
              <a class="page-profile__link" href="profile.html">Profile</a>
            </li>
            <li>
              <a class="page-services__link" href="services.html">Services</a>
            </li>
            <li>
              <a class="page-blog__link" href="blog.html">Blog</a>
            </li>
            <li>
              <a class="page-contact__link" href="#contact-wrap" >Contact</a>
            </li>
          </ul>
          <ul class='nav-social ss-icon'>
            <li>
              <a href="http://www.twitter.com/bureaugroup" target="blank">twitter</a>
            </li>
            <li>
              <a href="http://www.facebook.com/bureaugroup" target="blank">facebook</a>
            </li>
            <li>
              <a href="https://plus.google.com/111226183375551688410/" target="blank">google+</a>
            </li>
            <li>
              <a href="http://www.linkedin.com/company/2904088" target="blank">linkedin</a>
            </li>
            <li>
              <a href="http://www.youtube.com/channel/UC7SElPeEBqy-q1ifcKVkbqg/" target="blank">youtube</a>
            </li>
            <li>
              <a href="http://www.pinterest.com/bureaugroup/" target="blank">pinterest</a>
            </li>
            <li>
              <a href="http://www.instagram.com/bureaugroup" target="blank">instagram</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class='nav-fixed-fix'></div>
    <section class='l-module--spaced' id='contact-wrap'>
  <div class='l-container--narrow contact-bg'>
    <h1 class='header--grey txt-center'>Get in touch</h1>
    <form action='contact-form-handler.php' data-error-container='#contactform-errors' data-validate='parsley' id='contact-form' method='post' novalidate=''>
      <fieldset>
        <input class='input-field' data-error-message='We need your name!' name='name' placeholder='Your full name' required='required' type='name'>
        <input class='input-field' data-error-message="Hey, what's with your email?" name='email' placeholder='Your email address' required='required' type='email'>
        <input class='input-field' name='tel' placeholder='Your phone number' type='tel'>
        <input class='input-field' name='text' placeholder='Your company' type='text'>
        <textarea class='input-field--message' data-error-message='You gotta tell us something!' name='message' placeholder='Tell us more…' required='required'></textarea>
        <input class='btn-primary' id='submit' name='submit' type='submit' value='Submit'>
      </fieldset>
    </form>
    <div class='contact-details-container'>
      <div id='contactform-errors'></div>
    </div>
    <div class='contact-details-container'>
      <a class='contact-map' href='http://goo.gl/maps/fLbOM' target='blank'>
        <div class='contact-pin-wrap'>
          <div class='contact-pin'>
            <img class='bureau-office' src='img/bureau-office.jpg'>
            <ul class='bureau-address'>
              <li class='bureau-title'>Bureau</li>
              <li class='bureau-address-list'>170 Elgin St.,</li>
              <li class='bureau-address-list'>Sudbury Ontario P3E 3N5</li>
            </ul>
          </div>
        </div>
        <img class='map-image' src='img/bureau-map.jpg'>
      </a>
      <ul class='contact-list'>
        <li>
          <a href='mailto:hello@bureau.ca'>
            <span>hello@bureau.ca</span>
          </a>
        </li>
        <li>
          <span class='txt-bold t'>T</span>
          <span>705 586 3189</span>
        </li>
        <li>
          <span class='txt-bold tf'>TF</span>
          <span>877 586 3189</span>
        </li>
        <li>
          <span class='txt-bold t'>F</span>
          <span>705 586 3197</span>
        </li>
      </ul>
    </div>
    <span class='close-trigger' id='close-trigger'>
      ×
    </span>
  </div>
</section>
    <div id='header-cover'>
      <section class='l-module'>
        <div class='l-container--full' id='video-trigger'>
          <div class='header-video-wrapper'>
            <div class='video-mask'>
              <img height='845' src='img/bureau-intro.svg' width='1500'>
            </div>
            <img class='video-poster-header' height='614' src='img/video-poster2.jpg' width='1389'>
            <div id='video-loader'></div>
          </div>
          <h2 class='home-introtext'>Today's marketplace demands bold moves. You may have a great product or service, but if your customers can’t find it they'll be forced to go elsewhere.</h2>
        </div>
      </section>
      <div class='l-module'>
        <div class='l-container arrow-wrap'>
          <div class='home-arrow' id='home-arrow'>
            <img height='48' src='img/home-arrow.svg' width='48'>
          </div>
        </div>
      </div>
    </div>
    <section class='l-module--spaced grey-bg' id='specialty'>
      <div class='l-container'>
        <header class='txt-center'>
          <h1 class='header--red'>We specialize in the business of:</h1>
        </header>
        <article class='specialty specialty-search' id='specialty-one'>
          <img height='140' src='img/home-search.svg' width='140'>
          <h2 class='subhead--grey'>Getting you found</h2>
          <p>With extensive <a href="services.html">web design</a>, <a href="services.html">web development</a>, <a href="services.html">responsive design</a>, <a href="services.html">search engine optimization</a>, and <a href="services.html">social marketing services</a>, we will help you get found, drive traffic, and rise you above your competition.</p>
          <div class='dotted-arrow'></div>
        </article>
        <article class='specialty' id='specialty-two'>
          <img class='specialty-market' height='140' src='img/home-market.svg' width='140'>
          <h2 class='subhead--grey'>Marketing your product</h2>
          <p>You may have a great product or service, but it takes a strategy and a wide array of supporting services to reach your customer. With a combination of <a href="services.html">branding</a>, <a href="services.html">traditional marketing</a>, <a href="services.html">digital marketing</a>, and <a href="services.html">social marketing</a>, we can get you where you need to be.</p>
          <div class='dotted-arrow'></div>
        </article>
        <article class='specialty' id='specialty-three'>
          <img height='140' src='img/home-money.svg' width='140'>
          <h2 class='subhead--grey'>Making you more money</h2>
          <p>With everything in place, your message will be received by the right audience, your traffic will increase and your sales will grow. We create results for our clients.</p>
          <p><a href="services">Sounds good? Of course it does.</a></p>
        </article>
      </div>
    </section>
    <section class='l-module--spaced border-bottom'>
      <div class='l-container'>
        <div class='video-wrapper'>
          <iframe id="videotarget" class="home-video" src="" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
          <div id='videotrigger'>
            <img height='720' src='img/video-poster.jpg' width='1280'>
          </div>
        </div>
      </div>
    </section>
    <section class='l-module--spaced'>
      <div class='l-container--list'>
        <h1 class='header--grey txt-center'>
          <a class='grey-link' href='work.html'>
            <span>Our work</span>
          </a>
        </h1>
        <ul class='project-thumbnails'>
          <li class='palladino'>
            <a href='#'>
              <img height='257' src='img/logos/palladinoautogroup.svg' width='397'>
            </a>
          </li>
          <li class='lu'>
            <a href='#'>
              <img height='257' src='img/logos/laurentianuniversity.svg' width='397'>
            </a>
          </li>
          <li class='musagetes'>
            <a href='musagetes.html'>
              <img height='257' src='img/logos/musagetesfoundation.svg' width='397'>
            </a>
          </li>
          <li class='helios'>
            <a href='#'>
              <img height='257' src='img/logos/helios.svg' width='397'>
            </a>
          </li>
          <li class='carte'>
            <a href='#'>
              <img height='257' src='img/logos/carteblanchefilms.svg' width='397'>
            </a>
          </li>
          <li class='bird'>
            <a href='#'>
              <img height='257' src='img/logos/birdkingdom.png' width='397'>
            </a>
          </li>
          <li class='carrefour'>
            <a href='#'>
              <img height='257' src='img/logos/carrefour.svg' width='397'>
            </a>
          </li>
          <li class='tno'>
            <a href='#'>
              <img height='257' src='img/logos/tno.svg' width='397'>
            </a>
          </li>
          <li class='fcr'>
            <a href='#'>
              <img height='257' src='img/logos/fcr.svg' width='397'>
            </a>
          </li>
        </ul>
      </div>
      <div class='l-container--wide txt-center more-work'>
        <a href="work.html">See more of our work</a>
      </div>
    </section>
    <section class='l-module--spaced border-top'>
      <div class='l-container--list blog-module'>
        <h1 class='header--grey txt-center'>
          <a class='grey-link' href='#'>
            <span>From the blog</span>
          </a>
        </h1>
           <?php
            $request_url = 'http://finlay.tumblr.com/api/read?type=post&start=0&num=1';
            $xml = simplexml_load_file($request_url);
            $title = $xml->posts->post->{'regular-title'};
            $post = $xml->posts->post->{'regular-body'};
            $link = $xml->posts->post['url'];
            $small_post = substr($post,0,320);
            echo '<a class="blog-teaser-link" href='.$link.'>';
            echo '<article class="blog-teaser">';
            echo '<h2 class="header--red">'.$title.'</h2>';
            echo '<p>'.$small_post.'</p>';
            echo '</article>';
            echo '</a>';
            ?>

        <a class='blog-teaser-link' href='#'>
          <article class='blog-teaser'>
            <h2 class='header--red'>Redefining user experience</h2>
            <time class="blog-date" datetime="2013-03-04">March 4th, 2013</time>
            <p>In Late 2010, Pelmorex Media Inc came to Teehan+Lax and tasked us with designing an iPad application for the Weather Network Canada’s m and International.</p>
          </article>
        </a>
      </div>
    </section>
    <section class='project-crosslink'>
      <a class=" border-top" href="worksheet.html">Get in touch to start your project.</a>
    </section>
    <footer class='l-module--wide border-top'>
      <div class='l-container'>
        <div class='social-module'>
          <div class='facebook-btn'>
            <div class="fb-like" data-href="http://www.facebook.com/bureaugroup" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
          </div>
          <div class='twitter-btn'>
            <a href="https://twitter.com/bureaugroup" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @bureaugroup</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
          <div class='gplus-btn'>
            <div class="g-plusone"></div>
            <script>(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
          </div>
        </div>
        <div class='mailing-list'>
          <div id="mc_embed_signup"><form action="http://bureaugroup.us6.list-manage1.com/subscribe/post?u=17df770b3c8d60a832042045e&amp;id=8ab0e97015" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate><label for="mce-EMAIL">Bulletin</label><input type="email" value="" name="EMAIL" class="email input-field" id="mce-EMAIL" placeholder="Your email address" required><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-secondary"></form></div>
        </div>
        <div class='contact-info'>
          <address>
            <span class="txt-bold">Bureau</span> <a class="grey-link" href="http://goo.gl/maps/fLbOM" target="blank">Elgin St., Sudbury Ontario P3E 3N5</a><div class="tel-email"><span class="footer-tel">705 586 3189</span><a href="mailto:hello@bureau.ca">hello@bureau.ca</a></div>
          </address>
        </div>
      </div>
    </footer>
    <script src='js/modules/jquery-1.8.3.min.js'></script>
    <script src='js/modules/log-polyfill.js'></script>
    <script src='js/modules/placeholder.js'></script>
    <script src='js/modules/parsley.js'></script>
    <script src='js/modules/respond.min.js'></script>
    <script src='js/modules/ss-social.js'></script>
    <script src='js/main.js'></script>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- / :javascript -->
    <!-- /   var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; -->
    <!-- /   (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0]; -->
    <!-- /   g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js'; -->
    <!-- /   s.parentNode.insertBefore(g,s)}(document,'script')); -->
  </body>
</html>
