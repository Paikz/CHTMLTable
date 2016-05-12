<?php

namespace phes15\HTMLTable;

/**
 * HTML Form elements.
 *
 */
class CHTMLTableTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testCreate1()
    {
        $table = new \phes15\HTMLTable\CHTMLTable();
        $res = $table->createTable(

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

        $exp = <<<EOD
<table class='testTable'><tr><th>Name</th><th>Age</th><th>Email</th></tr><tr><td>Philip Esmailzade</td><td>19</td><td>test123@test.com</td></tr><tr><td>test</td><td>99</td><td>test321@test.com</td></tr></table>
EOD;

        $this->assertEquals($res, $exp, "Table missmatch.");
    }

}
