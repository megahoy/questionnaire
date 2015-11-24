# Questionnaire
Symfony2 application with using Twitter Bootstrap

Installation Symfony2 installer on Linux Systems:
<pre><code>
$ sudo curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony
$ sudo chmod a+x /usr/local/bin/symfony
</code></pre>

Running all tests:
<pre><code>
$ phpunit -c app/
</code></pre>

Running one test:
<pre><code>
$ phpunit -c app --filter 'DefaultControllerTest::testIndex' src/AppBundle/Tests/Controller/DefaultControllerTest.php
</pre></code>

Cache cleanup:
<pre><code>
sudo php app/console cache:clear --env=prod --no-debug
</pre></code>

Install assets:
<pre><code>
app/console assets:install
</pre></code>