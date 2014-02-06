<?php

    $db_server       = 'localhost' ;
    $db_username     = 'awansley_flex1' ;
    $db_password     = 'ksb2ZQuNlkp0' ;
    $db_databasename = 'awansley_flex1' ;
    $lang="english";  // use the name of language file without the extension
                     // example: for french.php use french or for english.php use english

// do not change anything below this line!!!
//------------------------------------------
    $PHP_SELF= $_SERVER["PHP_SELF"];
    $u_login = "false";
    include $lang . ".php" ;
    $link = mysql_connect($db_server, $db_username, $db_password) or die("<div style=\"color: red\"><span style=\"font: bold 12pt arial\">" . $db_err . "</span><br><br>\n<strong>Error:</strong> " . mysql_error() . "<br><br>\nBe sure to check the <em>faq_config.php</em> file on your server.</div>");
    mysql_select_db($db_databasename) or die("<div style=\"color: red\"><span style=\"font: bold 12pt arial\">Either incorrect database name provided or database not present!</span><br><br>\n<strong>Error:</strong> " . mysql_error() . "<br><br>\nBe sure to check the <em>faq_config.php</em> file on your server.</div>");
?>