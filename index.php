
<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    use Illuminate\Database\Capsule\Manager as Capsule;
    use Slim\Views\Twig;
    use Slim\Views\TwigMiddleware;

    require 'vendor/autoload.php';
    require './models/Categorie.php';
    require './controllers/categorieController.php';

    if(file_exists('./controllers/categorieController.php')){

    }else{
        echo "pas de categorieController\n";
        die();
    }
    $categorieController = new CategorieController();
    $app = AppFactory::create();
    $twig = Twig::create('templates', ['cache' => false]);

    $capsule = new Capsule();
        $capsule->addConnection(require 'database.php');
        $capsule->bootEloquent();

        $app->add(TwigMiddleware::create($app, $twig));
        // accueil -> listes des catgories
        $app->get('/', function (Request $request, Response $response) {
            $view = Twig::fromRequest($request);
            global $categorieController;
            $categories = $categorieController->getCategories();
            return $view->render($response, 'liste_des_categories.php', ['categories'=>$categories]);

        });



        // $app->get('/Test-connexion', function (Request $request, Response $response) {
        //     global $categorieController;

        //     $response->getBody()->write(var_dump($categorieController->getCategories()[0]->getName()));
        //     return $response;
        // });

    $app->run();
