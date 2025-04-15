<?php
$bday=new DateTime('2001-08-05');
$today=new DateTime();
$age=$today->diff($bday);
echo"your age is". $age->y."years".$age->m."months".$age->d."days";
echo("<br>This program is written by Vardaan Valecha");
?>