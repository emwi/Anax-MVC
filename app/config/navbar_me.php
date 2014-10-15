<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
<<<<<<< HEAD
           'icon' => 'home',
=======
>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
            'text'  => 'Hem',   
            'url'   => '',  
            'title' => 'Me-Site'
        ],
 
        // This is a menu item
        'redovisning'  => [
        'icon' => 'puzzle-piece',
            'text'  => 'Redovisning',   
            'url'   => 'redovisning',   
            'title' => 'Redovisning skriver vi här',

        ],
 
                // This is a menu item
        'comments'  => [
<<<<<<< HEAD
        'icon' => 'comments',
=======
>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
            'text'  => 'Kommentarer',   
            'url'   => 'kommentarer',   
            'title' => 'Kommentarer',

        ],
        
<<<<<<< HEAD
         // This is a menu item

        'tema'  => [
        'icon' => 'th',
            'text'  => 'Tema',   
            'url'   => 'theme',   
            'title' => 'Tema',
            
        'submenu' => [
        
                'items' => [
                     'item 1'  => [
                     'icon' => 'list',
            'text'  => 'Typography',   
            'url'   => 'theme/typography',   
            'title' => 'Typography',

        ], 
       

                'item 2'  => [
                'icon' => 'font',
            'text'  => 'Font Awesome',
            'url'   => 'theme/font',
            'title' => 'Awesome font här',
    
           
],

],
],
],
     

 
        
=======
>>>>>>> 0977e1856f18c9a19109d4437066cbbaaf4f94bc
        // This is a menu item
        'source' => [
        'icon' => 'code',
            'text'  =>'Source', 
            'url'   =>'source',  
            'title' =>'Källkod'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
