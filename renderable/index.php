<?php

require_once 'interface/Renderable.php';
require_once 'classes/InputElement.php';
require_once 'classes/TextElement.php';
require_once 'classes/Form.php';

$form = new Form();
$form->addElement(new TextElement("Username:"));
$form->addElement(new InputElement());
$form->addElement(new TextElement("Password:"));
$form->addElement(new InputElement());

echo $form->render();