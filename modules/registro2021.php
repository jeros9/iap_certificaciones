<?php
    $student->setState(7);	
    $municipios = $student->EnumerateCiudades();
    $smarty->assign("municipios", $municipios);	
?>