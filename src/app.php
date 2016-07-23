<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $app = new Silex\Application();

    #config do sistema
    $directory = [];
    $directory['directoryROOT'] = dirname(__DIR__);

    // Registro do Twig
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../resources'
    ));
    
    // Chama a DOTENV onde se obtem as configuracoes do projeto
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();    
?>