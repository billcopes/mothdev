<? 
$htmltitle = "Moth Design";
$metadescription = "Moth Design is a strategic graphic design studio based in Boston, MA";
$metakeywords = "moth design, graphic design, strategic design, web design, design, studio, boston ma";
$bodyclass = "home";
$pagetitle = "Welcome";
$level1 = "home";
$level2 = ""; 
//include('include/header.php');
?>
<? header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<!--[if IE 7]><html
class="no-js ie7 ie" lang="en"> <![endif]--> <!--[if IE 8]><html
class="no-js ie8 ie" lang="en"> <![endif]--> <!--[if gt IE 8]><!--><html class="no-js" lang="en">
<!--<![endif]--><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?= $htmltitle ?></title>
<link rel="shortcut icon" href="/images/favicon.ico">
<meta name="description" content="<?= $metadescription ?>">
<meta name="keywords" content="<?= $metakeywords ?>">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="css/globalstyle-dev.css" type="text/css" />
<link rel="stylesheet" href="css/gridset2.css" type="text/css" />
<link href="//cloud.webtype.com/css/a3be9dcd-0236-4cd7-931a-a7dfb8df5baf.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//use.typekit.net/pgy1jhl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="https://use.fontawesome.com/ea8029bf03.js"></script>
<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/modernizr.custom.11944.js"></script>
</head>

<body class="<?= $bodyclass ?>">

<header id="header" class="site-header" role="banner">

  <div class="logo">
    <a href="/" class="icon-moth-logo"><span>Moth</span></a>
    <?php if ($level1 == "work" && $level2 != "") { ?>
    <div class="workhead">
      <span class="icon-plus"></span>
      <div class="client"><?= $pagetitle ?></div>
      <div class="icon-m-down menuarrow"></div>
    </div>
    <?php } ?>
  </div>
  
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <div class="menu-toggle"></div>
    <ul class="menu">
      <li<?php if ($level1 == "work") { ?> class="active"<?php } ?>><a href="work.php">Work</a></li>
      <li<?php if ($level1 == "studio") { ?> class="active"<?php } ?>><a href="studio.php">Studio</a></li>
      <li<?php if ($level1 == "contact") { ?> class="active"<?php } ?>><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  
  <?php if ($level1 == "work" && $level2 != "") { ?>
  <div class="workhead-m">
    <div class="client"><?= $pagetitle ?></div>
    <div class="icon-m-down menuarrow"></div>
  </div>
  <?php } ?>

  <div class="sub-menu">
    <div class="icon-close close-sub-menu"></div>
      <ul>
        <li<?php if ($level2 == "camd") { ?> class="active"<?php } ?>><a href="camd.php">Northeastern CAMD</a>
          <ul><li><img src="images/camd/camd_thumb.png" alt="Northeastern CAMD" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "misti") { ?> class="active"<?php } ?>><a href="misti.php">MISTI</a>
          <ul><li><img src="images/misti/misti_thumb.png" alt="MISTI" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "deer") { ?> class="active"<?php } ?>><a href="deerfield.php">Deerfield</a>
          <ul><li><img src="images/deerfield/deerfield_thumb.png" alt="Deerfield" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "road scholar") { ?> class="active"<?php } ?>><a href="road-scholar.php">Road Scholar</a>
          <ul><li><img src="images/road-scholar/rs_thumb.png" alt="Road Scholar" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "hudson") { ?> class="active"<?php } ?>><a href="hudson.php">Hudson</a>
          <ul><li><img src="images/hudson/hud_thumb.png" alt="Hudson" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "massart") { ?> class="active"<?php } ?>><a href="massart.php">MassArt</a>
          <ul><li><img src="images/massart/ma_thumb.png" alt="MassArt" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "mitgiving") { ?> class="active"<?php } ?>><a href="mit-giving.php">Giving to MIT</a>
          <ul><li><img src="images/mit-giving/giving-thumb.png" alt="MIT Giving" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "antiquarian") { ?> class="active"<?php } ?>><a href="antiquarian.php">Antiquarian Book Fair</a>
          <ul><li><img src="images/antiquarian/aq_thumb.png" alt="Antiquarian Book Fair" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "defeating malaria") { ?> class="active"<?php } ?>><a href="defeating-malaria.php">Harvard: Defeating Malaria</a>
          <ul><li><img src="images/defeating-malaria/dm_thumb.png" alt="Harvard: Defeating Malaria" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "north bennet") { ?> class="active"<?php } ?>><a href="north-bennet.php">North Bennet Street School</a>
          <ul><li><img src="images/nbss/nbss_thumb.png" alt="North Bennet Street School" height="230" width="230"></li></ul>
        </li>
      </ul>
      <ul>
        <li<?php if ($level2 == "morgan milo") { ?> class="active"<?php } ?>><a href="morgan-milo.php">Morgan &amp; Milo</a>
          <ul><li><img src="images/morgan-milo/mam_thumb.png" alt="Morgan &amp; Milo" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "mit admissions") { ?> class="active"<?php } ?>><a href="mit-admissions.php">MIT Admissions</a>
          <ul><li><img src="images/mit-admissions/mitad_thumb.png" alt="MIT Admissions" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "hsph") { ?> class="active"<?php } ?>><a href="harvard-public-health.php">Harvard School of Public Health</a>
          <ul><li><img src="images/hsph/hsph_thumb.png" alt="Harvard School of Public Health" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "bakalar") { ?> class="active"<?php } ?>><a href="bakalar-paine.php">Bakalar &amp; Paine Galleries</a>
          <ul><li><img src="images/bakalar/bp_thumb.png" alt="Bakalar &amp; Paine Galleries" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "action learning") { ?> class="active"<?php } ?>><a href="action-learning.php">MIT Sloan: Action Learning</a>
          <ul><li><img src="images/action-learning/al_thumb.png" alt="MIT Sloan: Action Learning" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "massart admissions") { ?> class="active"<?php } ?>><a href="massart-admissions.php">MassArt Admissions</a>
          <ul><li><img src="images/massart-admissions/maa_thumb.png" alt="MassArt Admissions" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "phr") { ?> class="active"<?php } ?>><a href="phr.php">Physicians for Human Rights</a>
          <ul><li><img src="images/phr/phr_thumb.png" alt="Physicians for Human Rights" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "sqn") { ?> class="active"<?php } ?>><a href="sqn.php">Sine Qua Non</a>
          <ul><li><img src="images/sqn/sqn_thumb.png" alt="Sine Qua Non" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "framingham") { ?> class="active"<?php } ?>><a href="framingham.php">Framingham State University</a>
          <ul><li><img src="images/fsu/fsu_thumb.png" alt="Framingham State University" height="230" width="230"></li></ul>
        </li>
        <!--li<?php if ($level2 == "climate colab") { ?> class="active"<?php } ?>><a href="climate-colab.php">Climate CoLab</a>
          <ul><li><img src="images/climate-colab/cc_thumb.png" alt="Climate CoLab" height="230" width="230"></li></ul>
        </li-->
        <li<?php if ($level2 == "sustainability") { ?> class="active"<?php } ?>><a href="sustainability.php">MIT Sloan: Sustainability</a>
          <ul><li><img src="images/sustainability/sustain_thumb.png" alt="MIT Sloan: Sustainability" height="230" width="230"></li></ul>
        </li>
      </ul> 
  </div>
