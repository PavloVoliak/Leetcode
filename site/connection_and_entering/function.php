<?php 

function html_escape($string){
    return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
}

?>