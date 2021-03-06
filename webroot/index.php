<?php

/**
 * This is a Anax pagecontroller.
 *
 */
// Get environment & autoloader and the $app-object.
require __DIR__ . '/config_with_app.php';

// Set configuration for theme
//$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
  $app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

// Set url cleaner url links
$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

    $di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
}); 

<<<<<<< HEAD

$baseUrl = $di->request->getBaseUrl();

=======
>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
// Set routing options
$app->router->add('', function() use ($app) {
    $app->theme->setTitle("Hem");
        $app->theme->addJavaScript('js/toggle.js');
<<<<<<< HEAD
     
=======

>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $app->views->addString('<img src="img/me/img1.jpg">', 'flash')
               ->addString('Keep It Simple Stupid', 'featured-1')
               ->addString('Dont Repeat Yourself', 'featured-2')
               ->addString('You Arent Gonna Need It', 'featured-3')
               
               ->addString('<img src="img/me.jpg">', 'sidebar')
               ->addString('Less', 'triptych-1')
               ->addString('Is', 'triptych-2')
               ->addString('More', 'triptych-3')
               ->addString('<i class="fa fa-facebook-square"></i>  <a href="https://www.facebook.com/emma.wiklund.52" target="_blank">Emma på facebook</a>', 'footer-col-1')
               ->addString('<i class="fa fa-instagram"></i>  <a href="http://instagram.com/honeybunnie89" target="_blank">Emma på Insta</a>', 'footer-col-2')
               ->addString('<i class="fa fa-pinterest-square"></i>   <a href="http://www.pinterest.com/emmawiklund52/" target="_blank">Emma på Pinterest</a>', 'footer-col-3')
               ->addString('<i class="fa fa-linkedin-square"></i>   <a href="https://www.linkedin.com/pub/emma-wiklund/4a/841/1bb" target="_blank">Emma på LinkedIn</a>', 'footer-col-4');
 


    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
 
<<<<<<< HEAD
=======
    $app->theme->addStylesheet('css/comments.css');



>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
           
        $app->views->add('me/page', [
        'content' => $content,
            ]); 
    
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
          'params'     => ['',],
    ]);

           


       
        $app->views->add('me/page', [
        'byline' => $byline,
    ]);
 
});
 
$app->router->add('redovisning', function() use ($app) {
 
    $app->theme->setTitle("Redovisning");

    $content = $app->fileContent->get('redovisning.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
 
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
 
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
 
});

$app->router->add('kommentarer', function() use ($app) {
 
    $app->theme->setTitle("Kommentarer");
    $app->theme->addJavaScript('js/toggle.js');
    $content = $app->fileContent->get('kommentarer.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
 
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
 
    
    $app->theme->addStylesheet('css/comments.css');

           
        $app->views->add('me/page', [
        'content' => $content,
            ]); 
    
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
       'params'     => ['kommentarer',],
    ]);

           

       
        $app->views->add('me/page', [
        'byline' => $byline,
    ]);
 
});
<<<<<<< HEAD

