<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contacts.php";

    session_start();
    if(empty($_SESSION['contacts_list']))
    {
        $_SESSION['contacts_list'] = array();
        // $contact_a = new Contacts('chitra', 203-789-5673, '5th Avenue');
        // $contact_a->save();
        echo "chitra";
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array
    ('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('contacts_template.php'
        , array('contact' => Contacts::getAll()));
        //return $app['twig']->render('test.php');
    });

    $app->post("/create_contact", function() use ($app){
        $contact = new Contacts($_POST['name'], $_POST['phone'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('create_contact.php', array('new_contact => $contact'));
    });

    return $app;



?>
