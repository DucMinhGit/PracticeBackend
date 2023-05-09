<?php

include_once "DumperFactory.php";

$dump = DumperFactory::getDumper();

$dump->dump("PHP abstract class is awesome!");

?>