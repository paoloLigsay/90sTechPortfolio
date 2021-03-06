<?php
/**
* Template Name: index
*
*/
?>



<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=11" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Paolo Ligsay | Portfolio </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
</head>

<body>
  <div class="pml-loader">
    <img src="<?php echo get_template_directory_uri(); ?>/img/computer-front.ico" alt="computer" class="pml-loader__icon">
    <p class="pml-loader__text">
      retrieving data
      <span class="pml-loader__blink">...</span>
    </p>
  </div>
  <div class="pml">
    <div class="pml-mainvisual">
      <img class="pml-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="pml logo" />
      <div class="navigation">
        <div class="navigation__bar navigation__bar--1"></div>
        <div class="navigation__bar navigation__bar--2"></div>
        <div class="navigation__bar navigation__bar--3"></div>
      </div>
      <div class="navigation-content">
        <div class="navigation-content__list">
          <a class="navigation-content__item" href="#personal-projects">
            <p>Projects</p>
            <img class="navigation__icon" src="<?php echo get_template_directory_uri(); ?>/img/computer.ico" alt="computer icon" />
          </a>
          <a class="navigation-content__item" href="#archive-projects">
            <p>Archive</p>
            <img class="navigation__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder-with-paper.ico" alt="computer icon" />
          </a>
          <a class="navigation-content__item" href="#profile">
            <p>About me</p>
            <img class="navigation__icon" src="<?php echo get_template_directory_uri(); ?>/img/notepad.ico" alt="computer icon" />
          </a>
          <a class="navigation-content__item" href="#contact">
            <p>Get in touch</p>
            <img class="navigation__icon" src="<?php echo get_template_directory_uri(); ?>/img/computer-with-earth.ico" alt="computer icon" />
          </a>
        </div>
      </div>
      <div class="pml-links">
        <a href="https://github.com/paoloLigsay/" target="_blank" class="pml-links__item">
          <img class="pml-links__item-img" src="<?php echo get_template_directory_uri(); ?>/img/github-icon.png" alt="link icon" />
        </a>
        <a href="https://gitlab.com/Paololigsay" target="_blank" class="pml-links__item">
          <img class="pml-links__item-img" src="<?php echo get_template_directory_uri(); ?>/img/gitlab-icon.png" alt="link icon" />
        </a>
        <a href="https://codepen.io/paololigsay" target="_blank" class="pml-links__item">
          <img class="pml-links__item-img" src="<?php echo get_template_directory_uri(); ?>/img/codepen-icon.png" alt="link icon" />
        </a>
      </div>
      <div class="pml-mainvisual__container">
        <h2 class="pml-mainvisual__text pml-mainvisual__text--name">PAOLO LIGSAY</h2>
        <p class="pml-mainvisual__text pml-mainvisual__text--job-title">
          FR<span class="pml-blink">O</span>NT END ENGINEER
        </p>
        <P class="pml-mainvisual__text">
          I develop unique and user friendly web applications and also do web design from time to time. I am a front end engineer based
          in Philippines whose looking forward to work with the best and creative people there is!
        </P>
        <a href="#contact">
          <div class="button">GET IN TOUCH</div>
        </a>
        <a class="pml-scroll" href="#personal-projects">
          <div class="pml-scroll__circle"></div>
        </a>
      </div>
    </div>
    <div class="pml-sections" id="personal-projects">
      <h2 class="pml__text pml__text--title">
        MY PROJ<span class="pml-blink">E</span>CTS
      </h2>
      <p class="pml__text pml__text--subtitle">created for the Community</p>
      <div class="pml-sections__inner">
        <div class="pml-personal__container">
          <div class="pml-personal__img-container">
            <img class="pml-personal__img" src="<?php echo get_template_directory_uri(); ?>/img/nutrition_project.jpg" alt="nutrition project image" />
          </div>
          <div class="pml-personal__info">
            <div class="pml-personal__info-container">
              <p class="pml__text pml__text--18 pml-personal__info-project">PERSONAL PROJECT</p>
              <p class="pml__text pml__text--45 pml-personal__info-project pml-personal__info-project-name">The Nutri Project</p>
              <p class="pml__text">
                A web application created for people who want to track the calories, protein and fats of the food they were eating.
              </p>
              <div class="pml-personal__info-list">
                <p class="pml__text pml__text--14">JS [es6]</p>
                <p class="pml__text pml__text--14">nutri API</p>
              </div>
              <a class="pml-personal__info-project-link" href="https://thecreativesdaily.com/theNutriProject/" target="_blank">thecreativesdaily.com/theNutriProject</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pml-sections" id="archive-projects">
      <h2 class="pml__text pml__text--title">
        CONTR<span class="pml-blink">I</span>BUTED TO
      </h2>
      <p class="pml__text pml__text--subtitle">projects I created with different amazing teams</p>
      <div class="pml-sections__inner">
        <ul class="pml-project__list">
          <li class="pml-project">
            <img class="pml-project__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder.ico" alt="folder icon" />
            <h3 class="pml__text pml__text--55">Timely</h3>
            <p class="pml__text pml__text--25">a website created for a company who helps buisness improve sales efficiency</p>
            <p class="pml__text pml__text--25 pml-project__date">2020</p>
            <div class="pml-project__img-container">
              <a href="https://upward-test.sakura.ne.jp/timely/" target="_blank">
                <div class="button button--colored">CHECK WEBSITE</div>
              </a>
              <img class="pml-project__img" src="<?php echo get_template_directory_uri(); ?>/img/timely.jpg" alt="timely image" />
            </div>
          </li>
          <li class="pml-project">
            <img class="pml-project__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder.ico" alt="folder icon" />
            <h3 class="pml__text pml__text--55">One Max</h3>
            <p class="pml__text pml__text--25">We created a website with a cool comic based design created by japanese designers</p>
            <p class="pml__text pml__text--25 pml-project__date">2020</p>
            <div class="pml-project__img-container">
              <a href="https://1max.jp/" target="_blank">
                <div class="button button--colored">CHECK WEBSITE</div>
              </a>
              <img class="pml-project__img" src="<?php echo get_template_directory_uri(); ?>/img/1max.jpg" alt="one max image" />
            </div>
          </li>
          <li class="pml-project">
            <img class="pml-project__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder.ico" alt="folder icon" />
            <h3 class="pml__text pml__text--55">Shouken</h3>
            <p class="pml__text pml__text--25">
              A project created for a house inspection company based in japan to reach more customers and to get in touch with them easily.
            </p>
            <p class="pml__text pml__text--25 pml-project__date">2020</p>
            <div class="pml-project__img-container">
              <a href="http://shouken-p.com/j-flora/" target="_blank">
                <div class="button button--colored">CHECK WEBSITE</div>
              </a>
              <img class="pml-project__img" src="<?php echo get_template_directory_uri(); ?>/img/shouken_flora.jpg" alt="shouken floura image" />
            </div>
          </li>
          <li class="pml-project">
            <img class="pml-project__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder.ico" alt="folder icon" />
            <h3 class="pml__text pml__text--55">Daitoo</h3>
            <p class="pml__text pml__text--25">
              This project is created in wordpress with our own theme made by filipino developers and japanese designers
            </p>
            <p class="pml__text pml__text--25 pml-project__date">2020</p>
            <div class="pml-project__img-container">
              <a href="https://daitoo.co.jp/wordpress/" target="_blank">
                <div class="button button--colored">CHECK WEBSITE</div>
              </a>
              <img class="pml-project__img" src="<?php echo get_template_directory_uri(); ?>/img/daitoo.jpg" alt="daitoo image" />
            </div>
          </li>
          <li class="pml-project">
            <img class="pml-project__icon" src="<?php echo get_template_directory_uri(); ?>/img/folder.ico" alt="folder icon" />
            <h3 class="pml__text pml__text--55">Nishio Setsubi</h3>
            <p class="pml__text pml__text--25">
              A company that performs air conditioning equipment contsruction for offices, factories and public facilities.
            </p>
            <p class="pml__text pml__text--25 pml-project__date">2019</p>
            <div class="pml-project__img-container">
              <a href="https://nishio-setsubi.com/" target="_blank">
                <div class="button button--colored">CHECK WEBSITE</div>
              </a>
              <img class="pml-project__img" src="<?php echo get_template_directory_uri(); ?>/img/nishio.jpg" alt="daitoo image" />
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="pml-sections" id="profile">
      <h2 class="pml__text pml__text--title">
        PR<span class="pml-blink-underscore">&nbsp;</span>FILE
      </h2>
      <p class="pml__text pml__text--subtitle">Things you might want to know!</p>
      <div class="pml-sections__inner">
        <div class="pml-about__flex">
          <div class="pml-about__info">
            <p class="pml__text pml__text--25">
              Hi there! I am Paolo Martin Ligsay, a Front end engineer with great enthusiasm towards design and creativty.
            </p>
            <br />
            <p class="pml__text pml__text--25">
              I work passionately and will continue to learn about the dos and don'ts of web development and we'll surely expand the knowledge
              I have through research and experience.
            </p>
          </div>
          <img class="pml-about__img" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="profile image" />
        </div>
      </div>
    </div>
    <div class="pml-sections" id="contact">
      <h2 class="pml__text pml__text--title">GET IN TOUCH</h2>
      <p class="pml__text pml__text--subtitle">
        If you're interested in working with me
        <br />or if you have any question, please drop a message below
      </p>
      <div class="pml-sections__inner">
        <div class="pml-contact">
          <input class="pml-contact__input" placeholder="your name ..." name="name" />
          <input class="pml-contact__input" placeholder="your email ..." name="email" />
          <textarea class="pml-contact__message" placeholder="your message ...." name="content"></textarea>
          <a href="#">
            <div class="button">Submit</div>
          </a>
        </div>
      </div>
    </div>
    <div class="pml__text pml__text--portfolio">&lt;/portfolio&gt;</div>
    <div class="pml__footer">
      <div class="pml__text">
        Developed and Designed by
        <span>Paolo Martin Ligsay</span>
      </div>
      <a class="pml__text pml__text--toGithub" href="https://github.com/paoloLigsay/90sTechPortfolio" target="_blank">
        <span>Fork in GITHUB</span>
      </a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/index.js" defer></script>
</body>
</html>