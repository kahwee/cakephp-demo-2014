# cakephp-demo-2014

Dessert CRUD example from a 2014 CakePHP introduction. The application is
in `app/`; the bundled framework is in `lib/Cake/`.

## Setup and example

Use a compatible historical PHP/MySQL environment. The original manifest
requires PHP >=5.2.8 and mcrypt; it does not establish modern PHP compatibility.

1. Import [database-dump/cakedemo_2014-03-10.sql](database-dump/cakedemo_2014-03-10.sql).
2. Set local database credentials in `app/Config/database.php` and review
   `app/Config/core.php`.
3. Serve the application with a CakePHP-compatible web server and open
   `/desserts` (or `index.php/desserts` when URL rewriting is unavailable).

The [Dessert model](app/Model/Dessert.php),
[Desserts controller](app/Controller/DessertsController.php), and
[views](app/View/Desserts/) contain the example. The page layout is
`app/View/Layouts/default.ctp`.

[Original presentation](https://speakerdeck.com/kahwee/gentle-introduction-to-cakephp)
· [Historical contributor notes](CONTRIBUTING.md)

This documentation pass did not install the legacy runtime, database, or
PHPUnit 3.7 test environment.
