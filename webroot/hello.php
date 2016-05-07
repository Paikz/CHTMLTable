<?php
/**
 * This is a Anax pagecontroller.
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php';

$di->set('table', '\phes15\HTMLTable\CHTMLTable');

$di->set('HtmltableController', function() use ($di) {
    $controller = new \phes15\HTMLTable\HTMLTableController();
    $controller->setDI($di);
    return $controller;
});

$di->setShared('db', function() {
  $db = new \Mos\Database\CDatabaseBasic();
  $db->setOptions(require ANAX_APP_PATH . 'config/config_mysql.php');
  $db->connect();
  return $db;
});

// Prepare the page content
$app->theme->setVariable('title', "Hello World Pagecontroller")
           ->setVariable('main', "
    <h1>Hello World Pagecontroller</h1>
    <p>This is a sample pagecontroller that shows how to use Anax.</p>
");

$app->theme->setTitle("hello");
$app->theme->addStylesheet('css/HTMLTableTest.css');

$app->dispatcher->forward([
    'controller' => 'htmltable',
    'action'     => 'index',
]);



// Render the response using theme engine.
$app->theme->render();
