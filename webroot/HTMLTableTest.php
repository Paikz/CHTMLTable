<?php
/**
 * This is a Anax pagecontroller.
 *
 */
// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php';
$di->set('table', '\phes15\HTMLTable\CHTMLTable');
$app->router->add('', function() use ($app) {

  $table = $app->table->createTable(

  "testTable",

  [
    [
      'label' => 'Name',
    ],
    [
      'label' => 'Age',
    ],
    [
      'label' => 'Email',
    ],
  ],

  [
    [
      'name' => 'Philip Esmailzade',
      'age' => '19',
      'email' => 'test123@test.com',
    ],

    [
      'name' => 'test',
      'age' => '99',
      'email' => 'test321@test.com',
    ],
  ]

);

    $app->theme->setTitle("Simple HTMLTable");

    $app->views->add('default/page', [
        'title' => "SimpleHTMLTable example",
        'content' => $table
    ]);

});

$app->router->handle();
$app->theme->render();
