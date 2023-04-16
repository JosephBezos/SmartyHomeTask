<?php
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
#Зробив Орлов Андрій
require_once __DIR__ . '/../../vendor/autoload.php';


use Josephbezos\Tilted\Classes\Circle;
use Josephbezos\Tilted\Classes\Square;
use Josephbezos\Tilted\Classes\Printable;
use Josephbezos\Tilted\Classes\Traits\Loggable;
use Josephbezos\Tilted\Classes\Shape;
use Josephbezos\Tilted\Classes\Rectangle;
use Josephbezos\Tilted\Classes\MyClass;


/*$myClass = new MyClass();
echo $myClass::MY_CONST;

$mySquare = new Square(5);
echo $mySquare->getArea();

$myRectangle = new Rectangle(5, 10);
echo $myRectangle->getArea();

$myCircle = new Circle(5);
echo $myCircle->getArea();
echo $myCircle->getDescription();

$mySquare->log('Hello World');*/
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../public/templates');
$smarty->assign('name', 'Joseph Bezos');
$smarty->assign('age', '2');
$smarty->display('index.tpl');


?>