<?php

echo '<h3>EasyCopy (external module)</h3><br><p>Enter source and destination project ids in EasyCopyExModule.php.</p>';

require_once("EasyCopy.php");

$obj = new UtahCCTS\EasyCopy\EasyCopy();

$obj->copy();
