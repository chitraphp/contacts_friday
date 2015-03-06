<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contacts.php";

    session_start();
    if(empty($_SESSION['contacts_list']))
    {
        $_SESSION['contacts_list'] = array();
        $contact1 = new Contacts("chitra", 203-789-5673, "5th Avenue");
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array
    ('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app){
        $new_contact = new Contact()

    });



?>
