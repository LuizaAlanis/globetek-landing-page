<!-- TODO: Eu acho seu HTML e CSS muito bons. Você vai ver que meus comentários abaixo são pequenas "implicações" minhas.
           Também resolvi escrever pra você entender um pouco a forma que eu penso e como vejo as coisas.
           Talvez te ajude de alguma forma. -->
<!DOCTYPE html>
<!--TODO: Dá pra mudar o idioma aqui de acordo com o idioma escolhido pelo usuário -->
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
  <!-- TODO: Parece que esse <header> não está sendo usado pra nada -->
  <header>
    <!-- TODO: Acho que o ideal é sempre coloar esses <link> no <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </header>
  <nav>
    <img class="logo" src="assets/images/logo_horizontal.png" alt="Logo" />
    <!-- TODO: Não entendi de que forma esse input está sendo usado -->
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fa fa-bars"></i>
    </label>
    <ul>
      <li class="select-desktop">
        <span class="dropdown">
          <!-- TODO: Isso não é um problema. Mas eu gosto sempre de fechar as tags quando não tem nada dentro, tipo <img ... />. No HTML 5 isso não é errado. É só uma coisa minha mesmo. -->
          <!-- TODO: Não sei se você sabe, no PHP tem um forma curta de escrever <?php echo $variavel ?>, que é: <?= $variavel ?> -->
          <button><img class="flag" src="assets/images/<?php echo $lang_flag; ?>" alt="Flag EUA"> <?php echo $lang_name; ?> <i class="bi bi-chevron-down"></i></button>
          <label>
            <!-- TODO: De novo, não sei por que esse input tipo checkbox (tipo, acredito que sei, mas será que essa é a forma correta? Pensa na semântica disso) -->
            <input type="checkbox">
            <!-- TODO: Meu IntelliJ está dizendo que <ul> não é permitido dentro de <label> -->
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
  <!-- TODO: Acho muito legal essas animações que você faz -->
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
  <!-- TODO: Isso aqui é apenas pra página deslizar quando o usuário clicar no menu?
             Será que não é só adicionar o id na <div> de baixo em vez de criar uma <div> vazia?
             Porque semanticamente a div que possui o conteúdo de "read-more" é a de baixo, não essa vazia.
             (Eu só fico em dúvida se, colocando na de baixo, ele vai deslizar pro lugar correto. -->
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
    <!-- TODO: De certa forma esse código está duplicado. Não seria melhor pensar em colocar apenas um iframe
               e ajustar o que aparece e não aparece no CSS? Usando display: none, e media queries?
               O que é pior nisso aqui é que ele faz duas requisições para o mesmo lugar (olha a aba network e procura pelo id do vídeo).
               É sempre importante pensar nessas coisas, principalmente quando for um projeto que precisa de escala
               e que poderá ter milhões de acesso (o que não é esse caso, obviamente).
               -->
    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/Vy5eidrLIIk" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
  </div>
  <!-- Video -->

  <!-- Form -->
  <div id="form"></div>
  <div class="form-container">
    <!-- TODO: Eu não manjo muito de PHP pra te dizer se mandar o formulário para uma URL dessa forma é bom ou não.
               Mas quando vi isso pensei que poderia ser um bom exercício pra você fazer a mesma coisa usando
               AJAX (https://www.w3schools.com/js/js_ajax_intro.asp) ou Fetch API.
               Se você não sabe, é bom saber pra entender como deve funcionar as coisas por trás de bibliotecas como o Axios.
               Foi me aventurando nessas coisas que aprendi bastante, apesar de não usar hoje em dia.
     -->
    <form class="contact-form" action="send-email.php" method="POST">
      <!-- TODO: Meu IntelliJ está dizendo que <legend> não é permitido aqui. -->
      <legend class="form-title"><?php echo $txt['contact']; ?></legend>
      <div class="form-body">
        <div>
          <label class="form-label"><?php echo $txt['name']; ?></label>
          <!-- TODO: Faltou associar o label com o input -->
          <input required class="form-input" name="name" type="text" placeholder="<?php echo $txt['name-example']; ?>" />
          <label class="form-label"><?php echo $txt['e-mail']; ?></label>
          <!-- TODO: Faltou associar o label com o input -->
          <input required class="form-input" name="email" type="email" placeholder="<?php echo $txt['e-mail-example']; ?>" />
        </div>
        <div>
          <label class="form-label"><?php echo $txt['message']; ?></label>
          <!-- TODO: Faltou associar o label com o textarea -->
          <textarea required class="form-input textarea" name="message"></textarea>
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
<!-- TODO: Eu não sei onde eu poderia escrever esse comentário então estou escrevendo aqui.
           Acho que faltou um .gitignore para a pasta vendor. Normalmente não queremos comitar dependências que
           sejam administradas por um gerenciador de dependências, como o npm, composer, maven, gradle, etc.
 -->
</html>