<?php

  print_r($_POST);

  if(isset($_POST['data'])){

    $data = mysqli_real_escape_string($_POST['data']);

    if($data == "early game"){
      echo('W E D E M B O Y Z');
    }

    elseif($data == "mid game"){

    }

    elseif($data == "late game"){

    }

    elseif($data == "matchups"){

    }

    elseif($data == "items"){

    }
    else{
      echo('we got something');
    }

  }
  else{
    echo('we got nothing');
  }


?>
