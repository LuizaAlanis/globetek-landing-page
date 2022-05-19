<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/styles/landing-page.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <title>GLOBETEK</title>
</head>

<body>
  <?php require_once('translator.php'); ?>
  <!-- Navigation -->
  <header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </header>
  <nav>
    <img class="logo" src="assets/images/logo_horizontal.png" alt="Logo" />
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fa fa-bars"></i>
    </label>
    <ul>
      <li class="select-desktop">
        <span class="dropdown">
          <button><img class="flag" src="assets/images/<?php echo $lang_flag; ?>" alt="Flag EUA"> <?php echo $lang_name; ?> <i class="bi bi-chevron-down"></i></button>
          <label>
            <input type="checkbox">
            <ul>
              <li><a href="?language=en"><img class="flag" src="assets/images/flag_eua.png" alt="Flag EUA"> EN</a></li>
              <li><a href="?language=es"><img class="flag" src="assets/images/flag_spain.png" alt="Flag Spain"> ES</a></li>
            </ul>
          </label>
        </span>
      </li>
      <li class="select-language accent"> <?php echo $txt['select']; ?></li>
      <li class="select-language"><a href="?language=en"><img src="assets/images/flag_eua.png" alt="Flag EUA"> <?php echo $txt['english']; ?></a></li>
      <li class="select-language"><a href="?language=es"><img src="assets/images/flag_spain.png" alt="Flag Spain"> <?php echo $txt['spanish']; ?></a></li>
      <li><a href="#our-partners"><?php echo $txt['our-partners']; ?></a></li>
      <li><a href="#demo"><?php echo $txt['demonstration']; ?></a></li>
      <li><a href="#form"><button class="button"><?php echo $txt['contact-us']; ?></button></a></li>
    </ul>
  </nav>
  <!-- Navigation -->

  <!-- Primary section -->
  <div class="animated animatedFadeInUp fadeInUp">
    <div class="primary-landing-container">
      <div class="landing-art">
        <img class="image-max-width image-center" src="assets/images/art.png" alt="Art" />
      </div>
      <div class="landing-description responsive-text">
        <div class="text-max-width-large">
          <p class="hi"><?php echo $txt['hi']; ?><img src="assets/images/hand.png" alt="Hand" /></p>
          <h1><?php echo $txt['saas']; ?></h1>
          <div class="line"></div>
          <p class="text-silver"><?php echo $txt['we-are']; ?></p>
        </div>
      </div>
      <div class="link-center">
        <a href="#read-more">
          <p class="accent"><?php echo $txt['read-more']; ?></p>
          <img src="assets/images/arrow.png" alt="Arrow" />
        </a>
      </div>
    </div>
  </div>
  <!-- Primary section -->

  <!-- Key features -->
  <div id="read-more"></div>
  <div class="landing-silver-container">
    <div class="title-main-container">
      <div class="title-sub-container">
        <p class="basic-text subtitle"><?php echo $txt['our-remote']; ?></b></p>
        <h2 class="title-text accent italic"><?php echo $txt['key-features']; ?></h2>
      </div>
    </div>
    <div class="cards-main-container">

      <div class="card-container">
        <div class="card-image">
          <img src="assets/images/ic_lock.png" alt="Icon Lock" />
        </div>
        <div class="card-text">
          <p><?php echo $txt['lock']; ?></p>
        </div>
      </div>

      <div class="card-container">
        <div class="card-image">
          <img src="assets/images/ic_people.png" alt="Icon People" />
        </div>
        <div class="card-text">
          <p><?php echo $txt['people']; ?></p>
        </div>
      </div>

      <div class="card-container">
        <div class="card-image">
          <img src="assets/images/ic_config.png" alt="Icon Configuration" />
        </div>
        <div class="card-text">
          <p><?php echo $txt['config']; ?></p>
        </div>
      </div>

      <div class="card-container">
        <div class="card-image">
          <img src="assets/images/ic_customize.png" alt="Icon Customize" />
        </div>
        <div class="card-text">
          <p><?php echo $txt['customize']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Key features -->

  <!-- Our partners -->
  <div id="our-partners"></div>
  <div class="mobile-art">
    <div class="pink-rounded-background"></div>
    <p class="text-our-partners"><?php echo $txt['our']; ?>
      <b class="black"><?php echo $txt['partners']; ?></b>
    </p>
  </div>
  <!-- Our partners -->

  <!-- Video -->
  <div id="demo"></div>
  <div class="partner-video">
    <img class="round-sticker" src="assets/images/round_sticker.png" alt="Sticker" />
    <div class="monitor">
      <iframe width="882" height="497" src="https://www.youtube.com/embed/Vy5eidrLIIk" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
    </div>
  </div>

  <div class="partner-video-mobile">
    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/Vy5eidrLIIk" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
  </div>
  <!-- Video -->

  <!-- Form -->
  <div id="form"></div>
  <div class="form-container">
    <form class="contact-form">
      <legend class="form-title"><?php echo $txt['contact']; ?></legend>
      <div class="form-body">
        <div>
          <label class="form-label"><?php echo $txt['name']; ?></label>
          <input class="form-input" type="text" placeholder="<?php echo $txt['name-example']; ?>" />
          <label class="form-label"><?php echo $txt['e-mail']; ?></label>
          <input class="form-input" type="text" placeholder="<?php echo $txt['e-mail-example']; ?>" />
        </div>
        <div>
          <label class="form-label"><?php echo $txt['message']; ?></label>
          <textarea class="form-input textarea"></textarea>
        </div>
      </div>
      <button class="form-button" type="submit"><?php echo $txt['submit']; ?></button>
    </form>
  </div>
  <!-- Form -->

  <!-- Footer -->
  <footer>
    <div class="footer-main">
      <p class="compatibility-list">
        <?php echo $txt['compatibility']; ?>
      </p>
      <div class="footer-content">
        <div class="footer-list">
          <p><?php echo $txt['supported']; ?></p> <br>
          <ul>
            <li>&#8226; <?php echo $txt['samsung']; ?></li>
            <li>&#8226; <?php echo $txt['xiaomi']; ?></li>
            <li>&#8226; <?php echo $txt['lg']; ?></li>
            <li>&#8226; <?php echo $txt['motorola']; ?></li>
          </ul>
          <p class="accent"><?php echo $txt['more']; ?></p>
        </div>
        <div class="footer-list">
          <p><?php echo $txt['os']; ?></p> <br>
          <ul>
            <li>&#8226; <?php echo $txt['versions']; ?></li>
          </ul>
        </div>
        <img class="android" src="./assets/images/half_android.png" alt="Android" />
      </div>
    </div>

    <div class="darker-detail">
      <div class="footer-links">
        <a target="blank" href="https://www.globetek.com/privacy/policy"><b class="accent"><?php echo $txt['privacy-policy']; ?></b></a>
        <a target="blank" href="https://www.globetek.com/privacy/lockAPK"><b class="accent"><?php echo $txt['terms-of-service']; ?></b></a>
      </div>
      <p class="text-silver"><?php echo $txt['copyright']; ?></p>
    </div>
  </footer>
  <!-- Footer -->
</body>

</html>