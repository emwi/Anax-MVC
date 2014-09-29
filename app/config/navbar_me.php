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
            'text'  => 'Hem',   
            'url'   => '',  
            'title' => 'Me-Site'
        ],
 
        // This is a menu item
        'redovisning'  => [
            'text'  => 'Redovisning',   
            'url'   => 'redovisning',   
            'title' => 'Redovisning skriver vi här',

        ],
 
                // This is a menu item
        'comments'  => [
            'text'  => 'Kommentarer',   
            'url'   => 'kommentarer',   
            'title' => 'Kommentarer',

        ],
        
        // This is a menu item
        'source' => [
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
