# CHTMLTable
CHTMLTable is a general PHP class used for creating simple html tables.Specifically written for Anax-MVC but can also be modified and used as a standalone class.
## Installation
To install CHTMTable you need to add this snippet to your composer.json file.
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

Assuming you have a clean install of Anax-MVC you need to move the HTMLTable folder in vendor/paikz/chtmltable/src into app/src in your Anax-installation folder.

You can then move the test file from vendor/paikz/chtmltable/webroot into your Anax webroot. The test file is a very basic example of how a html table created with CHTMLTable can look like.


