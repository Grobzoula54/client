<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader);

    echo $twig->render('admin.tpl', [
        'titre_page' => 'Espace administrateur',
        'prenom' => 'John',
        'nom' => 'Doe',
        'role' => 'Administrateur',
        'pays' => 'France'
    ]);
    ?>
