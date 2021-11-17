<?php

require '../manager/contact.php';
require '../model/contact.php';

$contact = new contact($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message']);
$co = new Manager();
$co->contact($contact);

?>
