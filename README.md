# Questionnaire
Symfony2 application with using Twitter Bootstrap

Installation Symfony2 installer on Linux Systems:<br />
`$ sudo curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony` <br />
`$ sudo chmod a+x /usr/local/bin/symfony`

Running all tests: <br />
`$ phpunit -c app/`

Running one test: <br />
`$ phpunit -c app --filter 'DefaultControllerTest::testIndex' src/AppBundle/Tests/Controller/DefaultControllerTest.php`

Cache cleanup: <br />
`$ sudo php app/console cache:clear --env=prod --no-debug`

Install assets: <br />
`$ app/console assets:install`
