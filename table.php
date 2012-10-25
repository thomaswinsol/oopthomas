<?php
ini_set('display_erros',1);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'includes/Table.php';
require_once 'includes/Row.php';
require_once 'includes/Cell.php';

$celA1 =  new cell('dit is A1');
$celA2 =  new cell('dit is A2');


$rowA = new Row();
$rowA->append($celA1);
$rowA->append($celA2);
$rowA->append(new cell('dit is A3'));

$rowB = new Row();
$rowB->append($celA1);
$rowB->append($celA2);
$rowB->append(new cell('dit is A3'));

$table = new Table;
$table->append($rowA);
$table->append($rowB);
$table->draw();
?>
