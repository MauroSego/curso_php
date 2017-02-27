<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('fake.emial@pub.com', 1234);

$user->setName('Mauro', 'Segovia');

echo $user->getFirstName();
echo $user->getLastName();
echo PHP_EOL;

#var_dump($user);