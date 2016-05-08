# CHTMLTable
CHTMLTable is a general PHP class used for creating simple html tables.Specifically written for Anax-MVC but can also be modified and used as a standalone class.
## Installation
To install CHTMTable you need to add this snippet of code to your composer.json file.
```
  "require": {
        "php": ">=5.4",
        "paikz/chtmltable": "dev-master"
    },
```

Run this command in your Anax-MVC installation folder:
```
php composer.phar install --no-dev
```

Assuming you have a clean installation of Anax-MVC you need to move the HTMLTable folder in vendor/paikz/chtmltable/src into app/src in your Anax-installation folder.

You can then move the test file from vendor/paikz/chtmltable/webroot into your Anax webroot. The test file is a very basic example of how a html table created with CHTMLTable can look like.

##How to use

Creating a table is very easy. The method `createTable($tableName, $tableHeaders, $tableData)` takes three parameters.

`$tableName` represents the name of the table. Commonly used for styling purposes.

`$tableHeaders` represents the content of the table header-tags `<th></th>`. 

`$tableData` represents the content of the table data-tags `<td></td>`.

Both `$tableHeaders` and `$tableData` are multidimensional arrays. It is very easy to create tables with fetched statements from a database with PDO. Just fetch an array and send it in `$tableData`.

A very simple example taken from the test file looks like this.
```
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
```


| **Name**                                   | **Age** | **Email** |

| Philip Esmailzade | 19  | test123@test.com |

| test                                       | 99  | test321@test.com |


##License
This code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)




