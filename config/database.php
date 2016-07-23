<?php
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;

    require_once $directory['directoryROOT'].'/../src/app.php';

    $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
        'dbs.options' => 
        [
            'projetoclasses_default' => 
            [
                'driver'   => 'pdo_mysql',
                'host'     => getenv('DB_HOST'),
                'dbname'   => getenv('DB_NAME'),
                'user'     => getenv('DB_USER'),
                'password' => getenv('DB_PSW'),
                'charset'  => getenv('DB_CHARSET'),
            ]
        ],
    ));

    $paths = array("src/alunos/biblioteca/Models/Entities/Api");
    $isDevMode = false;
    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $driverImpl = $config->newDefaultAnnotationDriver('src/alunos/biblioteca/Models/Entities/Api');
    $config->setProxyDir('src/alunos/biblioteca/Models/Entities/Api');
    $config->setProxyNamespace('src\alunos\biblioteca\Models\Entities\Api');
    $config->setAutoGenerateProxyClasses(true);
    //Conexão Default do Projeto Classes
    $entityManager = EntityManager::create($app['dbs.options']['projetoclasses_default'], $config);
    $app['entityManager'] = $entityManager;
?>