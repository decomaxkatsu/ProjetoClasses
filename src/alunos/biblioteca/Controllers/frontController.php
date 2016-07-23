<?php

    namespace alunos\biblioteca\Controllers;

    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;


    class frontController implements ControllerProviderInterface{
        public function connect(Application $app){
            $controllers = $app['controllers_factory'];
            
            $controllers->get('/', function (Application $app){
                return $app['twig']->render('conteudo/index.twig');
            });
            
            return $controllers;
        }
    }
?>