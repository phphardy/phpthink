<?php
  phpinfo();
  echo date("Y-m-d H:i:s");
  echo 1;
  function createAjax(){
    try{
      return new XMLHttpResponse();
    }catch(error){}
    try{
      return new ActiveXobject("microsoft.XMLHTTP");
    }catch(error){}
  }
?>