$app->router->add('theme', function() use ($app) {
    $app->theme->setTitle("Theme");
    
    $content = $app->fileContent->get('theme.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');


    $app->theme->setTitle("Regioner");

    $app->views->addString('<img src="img/me/img1.jpg">', 'flash')
               ->addString('Keep It Simple Stupid', 'featured-1')
               ->addString('Dont Repeat Yourself', 'featured-2')
               ->addString('You Arent Gonna Need It', 'featured-3')
               ->addString('<h1>Tema</h1><p>Mitt namn är Emma, en tjej på snart 25 som bor i en liten stad i norrland. Här i kalla norrland bor jag med mina katter.</p>
<p>Jag har jobbat med webdesign sedan 2009 för ett par olika företag. Innan det så jobbade jag en kort sväng som kock och servitris. Idag är jag anställd på ett bolag där arbetsuppgifterna inte bara snurrar runt själva design biten utan även mycket runt SEO, marknadsanalyser, sociala medier och så mycket mer. Jag har aldrig gått en kurs för webdesign eller liknande. Gick Medieprogrammet med inriktning mot foto på gymnasiet och avslutade 2013 en grundkurs i Visual Basic.NET på Malmö Högskola.</p>
<p>Jag jobbar på dagarna och pluggar på nätterna då personlig utveckling och programering känns roligt och spännande. När jag inte sitter vid datorn så är det foto och bakning som håller mig sysselsatt, vilket inte blir så ofta just nu då livet kretsar runt jobbet och skolan.</p><p>OBS! Lägg till <b>?show_grid</b> i urlen för att se rutnät!</p>
', 'main')
               ->addString('<img src="img/me.jpg">', 'sidebar')
               ->addString('Less', 'triptych-1')
               ->addString('Is', 'triptych-2')
               ->addString('More', 'triptych-3')
               ->addString('<i class="fa fa-facebook-square"></i>  <a href="https://www.facebook.com/emma.wiklund.52" target="_blank">Emma på facebook</a>', 'footer-col-1')
               ->addString('<i class="fa fa-instagram"></i>  <a href="http://instagram.com/honeybunnie89" target="_blank">Emma på Insta</a>', 'footer-col-2')
               ->addString('<i class="fa fa-pinterest-square"></i>   <a href="http://www.pinterest.com/emmawiklund52/" target="_blank">Emma på Pinterest</a>', 'footer-col-3')
               ->addString('<i class="fa fa-linkedin-square"></i>   <a href="https://www.linkedin.com/pub/emma-wiklund/4a/841/1bb" target="_blank">Emma på LinkedIn</a>', 'footer-col-4');
 
 
          
 
});


$app->router->add('theme/typography', function() use ($app) {
    $app->theme->setTitle("Typography");
    $content = $app->fileContent->get('typography.html');

    $app->views->addString($content, 'main')
               ->addString($content, 'sidebar');
               
$app->theme->addStylesheet('css/anax-grid/show-grid.css');
 
});

$app->router->add('theme/font', function() use ($app) {
 
    $app->theme->setTitle("Font Awesome");
    
    $app->views->addString('<img src="../img/me/img2.jpg">', 'flash')
              ->addString('Keep It Simple Stupid', 'featured-1')
               ->addString('Dont Repeat Yourself', 'featured-2')
               ->addString('You Arent Gonna Need It', 'featured-3')
               ->addString('<img src="../img/me.jpg">', 'sidebar')
               ->addString('<h1>Font Awesome</h1><p>Här provar vi Font Awesomes ikoner. Se fler <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">här >></a></p><p><i class="fa fa-coffee fa-2x"></i> fa-coffee</p>
<p><i class="fa fa-home fa-2x"></i> fa-home</p>
<p><i class="fa fa-pinterest-square fa-2x"></i> fa-pinterest</p>
<p><i class="fa fa-linkedin fa-2x"></i></i> fa-linkedin</p>
<p><i class="fa fa-instagram fa-2x"></i> fa-insta</p>
<p><i class="fa fa-camera fa-2x"></i> fa-camera</p>', 'main')
               ->addString('Less', 'triptych-1')
               ->addString('Is', 'triptych-2')
               ->addString('More', 'triptych-3')
               ->addString('<i class="fa fa-facebook-square"></i>  <a href="https://www.facebook.com/emma.wiklund.52" target="_blank">Emma på facebook</a>', 'footer-col-1')
               ->addString('<i class="fa fa-instagram"></i>  <a href="http://instagram.com/honeybunnie89" target="_blank">Emma på Insta</a>', 'footer-col-2')
               ->addString('<i class="fa fa-pinterest-square"></i>   <a href="http://www.pinterest.com/emmawiklund52/" target="_blank">Emma på Pinterest</a>', 'footer-col-3')
               ->addString('<i class="fa fa-linkedin-square"></i>   <a href="https://www.linkedin.com/pub/emma-wiklund/4a/841/1bb" target="_blank">Emma på LinkedIn</a>', 'footer-col-4');
 
 
});


=======
>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
 
$app->router->add('source', function() use ($app) {
 
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");
 
    $source = new \Mos\Source\CSource([
        'secure_dir' => '..', 
        'base_dir' => '..', 
        'add_ignore' => ['.htaccess'],
    ]);
 
    $app->views->add('me/source', [
        'content' => $source->View(),
    ]);
 
});


if( $di->request->getGet(null) == "show_grid" ) {
  $app->theme->addStylesheet('css/anax-grid/show-grid.css');
}
 
$app->router->handle();

$app->theme->render();