</header>
<section class="home-top">
  <span class="home-img" data-picture data-alt="Moth Design">
     <span data-src="images/home/home-misti.jpg"></span>
     <span data-src="images/home/home-misti-600.jpg" data-media="(max-width: 600px)"></span>
     <noscript><img src="images/home/home-misti.jpg" width="1600" height="800" alt="MISTI"></noscript>
  </span>
  <a href="misti.php" class="home-block">
    <h2><span class="misti">MISTI</span></h2>
    <div class="home-block-text">NOT pizza in the piazza.</div>
  </a>
</section>

<section class="home-text">
  <h1>Moth is a savvy, multidisciplinary studio devoted to smart strategies and elegant design solutions.</h1>
</section>

<section class="home-first">
  <span class="home-img" data-picture data-alt="Moth Design">
     <span data-src="images/home/home-mitad.png"></span>
     <span data-src="images/home/home-mitad-600.png" data-media="(max-width: 600px)"></span>
     <noscript><img src="images/home/home-mitad.png" width="1600" height="800" alt="MIT Admissions"></noscript>
  </span>
  <a href="mit-admissions.php" class="home-block">
    <h2><span class="mit-admissions">MIT Admissions</span></h2>
    <div class="home-block-text">Contrary to rumors, print is alive and well in the halls of MIT</div>
  </a>
</section>

<section class="home-second">
  <span class="home-img" data-picture data-alt="Moth Design">
     <span data-src="images/home/home-deerfield.jpg"></span>
     <span data-src="images/home/home-deerfield-600.jpg" data-media="(max-width: 600px)"></span>
     <noscript><img src="images/home/home-deerfield.jpg" width="1600" height="800" alt="Deerfield"></noscript>
  </span>
  <a href="deerfield.php" class="home-block">
    <h2><span class="deer">Deerfield</span></h2>
    <div class="home-block-text">Nothing old school about it</div>
  </a>
</section>

<section class="home-third">
  <span class="home-img" data-picture data-alt="Moth Design">
     <span data-src="images/home/home-morganmilo.png"></span>
     <span data-src="images/home/home-morganmilo-600.png" data-media="(max-width: 600px)"></span>
     <noscript><img src="images/home/home-morganmilo.png" width="1600" height="800" alt="Morgan and Milo"></noscript>
  </span>
  <a href="morgan-milo.php" class="home-block">
    <h2><span class="morgan-milo">Morgan &amp; Milo</span></h2>
    <div class="home-block-text">A distinctive brand for hip parents and happening kids</div>
  </a>
</section>

<section class="home-text">
  <h3><a href="work.php">View more of our work</a></h3>
</section>


<?php include( 'include/footer.php' ); ?>
<script src="js/matchmedia.js"></script>
<script src="js/picturefill.js"></script>

</body>
</html>
