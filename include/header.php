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
<?php if ($development == "true") { //serves the dev style sheet ?>
<link rel="stylesheet" href="css/globalstyle-dev.css" type="text/css" />	
<?php } else {?>
<link rel="stylesheet" href="css/globalstyle.css" type="text/css" />	
<?php }?>
<link rel="stylesheet" href="css/gridset2.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link href="//cloud.webtype.com/css/07e7b888-28dd-406a-9a9f-037c315f777a.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//use.typekit.net/pgy1jhl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="https://use.fontawesome.com/ea8029bf03.js"></script>
<!--[if lte IE 7]><script src="js/lte-ie7.js"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.typer.js"></script>
<script src="js/modernizr.custom.11944.js"></script>
<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
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
      <li<?php if ($level1 == "work") { ?> class="active"<?php } ?>><a href="work">Work</a></li>
      <li<?php if ($level1 == "studio") { ?> class="active"<?php } ?>><a href="studio">Studio</a></li>
      <li<?php if ($level1 == "contact") { ?> class="active"<?php } ?>><a href="contact">Contact</a></li>
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
        <li<?php if ($level2 == "camd") { ?> class="active"<?php } ?>><a href="camd">Northeastern CAMD</a>
          <ul><li><img src="images/camd/camd_thumb.png" alt="Northeastern CAMD" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "misti") { ?> class="active"<?php } ?>><a href="misti">MISTI</a>
          <ul><li><img src="images/misti/misti_thumb.png" alt="MISTI" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "deer") { ?> class="active"<?php } ?>><a href="deerfield">Deerfield</a>
          <ul><li><img src="images/deerfield/deerfield_thumb.png" alt="Deerfield" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "road scholar") { ?> class="active"<?php } ?>><a href="road-scholar">Road Scholar</a>
          <ul><li><img src="images/road-scholar/rs_thumb.png" alt="Road Scholar" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "hudson") { ?> class="active"<?php } ?>><a href="hudson">Hudson</a>
          <ul><li><img src="images/hudson/hud_thumb.png" alt="Hudson" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "massart") { ?> class="active"<?php } ?>><a href="massart">MassArt</a>
          <ul><li><img src="images/massart/ma_thumb.png" alt="MassArt" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "mitgiving") { ?> class="active"<?php } ?>><a href="mit-giving">Giving to MIT</a>
          <ul><li><img src="images/mit-giving/giving-thumb.png" alt="MIT Giving" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "antiquarian") { ?> class="active"<?php } ?>><a href="antiquarian">Antiquarian Book Fair</a>
          <ul><li><img src="images/antiquarian/aq_thumb.png" alt="Antiquarian Book Fair" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "defeating malaria") { ?> class="active"<?php } ?>><a href="defeating-malaria">Harvard: Defeating Malaria</a>
          <ul><li><img src="images/defeating-malaria/dm_thumb.png" alt="Harvard: Defeating Malaria" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "north bennet") { ?> class="active"<?php } ?>><a href="north-bennet">North Bennet Street School</a>
          <ul><li><img src="images/nbss/nbss_thumb.png" alt="North Bennet Street School" height="230" width="230"></li></ul>
        </li>
      </ul>
      <ul>
        <li<?php if ($level2 == "morgan milo") { ?> class="active"<?php } ?>><a href="morgan-milo">Morgan &amp; Milo</a>
          <ul><li><img src="images/morgan-milo/mam_thumb.png" alt="Morgan &amp; Milo" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "mit admissions") { ?> class="active"<?php } ?>><a href="mit-admissions">MIT Admissions</a>
          <ul><li><img src="images/mit-admissions/mitad_thumb.png" alt="MIT Admissions" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "hsph") { ?> class="active"<?php } ?>><a href="harvard-public-health">Harvard School of Public Health</a>
          <ul><li><img src="images/hsph/hsph_thumb.png" alt="Harvard School of Public Health" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "bakalar") { ?> class="active"<?php } ?>><a href="bakalar-paine">Bakalar &amp; Paine Galleries</a>
          <ul><li><img src="images/bakalar/bp_thumb.png" alt="Bakalar &amp; Paine Galleries" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "isgm") { ?> class="active"<?php } ?>><a href="isgm">Isabella Stewart Gardener Museum</a>
          <ul><li><img src="images/isgm/thumb.png" alt="Isabella Stewart Gardener Museum" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "yuso") { ?> class="active"<?php } ?>><a href="yuso">Yus&omacr;</a>
          <ul><li><img src="images/yuso/thumb.png" alt="Yuso" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "skinner") { ?> class="active"<?php } ?>><a href="skinner">Skinner</a>
          <ul><li><img src="images/skinner/thumb.png" alt="Skinner" height="230" width="230"></li></ul>
        </li>
		<!--li<?php if ($level2 == "action learning") { ?> class="active"<?php } ?>><a href="action-learning">MIT Sloan: Action Learning</a>
          <ul><li><img src="images/action-learning/al_thumb.png" alt="MIT Sloan: Action Learning" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "massart admissions") { ?> class="active"<?php } ?>><a href="massart-admissions">MassArt Admissions</a>
          <ul><li><img src="images/massart-admissions/maa_thumb.png" alt="MassArt Admissions" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "phr") { ?> class="active"<?php } ?>><a href="phr">Physicians for Human Rights</a>
          <ul><li><img src="images/phr/phr_thumb.png" alt="Physicians for Human Rights" height="230" width="230"></li></ul>
        </li-->
        
		<li<?php if ($level2 == "sqn") { ?> class="active"<?php } ?>><a href="sqn">Sine Qua Non</a>
          <ul><li><img src="images/sqn/sqn_thumb.png" alt="Sine Qua Non" height="230" width="230"></li></ul>
        </li>
        <li<?php if ($level2 == "framingham") { ?> class="active"<?php } ?>><a href="framingham">Framingham State University</a>
          <ul><li><img src="images/fsu/fsu_thumb.png" alt="Framingham State University" height="230" width="230"></li></ul>
        </li>
        <!--li<?php if ($level2 == "climate colab") { ?> class="active"<?php } ?>><a href="climate-colab">Climate CoLab</a>
          <ul><li><img src="images/climate-colab/cc_thumb.png" alt="Climate CoLab" height="230" width="230"></li></ul>
        </li-->
        <li<?php if ($level2 == "sustainability") { ?> class="active"<?php } ?>><a href="sustainability">MIT Sloan: Sustainability</a>
          <ul><li><img src="images/sustainability/sustain_thumb.png" alt="MIT Sloan: Sustainability" height="230" width="230"></li></ul>
        </li>
      </ul> 
  </div>
</header>
