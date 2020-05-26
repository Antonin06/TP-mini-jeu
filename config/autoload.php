<?php

include('classes/PersonnagesManager.php');

function loadClass($classe)
{
    require ('classes/'.$classe.'.php');
}
spl_autoload_register('loadClass');
