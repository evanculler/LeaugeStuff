<?php

include "erabe/query.php";
/*
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
*/
$explodeURL = array();
$explodeURL = explode("/",$_SERVER['REQUEST_URI']);
if($explodeURL[1] == 'api' && $explodeURL[2] == 'v1'){

  if($explodeURL[3] == 'animes' && $explodeURL[3] != null){

    if($explodeURL[4] != null){

      $aQuery = new query("localhost","root","root","Anime","8888");
      echo(json_encode($aQuery->searchName($explodeURL[4])));

    }

  }

  if($explodeURL[3] == 'animeIDs' && $explodeURL[3] != null){

    if($explodeURL[4] != null){

      $aQuery = new query("localhost","root","root","Anime","8888");
      echo(json_encode($aQuery->getAnime($explodeURL[4])));

    }

  }

  if($explodeURL[3] == 'erabe' && $explodeURL[3] != null){

    if($explodeURL[4] != null){

      $aQuery = new query("localhost","root","root","Anime","8888");
      echo(json_encode($aQuery->searchErabe($explodeURL[4])));
    }

  }

}


?>
