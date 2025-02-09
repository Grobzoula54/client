<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader);

    echo $twig->render('home.tpl', [
        'titre_page' => 'Home',
        'prenom' => 'John',
        'nom' => 'Doe'
    ]);
    ?>
