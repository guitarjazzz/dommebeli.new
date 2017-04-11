<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Каталог',
    'longtitle' => 'Каталог продукции',
    'description' => '',
    'alias' => 'каталог',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1490625278,
    'editedby' => 1,
    'editedon' => 1491040544,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1490639940,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
<head>
    <title>Каталог - MODX Revolution</title>
    <base href="[[!++site_url]]" />
    <!-- <meta charset="utf-8"> -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 "/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="http://localhost/dommebeli.new//assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/dommebeli.new//assets/components/css/style.css" type="text/css" media="screen">    
    <link rel="icon" type="image/png" href="http://localhost/dommebeli.new//assets/components/imgs/favicon.png" />
    <!-- <script src="http://localhost/dommebeli.new//assets/components/js/jquery-1.6.2.min.js" type="text/javascript"></script> -->
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery-1.9.1.js" type="text/javascript"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="http://localhost/dommebeli.new//assets/components/js/jquery-3.1.1.min.js" type="text/javascript"></script> -->
    <script src="http://localhost/dommebeli.new//assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery.opacityrollover.js" type="text/javascript"></script>
</head>
<body>
    <header class="header">
    <div class="header-inner">
      <div class="email-wrap">
        <a class="email-top" href="javascript:void(0)">shustova-nat@yander.ru</a>
      </div>
      <div class="phones">
        <a href="tel:0684056208"><img class="cellular-logo" src="http://localhost/dommebeli.new//assets/components/imgs/kyivstar-logo.svg"> (068) 405 - 62 - 08</a>
        <a href="tel:0999503395"><img class="cellular-logo" src="http://localhost/dommebeli.new//assets/components/imgs/vodafone-logo.svg"> (099) 95 - 033 - 95</a>
      </div>
      <div class="reach-btn-wrap">
        <div class="dropdown">
          <button class="reach-us-btn btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Связаться с нами 
            <span class="caret"></span>
          </button>
          <ul id="reachUs" class="reach-us-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
            <li>
              <label for="reachName">Имя <span>*</span></label>
              <input id="reachName" class="form-control" placeholder="Имя">
            </li>
            <li>
              <label for="reachPhone">Телефон <span>*</span></label>
              <input id="reachPhone" type="text" class="form-control" placeholder="Телефон">
            </li>
            <li>
              <label for="reachEmail">Email <span>*</span></label>
              <input id="reachEmail" type="text" class="form-control" placeholder="Email">
            </li>
            <li>
              <label for="reachMess">Сообщение <span>*</span></label>
              <textarea id="reachMess" placeholder="Сообщение" class="form-control"></textarea>
            </li>
            <li>
              <button class="btn">Отправить</button>
            </li>
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
          <script>
            $(function(){
              $(\'#reachUs\').click(function(e){
                e.stopPropagation();
              });
            });
          </script>
        </div>
        <!-- <a class="reach-us" href="javascript:void(0)">Связаться с нами</a> -->
        <!-- <div class="reach-us-menu">
          <form>
            <div class="input-name">
              <input id="userName" type="text" name="">
              <label for="userName">Имя</label>
            </div>
            <div class="input-phone">
              <input id="userPhone" type="text" name="">
              <label for="userPhone">Телефон</label>
            </div>
            <div class="input-email">
              <input id="userEmail" type="email" name="">
              <label for="userEmail">Email</label>
            </div>
            <div class="input-message">
              <textarea id="userMessage" resize="none"></textarea>
              <label for="userMessage">Сообщение</label>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </header>
    <menu class="menu">
    <div class="logo">
      <img src="http://localhost/dommebeli.new//assets/components/imgs/logo.png" usemap = "#nameMap" alt="logo">
      <map name="nameMap">
        <area href="/" shape="poly" coords="115,6,80,12,52,26,29,46,14,72,12,93,18,123,32,141,52,158,78,170,107,176,149,173,183,163,207,144,223,121,231,94,224,65,210,43,193,28,166,14,144,9">
      </map>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-menu">
        <!--  <ul class="nav navbar-nav">
            <li><a href="#"><span class="icon-main"></span> Главная</a></li>
            <li class="dropdown" id="menu-catalog">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-catalog"></span>Каталог </a>
              <ul class="dropdown-menu">
                <li><a href="" title="Кухни">Кухни</a></li>
                <li><a href="" title="Гостинные">Гостинные</a></li>
                <li><a href="" title="Детские">Детские</a></li>
                <li><a href="" title="Спальни">Спальни</a></li>
                <li><a href="" title="Прихожие">Прихожие</a></li>
                <li><a href="" title="Шкафы-купе">Шкафы-купе</a></li>
                <li><a href="" title="Кровати">Кровати</a></li>
                <li><a href="" title="Офисная мебель">Офисная мебель</a></li>
                <li><a href="" title="Для школы и детcкого сада">Для школы и сада</a></li>
              </ul>
            </li>
            <li class="empty"><a href="#"></a></li>
            <li><a href="#"><span class="icon-service"></span> Сервис</a></li>
            <li><a href="#"><span class="icon-contacts"></span> Контакты</a></li>
          </ul>-->
          <ul class="nav navbar-nav" >
     <li id="menu-item-1">
    <a class="link-menu" class="first" href="http://localhost/dommebeli.new/"><span></span>Главная</a>
</li>
<li id="menu-item-2">
    <a class="link-menu" class="active" href="index.php?id=2"><span></span>Каталог</a><ul class="dropdown-menu">
     <li>
    <a class="link_sub_menu" href="index.php?id=3" title="Кухни">Кухни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=4" title="Гостиные">Гостиные</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=5" title="Детские">Детские</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=6" title="Спальни">Спальни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=7" title="Прихожие">Прихожие</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=8" title="Шкафы-купе">Шкафы-купе</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=9" title="Кровати">Кровати</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=10" title="Офисная мебель">Офисная мебель</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=11" title="Для школы и детcкого сада">Для школы и детcкого сада</a>
</li>

</ul> 
</li>
<li id="menu-item-12">
    <a class="link-menu" href="index.php?id=12"><span></span>Сервис</a>
</li>
<li id="menu-item-13">
    <a class="link-menu" class="last" href="index.php?id=13"><span></span>Контакты</a>
</li>

</ul> 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </menu>
<script>
  $(\'#menu-catalog\').hover(function(){
    $(this).find(\'.dropdown-toggle\').click();
  },function(){
    $(this).find(\'.dropdown-toggle\').click();
  });
</script>
  <main class="main clearfix">
    <div >
  <div class="catalog-item" class="first">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=3" title="Кухни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=234&amp;h=186&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F2%2F122.jpg" alt="" title="102.jpg"  />
    </a>
    <h3>
      Кухни
      <a class="catalog-more-btn" href="index.php?id=3" title="Кухни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=4" title="Гостиные" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=293&amp;h=220&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F4%2F151.jpg" alt="" title="livingroom_3.jpg"  />
    </a>
    <h3>
      Гостиные
      <a class="catalog-more-btn" href="index.php?id=4" title="Гостиные" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=5" title="Детские" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=325&amp;h=244&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F6%2F204.jpg" alt="" title="childroom_1.jpg"  />
    </a>
    <h3>
      Детские
      <a class="catalog-more-btn" href="index.php?id=5" title="Детские" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=6" title="Спальни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=294&amp;h=221&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F10%2F246.jpg" alt="" title="spal5.jpg"  />
    </a>
    <h3>
      Спальни
      <a class="catalog-more-btn" href="index.php?id=6" title="Спальни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=7" title="Прихожие" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=312&amp;h=234&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F8%2F211.jpg" alt="" title="pr01.jpg"  />
    </a>
    <h3>
      Прихожие
      <a class="catalog-more-btn" href="index.php?id=7" title="Прихожие" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=8" title="Шкафы-купе" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=315&amp;h=237&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F5%2F175.jpg" alt="" title="closet_1.jpg"  />
    </a>
    <h3>
      Шкафы-купе
      <a class="catalog-more-btn" href="index.php?id=8" title="Шкафы-купе" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=9" title="Кровати" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=230&amp;h=173&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F7%2F67.JPG" alt="" title="krov2.JPG"  />
    </a>
    <h3>
      Кровати
      <a class="catalog-more-btn" href="index.php?id=9" title="Кровати" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=10" title="Офисная мебель" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=207&amp;h=276&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F3%2F24.JPG&fltr[]=crop|0|0|69|40" alt="" title="1.JPG"  />
    </a>
    <h3>
      Офисная мебель
      <a class="catalog-more-btn" href="index.php?id=10" title="Офисная мебель" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item" class="last">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=11" title="Для школы и детcкого сада" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=282&amp;h=212&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F9%2F241.JPG" alt="" title="desk.JPG"  />
    </a>
    <h3>
      Для школы и детcкого сада
      <a class="catalog-more-btn" href="index.php?id=11" title="Для школы и детcкого сада" >Далее...</a>
    </h3>
    
  </div>
</div>

</div>
  </main>
  <footer class="footer">
    <div class="footer-inner">
      <p class="address" >Наш магазин: ул. Курчатова, 7,<br> ТЦ "Курчатовский", 2 этаж <br> <a href="shustova-nat@yandex.ua"> <span>shustova-nat@yandex.ua</span></a><br> тел. +38(068)405-62-08<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+38(099)95-033-95 </p>
      <div class="map_icon">
        <p><a href="contacts.html">Подробнее</a></p>
      </div>
    </div>
  </footer>
<script>
      $(window).load(function() {
      // We only want these styles applied when javascript is enabled
      // $(\'div.navigation\').css({\'width\' : \'320px\', \'float\' : \'right\'});
      $(\'div.content\').css(\'display\', \'block\');
    
      // Initially set opacity on thumbs and add
      // additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.5;
      $(\'#thumbs ul.thumbs li span\').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  0.0,
        fadeSpeed:         \'fast\',
        exemptionSelector: \'.selected\'
      });
      
      // Initialize Advanced Galleriffic Gallery
      var gallery = $(\'#thumbs\').galleriffic({
        delay:                     7000,
        numThumbs:                 12,
        preloadAhead:              6,
        enableTopPager:            false,
        enableBottomPager:         false,
        imageContainerSel:         \'#slideshow\',
        controlsContainerSel:      \'\',
        captionContainerSel:       \'\',
        loadingContainerSel:       \'\',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              \'Play Slideshow\',
        pauseLinkText:             \'Pause Slideshow\',
        prevLinkText:              \'Prev\',
        nextLinkText:              \'Next\',
        nextPageLinkText:          \'Next\',
        prevPageLinkText:          \'Prev\',
        enableHistory:             true,
        autoStart:                 7000,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // \'this\' refers to the gallery, which is an extension of $(\'#thumbs\')
          this.find(\'ul.thumbs li span\')
            .css({opacity:0.5})
        },
        onPageTransitionOut:       function(callback) {
          this.find(\'ul.thumbs li span\').css({display:\'block\'});
        },
        onPageTransitionIn:        function() {
          this.find(\'ul.thumbs li span\').css({display:\'none\'});
        }
      });
    });
  </script>
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Каталог',
    '[[$html_head]]' => '<head>
    <title>Каталог - MODX Revolution</title>
    <base href="[[!++site_url]]" />
    <!-- <meta charset="utf-8"> -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 "/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="http://localhost/dommebeli.new//assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/dommebeli.new//assets/components/css/style.css" type="text/css" media="screen">    
    <link rel="icon" type="image/png" href="http://localhost/dommebeli.new//assets/components/imgs/favicon.png" />
    <!-- <script src="http://localhost/dommebeli.new//assets/components/js/jquery-1.6.2.min.js" type="text/javascript"></script> -->
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery-1.9.1.js" type="text/javascript"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="http://localhost/dommebeli.new//assets/components/js/jquery-3.1.1.min.js" type="text/javascript"></script> -->
    <script src="http://localhost/dommebeli.new//assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="http://localhost/dommebeli.new//assets/components/js/jquery.opacityrollover.js" type="text/javascript"></script>
</head>',
    '[[$header]]' => '  <header class="header">
    <div class="header-inner">
      <div class="email-wrap">
        <a class="email-top" href="javascript:void(0)">shustova-nat@yander.ru</a>
      </div>
      <div class="phones">
        <a href="tel:0684056208"><img class="cellular-logo" src="http://localhost/dommebeli.new//assets/components/imgs/kyivstar-logo.svg"> (068) 405 - 62 - 08</a>
        <a href="tel:0999503395"><img class="cellular-logo" src="http://localhost/dommebeli.new//assets/components/imgs/vodafone-logo.svg"> (099) 95 - 033 - 95</a>
      </div>
      <div class="reach-btn-wrap">
        <div class="dropdown">
          <button class="reach-us-btn btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Связаться с нами 
            <span class="caret"></span>
          </button>
          <ul id="reachUs" class="reach-us-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
            <li>
              <label for="reachName">Имя <span>*</span></label>
              <input id="reachName" class="form-control" placeholder="Имя">
            </li>
            <li>
              <label for="reachPhone">Телефон <span>*</span></label>
              <input id="reachPhone" type="text" class="form-control" placeholder="Телефон">
            </li>
            <li>
              <label for="reachEmail">Email <span>*</span></label>
              <input id="reachEmail" type="text" class="form-control" placeholder="Email">
            </li>
            <li>
              <label for="reachMess">Сообщение <span>*</span></label>
              <textarea id="reachMess" placeholder="Сообщение" class="form-control"></textarea>
            </li>
            <li>
              <button class="btn">Отправить</button>
            </li>
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
          <script>
            $(function(){
              $(\'#reachUs\').click(function(e){
                e.stopPropagation();
              });
            });
          </script>
        </div>
        <!-- <a class="reach-us" href="javascript:void(0)">Связаться с нами</a> -->
        <!-- <div class="reach-us-menu">
          <form>
            <div class="input-name">
              <input id="userName" type="text" name="">
              <label for="userName">Имя</label>
            </div>
            <div class="input-phone">
              <input id="userPhone" type="text" name="">
              <label for="userPhone">Телефон</label>
            </div>
            <div class="input-email">
              <input id="userEmail" type="email" name="">
              <label for="userEmail">Email</label>
            </div>
            <div class="input-message">
              <textarea id="userMessage" resize="none"></textarea>
              <label for="userMessage">Сообщение</label>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </header>',
    '[[Wayfinder? &startId=`0` &outerTpl=`outerTpl` &rowTpl=`rowTpl` &rowIdPrefix=`menu-item-` &innerTpl=`innerTpl` &innerRowTpl=`innerRowTpl`]]' => '<ul class="nav navbar-nav" >
     <li id="menu-item-1">
    <a class="link-menu" class="first" href="http://localhost/dommebeli.new/"><span></span>Главная</a>
</li>
<li id="menu-item-2">
    <a class="link-menu" class="active" href="index.php?id=2"><span></span>Каталог</a><ul class="dropdown-menu">
     <li>
    <a class="link_sub_menu" href="index.php?id=3" title="Кухни">Кухни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=4" title="Гостиные">Гостиные</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=5" title="Детские">Детские</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=6" title="Спальни">Спальни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=7" title="Прихожие">Прихожие</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=8" title="Шкафы-купе">Шкафы-купе</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=9" title="Кровати">Кровати</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=10" title="Офисная мебель">Офисная мебель</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=11" title="Для школы и детcкого сада">Для школы и детcкого сада</a>
</li>

</ul> 
</li>
<li id="menu-item-12">
    <a class="link-menu" href="index.php?id=12"><span></span>Сервис</a>
</li>
<li id="menu-item-13">
    <a class="link-menu" class="last" href="index.php?id=13"><span></span>Контакты</a>
</li>

</ul> ',
    '[[$menu]]' => '  <menu class="menu">
    <div class="logo">
      <img src="http://localhost/dommebeli.new//assets/components/imgs/logo.png" usemap = "#nameMap" alt="logo">
      <map name="nameMap">
        <area href="/" shape="poly" coords="115,6,80,12,52,26,29,46,14,72,12,93,18,123,32,141,52,158,78,170,107,176,149,173,183,163,207,144,223,121,231,94,224,65,210,43,193,28,166,14,144,9">
      </map>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-menu">
        <!--  <ul class="nav navbar-nav">
            <li><a href="#"><span class="icon-main"></span> Главная</a></li>
            <li class="dropdown" id="menu-catalog">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-catalog"></span>Каталог </a>
              <ul class="dropdown-menu">
                <li><a href="" title="Кухни">Кухни</a></li>
                <li><a href="" title="Гостинные">Гостинные</a></li>
                <li><a href="" title="Детские">Детские</a></li>
                <li><a href="" title="Спальни">Спальни</a></li>
                <li><a href="" title="Прихожие">Прихожие</a></li>
                <li><a href="" title="Шкафы-купе">Шкафы-купе</a></li>
                <li><a href="" title="Кровати">Кровати</a></li>
                <li><a href="" title="Офисная мебель">Офисная мебель</a></li>
                <li><a href="" title="Для школы и детcкого сада">Для школы и сада</a></li>
              </ul>
            </li>
            <li class="empty"><a href="#"></a></li>
            <li><a href="#"><span class="icon-service"></span> Сервис</a></li>
            <li><a href="#"><span class="icon-contacts"></span> Контакты</a></li>
          </ul>-->
          <ul class="nav navbar-nav" >
     <li id="menu-item-1">
    <a class="link-menu" class="first" href="http://localhost/dommebeli.new/"><span></span>Главная</a>
</li>
<li id="menu-item-2">
    <a class="link-menu" class="active" href="index.php?id=2"><span></span>Каталог</a><ul class="dropdown-menu">
     <li>
    <a class="link_sub_menu" href="index.php?id=3" title="Кухни">Кухни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=4" title="Гостиные">Гостиные</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=5" title="Детские">Детские</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=6" title="Спальни">Спальни</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=7" title="Прихожие">Прихожие</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=8" title="Шкафы-купе">Шкафы-купе</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=9" title="Кровати">Кровати</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=10" title="Офисная мебель">Офисная мебель</a>
</li>
<li>
    <a class="link_sub_menu" href="index.php?id=11" title="Для школы и детcкого сада">Для школы и детcкого сада</a>
</li>

</ul> 
</li>
<li id="menu-item-12">
    <a class="link-menu" href="index.php?id=12"><span></span>Сервис</a>
</li>
<li id="menu-item-13">
    <a class="link-menu" class="last" href="index.php?id=13"><span></span>Контакты</a>
</li>

</ul> 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </menu>
<script>
  $(\'#menu-catalog\').hover(function(){
    $(this).find(\'.dropdown-toggle\').click();
  },function(){
    $(this).find(\'.dropdown-toggle\').click();
  });
</script>',
    '[[Wayfinder? &startId=`2` &outerTpl=`outerTplCatalog` &rowTpl=`rowTplCatalog`]]' => '<div >
  <div class="catalog-item" class="first">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=3" title="Кухни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=234&amp;h=186&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F2%2F122.jpg" alt="" title="102.jpg"  />
    </a>
    <h3>
      Кухни
      <a class="catalog-more-btn" href="index.php?id=3" title="Кухни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=4" title="Гостиные" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=293&amp;h=220&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F4%2F151.jpg" alt="" title="livingroom_3.jpg"  />
    </a>
    <h3>
      Гостиные
      <a class="catalog-more-btn" href="index.php?id=4" title="Гостиные" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=5" title="Детские" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=325&amp;h=244&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F6%2F204.jpg" alt="" title="childroom_1.jpg"  />
    </a>
    <h3>
      Детские
      <a class="catalog-more-btn" href="index.php?id=5" title="Детские" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=6" title="Спальни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=294&amp;h=221&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F10%2F246.jpg" alt="" title="spal5.jpg"  />
    </a>
    <h3>
      Спальни
      <a class="catalog-more-btn" href="index.php?id=6" title="Спальни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=7" title="Прихожие" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=312&amp;h=234&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F8%2F211.jpg" alt="" title="pr01.jpg"  />
    </a>
    <h3>
      Прихожие
      <a class="catalog-more-btn" href="index.php?id=7" title="Прихожие" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=8" title="Шкафы-купе" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=315&amp;h=237&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F5%2F175.jpg" alt="" title="closet_1.jpg"  />
    </a>
    <h3>
      Шкафы-купе
      <a class="catalog-more-btn" href="index.php?id=8" title="Шкафы-купе" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=9" title="Кровати" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=230&amp;h=173&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F7%2F67.JPG" alt="" title="krov2.JPG"  />
    </a>
    <h3>
      Кровати
      <a class="catalog-more-btn" href="index.php?id=9" title="Кровати" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=10" title="Офисная мебель" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=207&amp;h=276&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F3%2F24.JPG&fltr[]=crop|0|0|69|40" alt="" title="1.JPG"  />
    </a>
    <h3>
      Офисная мебель
      <a class="catalog-more-btn" href="index.php?id=10" title="Офисная мебель" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item" class="last">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=11" title="Для школы и детcкого сада" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=282&amp;h=212&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F9%2F241.JPG" alt="" title="desk.JPG"  />
    </a>
    <h3>
      Для школы и детcкого сада
      <a class="catalog-more-btn" href="index.php?id=11" title="Для школы и детcкого сада" >Далее...</a>
    </h3>
    
  </div>
</div>

</div>',
    '[[$catalog_content]]' => '<div >
  <div class="catalog-item" class="first">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=3" title="Кухни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=234&amp;h=186&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F2%2F122.jpg" alt="" title="102.jpg"  />
    </a>
    <h3>
      Кухни
      <a class="catalog-more-btn" href="index.php?id=3" title="Кухни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=4" title="Гостиные" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=293&amp;h=220&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F4%2F151.jpg" alt="" title="livingroom_3.jpg"  />
    </a>
    <h3>
      Гостиные
      <a class="catalog-more-btn" href="index.php?id=4" title="Гостиные" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=5" title="Детские" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=325&amp;h=244&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F6%2F204.jpg" alt="" title="childroom_1.jpg"  />
    </a>
    <h3>
      Детские
      <a class="catalog-more-btn" href="index.php?id=5" title="Детские" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=6" title="Спальни" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=294&amp;h=221&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F10%2F246.jpg" alt="" title="spal5.jpg"  />
    </a>
    <h3>
      Спальни
      <a class="catalog-more-btn" href="index.php?id=6" title="Спальни" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=7" title="Прихожие" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=312&amp;h=234&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F8%2F211.jpg" alt="" title="pr01.jpg"  />
    </a>
    <h3>
      Прихожие
      <a class="catalog-more-btn" href="index.php?id=7" title="Прихожие" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=8" title="Шкафы-купе" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=315&amp;h=237&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F5%2F175.jpg" alt="" title="closet_1.jpg"  />
    </a>
    <h3>
      Шкафы-купе
      <a class="catalog-more-btn" href="index.php?id=8" title="Шкафы-купе" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=9" title="Кровати" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=230&amp;h=173&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F7%2F67.JPG" alt="" title="krov2.JPG"  />
    </a>
    <h3>
      Кровати
      <a class="catalog-more-btn" href="index.php?id=9" title="Кровати" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=10" title="Офисная мебель" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=207&amp;h=276&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F3%2F24.JPG&fltr[]=crop|0|0|69|40" alt="" title="1.JPG"  />
    </a>
    <h3>
      Офисная мебель
      <a class="catalog-more-btn" href="index.php?id=10" title="Офисная мебель" >Далее...</a>
    </h3>
    
  </div>
</div>
<div class="catalog-item" class="last">
  <div class="catalog-padding">
    <a class="catalog-picture" href="index.php?id=11" title="Для школы и детcкого сада" >
      <img src="/dommebeli.new/assets/components/gallery/connector.php?action=web/phpthumb&amp;ctx=web&amp;w=282&amp;h=212&amp;f=png&amp;src=%2Fdommebeli.new%2F%2Fdommebeli.new%2Fassets%2Fgallery%2F9%2F241.JPG" alt="" title="desk.JPG"  />
    </a>
    <h3>
      Для школы и детcкого сада
      <a class="catalog-more-btn" href="index.php?id=11" title="Для школы и детcкого сада" >Далее...</a>
    </h3>
    
  </div>
</div>

</div>',
    '[[$footer]]' => '  <footer class="footer">
    <div class="footer-inner">
      <p class="address" >Наш магазин: ул. Курчатова, 7,<br> ТЦ "Курчатовский", 2 этаж <br> <a href="shustova-nat@yandex.ua"> <span>shustova-nat@yandex.ua</span></a><br> тел. +38(068)405-62-08<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+38(099)95-033-95 </p>
      <div class="map_icon">
        <p><a href="contacts.html">Подробнее</a></p>
      </div>
    </div>
  </footer>',
    '[[$gallery_js]]' => '<script>
      $(window).load(function() {
      // We only want these styles applied when javascript is enabled
      // $(\'div.navigation\').css({\'width\' : \'320px\', \'float\' : \'right\'});
      $(\'div.content\').css(\'display\', \'block\');
    
      // Initially set opacity on thumbs and add
      // additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.5;
      $(\'#thumbs ul.thumbs li span\').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  0.0,
        fadeSpeed:         \'fast\',
        exemptionSelector: \'.selected\'
      });
      
      // Initialize Advanced Galleriffic Gallery
      var gallery = $(\'#thumbs\').galleriffic({
        delay:                     7000,
        numThumbs:                 12,
        preloadAhead:              6,
        enableTopPager:            false,
        enableBottomPager:         false,
        imageContainerSel:         \'#slideshow\',
        controlsContainerSel:      \'\',
        captionContainerSel:       \'\',
        loadingContainerSel:       \'\',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              \'Play Slideshow\',
        pauseLinkText:             \'Pause Slideshow\',
        prevLinkText:              \'Prev\',
        nextLinkText:              \'Next\',
        nextPageLinkText:          \'Next\',
        prevPageLinkText:          \'Prev\',
        enableHistory:             true,
        autoStart:                 7000,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // \'this\' refers to the gallery, which is an extension of $(\'#thumbs\')
          this.find(\'ul.thumbs li span\')
            .css({opacity:0.5})
        },
        onPageTransitionOut:       function(callback) {
          this.find(\'ul.thumbs li span\').css({display:\'block\'});
        },
        onPageTransitionIn:        function() {
          this.find(\'ul.thumbs li span\').css({display:\'none\'});
        }
      });
    });
  </script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'html_head' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'html_head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<head>
    <title>[[*pagetitle]] - [[++site_name]]</title>
    <base href="[[!++site_url]]" />
    <!-- <meta charset="utf-8"> -->
    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 "/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="[[++site_url]]/assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="[[++site_url]]/assets/components/css/style.css" type="text/css" media="screen">    
    <link rel="icon" type="image/png" href="[[++site_url]]/assets/components/imgs/favicon.png" />
    <!-- <script src="[[++site_url]]/assets/components/js/jquery-1.6.2.min.js" type="text/javascript"></script> -->
    <script src="[[++site_url]]/assets/components/js/jquery-1.9.1.js" type="text/javascript"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="[[++site_url]]/assets/components/js/jquery-3.1.1.min.js" type="text/javascript"></script> -->
    <script src="[[++site_url]]/assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="[[++site_url]]/assets/components/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="[[++site_url]]/assets/components/js/jquery.opacityrollover.js" type="text/javascript"></script>
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>
    <title>[[*pagetitle]] - [[++site_name]]</title>
    <base href="[[!++site_url]]" />
    <!-- <meta charset="utf-8"> -->
    <meta charset="[[++modx_charset]]" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 "/>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="[[++site_url]]/assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="[[++site_url]]/assets/components/css/style.css" type="text/css" media="screen">    
    <link rel="icon" type="image/png" href="[[++site_url]]/assets/components/imgs/favicon.png" />
    <!-- <script src="[[++site_url]]/assets/components/js/jquery-1.6.2.min.js" type="text/javascript"></script> -->
    <script src="[[++site_url]]/assets/components/js/jquery-1.9.1.js" type="text/javascript"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- <script src="[[++site_url]]/assets/components/js/jquery-3.1.1.min.js" type="text/javascript"></script> -->
    <script src="[[++site_url]]/assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="[[++site_url]]/assets/components/js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="[[++site_url]]/assets/components/js/jquery.opacityrollover.js" type="text/javascript"></script>
</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => 'Шапка сайта',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '  <header class="header">
    <div class="header-inner">
      <div class="email-wrap">
        <a class="email-top" href="javascript:void(0)">shustova-nat@yander.ru</a>
      </div>
      <div class="phones">
        <a href="tel:0684056208"><img class="cellular-logo" src="[[++site_url]]/assets/components/imgs/kyivstar-logo.svg"> (068) 405 - 62 - 08</a>
        <a href="tel:0999503395"><img class="cellular-logo" src="[[++site_url]]/assets/components/imgs/vodafone-logo.svg"> (099) 95 - 033 - 95</a>
      </div>
      <div class="reach-btn-wrap">
        <div class="dropdown">
          <button class="reach-us-btn btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Связаться с нами 
            <span class="caret"></span>
          </button>
          <ul id="reachUs" class="reach-us-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
            <li>
              <label for="reachName">Имя <span>*</span></label>
              <input id="reachName" class="form-control" placeholder="Имя">
            </li>
            <li>
              <label for="reachPhone">Телефон <span>*</span></label>
              <input id="reachPhone" type="text" class="form-control" placeholder="Телефон">
            </li>
            <li>
              <label for="reachEmail">Email <span>*</span></label>
              <input id="reachEmail" type="text" class="form-control" placeholder="Email">
            </li>
            <li>
              <label for="reachMess">Сообщение <span>*</span></label>
              <textarea id="reachMess" placeholder="Сообщение" class="form-control"></textarea>
            </li>
            <li>
              <button class="btn">Отправить</button>
            </li>
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
          <script>
            $(function(){
              $(\'#reachUs\').click(function(e){
                e.stopPropagation();
              });
            });
          </script>
        </div>
        <!-- <a class="reach-us" href="javascript:void(0)">Связаться с нами</a> -->
        <!-- <div class="reach-us-menu">
          <form>
            <div class="input-name">
              <input id="userName" type="text" name="">
              <label for="userName">Имя</label>
            </div>
            <div class="input-phone">
              <input id="userPhone" type="text" name="">
              <label for="userPhone">Телефон</label>
            </div>
            <div class="input-email">
              <input id="userEmail" type="email" name="">
              <label for="userEmail">Email</label>
            </div>
            <div class="input-message">
              <textarea id="userMessage" resize="none"></textarea>
              <label for="userMessage">Сообщение</label>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <header class="header">
    <div class="header-inner">
      <div class="email-wrap">
        <a class="email-top" href="javascript:void(0)">shustova-nat@yander.ru</a>
      </div>
      <div class="phones">
        <a href="tel:0684056208"><img class="cellular-logo" src="[[++site_url]]/assets/components/imgs/kyivstar-logo.svg"> (068) 405 - 62 - 08</a>
        <a href="tel:0999503395"><img class="cellular-logo" src="[[++site_url]]/assets/components/imgs/vodafone-logo.svg"> (099) 95 - 033 - 95</a>
      </div>
      <div class="reach-btn-wrap">
        <div class="dropdown">
          <button class="reach-us-btn btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Связаться с нами 
            <span class="caret"></span>
          </button>
          <ul id="reachUs" class="reach-us-dropdown dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
            <li>
              <label for="reachName">Имя <span>*</span></label>
              <input id="reachName" class="form-control" placeholder="Имя">
            </li>
            <li>
              <label for="reachPhone">Телефон <span>*</span></label>
              <input id="reachPhone" type="text" class="form-control" placeholder="Телефон">
            </li>
            <li>
              <label for="reachEmail">Email <span>*</span></label>
              <input id="reachEmail" type="text" class="form-control" placeholder="Email">
            </li>
            <li>
              <label for="reachMess">Сообщение <span>*</span></label>
              <textarea id="reachMess" placeholder="Сообщение" class="form-control"></textarea>
            </li>
            <li>
              <button class="btn">Отправить</button>
            </li>
            <!-- <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
          <script>
            $(function(){
              $(\'#reachUs\').click(function(e){
                e.stopPropagation();
              });
            });
          </script>
        </div>
        <!-- <a class="reach-us" href="javascript:void(0)">Связаться с нами</a> -->
        <!-- <div class="reach-us-menu">
          <form>
            <div class="input-name">
              <input id="userName" type="text" name="">
              <label for="userName">Имя</label>
            </div>
            <div class="input-phone">
              <input id="userPhone" type="text" name="">
              <label for="userPhone">Телефон</label>
            </div>
            <div class="input-email">
              <input id="userEmail" type="email" name="">
              <label for="userEmail">Email</label>
            </div>
            <div class="input-message">
              <textarea id="userMessage" resize="none"></textarea>
              <label for="userMessage">Сообщение</label>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'menu' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'menu',
          'description' => 'Меню сайта',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '  <menu class="menu">
    <div class="logo">
      <img src="[[++site_url]]/assets/components/imgs/logo.png" usemap = "#nameMap" alt="logo">
      <map name="nameMap">
        <area href="/" shape="poly" coords="115,6,80,12,52,26,29,46,14,72,12,93,18,123,32,141,52,158,78,170,107,176,149,173,183,163,207,144,223,121,231,94,224,65,210,43,193,28,166,14,144,9">
      </map>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-menu">
        <!--  <ul class="nav navbar-nav">
            <li><a href="#"><span class="icon-main"></span> Главная</a></li>
            <li class="dropdown" id="menu-catalog">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-catalog"></span>Каталог </a>
              <ul class="dropdown-menu">
                <li><a href="" title="Кухни">Кухни</a></li>
                <li><a href="" title="Гостинные">Гостинные</a></li>
                <li><a href="" title="Детские">Детские</a></li>
                <li><a href="" title="Спальни">Спальни</a></li>
                <li><a href="" title="Прихожие">Прихожие</a></li>
                <li><a href="" title="Шкафы-купе">Шкафы-купе</a></li>
                <li><a href="" title="Кровати">Кровати</a></li>
                <li><a href="" title="Офисная мебель">Офисная мебель</a></li>
                <li><a href="" title="Для школы и детcкого сада">Для школы и сада</a></li>
              </ul>
            </li>
            <li class="empty"><a href="#"></a></li>
            <li><a href="#"><span class="icon-service"></span> Сервис</a></li>
            <li><a href="#"><span class="icon-contacts"></span> Контакты</a></li>
          </ul>-->
          [[Wayfinder? &startId=`0` &outerTpl=`outerTpl` &rowTpl=`rowTpl` &rowIdPrefix=`menu-item-` &innerTpl=`innerTpl` &innerRowTpl=`innerRowTpl`]]
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </menu>
<script>
  $(\'#menu-catalog\').hover(function(){
    $(this).find(\'.dropdown-toggle\').click();
  },function(){
    $(this).find(\'.dropdown-toggle\').click();
  });
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <menu class="menu">
    <div class="logo">
      <img src="[[++site_url]]/assets/components/imgs/logo.png" usemap = "#nameMap" alt="logo">
      <map name="nameMap">
        <area href="/" shape="poly" coords="115,6,80,12,52,26,29,46,14,72,12,93,18,123,32,141,52,158,78,170,107,176,149,173,183,163,207,144,223,121,231,94,224,65,210,43,193,28,166,14,144,9">
      </map>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-menu">
        <!--  <ul class="nav navbar-nav">
            <li><a href="#"><span class="icon-main"></span> Главная</a></li>
            <li class="dropdown" id="menu-catalog">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon-catalog"></span>Каталог </a>
              <ul class="dropdown-menu">
                <li><a href="" title="Кухни">Кухни</a></li>
                <li><a href="" title="Гостинные">Гостинные</a></li>
                <li><a href="" title="Детские">Детские</a></li>
                <li><a href="" title="Спальни">Спальни</a></li>
                <li><a href="" title="Прихожие">Прихожие</a></li>
                <li><a href="" title="Шкафы-купе">Шкафы-купе</a></li>
                <li><a href="" title="Кровати">Кровати</a></li>
                <li><a href="" title="Офисная мебель">Офисная мебель</a></li>
                <li><a href="" title="Для школы и детcкого сада">Для школы и сада</a></li>
              </ul>
            </li>
            <li class="empty"><a href="#"></a></li>
            <li><a href="#"><span class="icon-service"></span> Сервис</a></li>
            <li><a href="#"><span class="icon-contacts"></span> Контакты</a></li>
          </ul>-->
          [[Wayfinder? &startId=`0` &outerTpl=`outerTpl` &rowTpl=`rowTpl` &rowIdPrefix=`menu-item-` &innerTpl=`innerTpl` &innerRowTpl=`innerRowTpl`]]
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </menu>
<script>
  $(\'#menu-catalog\').hover(function(){
    $(this).find(\'.dropdown-toggle\').click();
  },function(){
    $(this).find(\'.dropdown-toggle\').click();
  });
</script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'catalog_content' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'catalog_content',
          'description' => 'Каталог',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[Wayfinder? &startId=`2` &outerTpl=`outerTplCatalog` &rowTpl=`rowTplCatalog`]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[Wayfinder? &startId=`2` &outerTpl=`outerTplCatalog` &rowTpl=`rowTplCatalog`]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => 'Футер сайта',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '  <footer class="footer">
    <div class="footer-inner">
      <p class="address" >Наш магазин: ул. Курчатова, 7,<br> ТЦ "Курчатовский", 2 этаж <br> <a href="shustova-nat@yandex.ua"> <span>shustova-nat@yandex.ua</span></a><br> тел. +38(068)405-62-08<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+38(099)95-033-95 </p>
      <div class="map_icon">
        <p><a href="contacts.html">Подробнее</a></p>
      </div>
    </div>
  </footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <footer class="footer">
    <div class="footer-inner">
      <p class="address" >Наш магазин: ул. Курчатова, 7,<br> ТЦ "Курчатовский", 2 этаж <br> <a href="shustova-nat@yandex.ua"> <span>shustova-nat@yandex.ua</span></a><br> тел. +38(068)405-62-08<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+38(099)95-033-95 </p>
      <div class="map_icon">
        <p><a href="contacts.html">Подробнее</a></p>
      </div>
    </div>
  </footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'gallery_js' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'gallery_js',
          'description' => 'Инициализация Галереи',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<script>
      $(window).load(function() {
      // We only want these styles applied when javascript is enabled
      // $(\'div.navigation\').css({\'width\' : \'320px\', \'float\' : \'right\'});
      $(\'div.content\').css(\'display\', \'block\');
    
      // Initially set opacity on thumbs and add
      // additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.5;
      $(\'#thumbs ul.thumbs li span\').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  0.0,
        fadeSpeed:         \'fast\',
        exemptionSelector: \'.selected\'
      });
      
      // Initialize Advanced Galleriffic Gallery
      var gallery = $(\'#thumbs\').galleriffic({
        delay:                     7000,
        numThumbs:                 12,
        preloadAhead:              6,
        enableTopPager:            false,
        enableBottomPager:         false,
        imageContainerSel:         \'#slideshow\',
        controlsContainerSel:      \'\',
        captionContainerSel:       \'\',
        loadingContainerSel:       \'\',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              \'Play Slideshow\',
        pauseLinkText:             \'Pause Slideshow\',
        prevLinkText:              \'Prev\',
        nextLinkText:              \'Next\',
        nextPageLinkText:          \'Next\',
        prevPageLinkText:          \'Prev\',
        enableHistory:             true,
        autoStart:                 7000,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // \'this\' refers to the gallery, which is an extension of $(\'#thumbs\')
          this.find(\'ul.thumbs li span\')
            .css({opacity:0.5})
        },
        onPageTransitionOut:       function(callback) {
          this.find(\'ul.thumbs li span\').css({display:\'block\'});
        },
        onPageTransitionIn:        function() {
          this.find(\'ul.thumbs li span\').css({display:\'none\'});
        }
      });
    });
  </script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script>
      $(window).load(function() {
      // We only want these styles applied when javascript is enabled
      // $(\'div.navigation\').css({\'width\' : \'320px\', \'float\' : \'right\'});
      $(\'div.content\').css(\'display\', \'block\');
    
      // Initially set opacity on thumbs and add
      // additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.5;
      $(\'#thumbs ul.thumbs li span\').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  0.0,
        fadeSpeed:         \'fast\',
        exemptionSelector: \'.selected\'
      });
      
      // Initialize Advanced Galleriffic Gallery
      var gallery = $(\'#thumbs\').galleriffic({
        delay:                     7000,
        numThumbs:                 12,
        preloadAhead:              6,
        enableTopPager:            false,
        enableBottomPager:         false,
        imageContainerSel:         \'#slideshow\',
        controlsContainerSel:      \'\',
        captionContainerSel:       \'\',
        loadingContainerSel:       \'\',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              \'Play Slideshow\',
        pauseLinkText:             \'Pause Slideshow\',
        prevLinkText:              \'Prev\',
        nextLinkText:              \'Next\',
        nextPageLinkText:          \'Next\',
        prevPageLinkText:          \'Prev\',
        enableHistory:             true,
        autoStart:                 7000,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // \'this\' refers to the gallery, which is an extension of $(\'#thumbs\')
          this.find(\'ul.thumbs li span\')
            .css({opacity:0.5})
        },
        onPageTransitionOut:       function(callback) {
          this.find(\'ul.thumbs li span\').css({display:\'block\'});
        },
        onPageTransitionIn:        function() {
          this.find(\'ul.thumbs li span\').css({display:\'none\'});
        }
      });
    });
  </script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);