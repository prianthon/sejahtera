<?php

  function tgl_id($date)
  {
    //date mysql 2015-10-10
    return substr($date,8,2).'-'.substr($date,5,2).'-'.substr($date,0,4);
  }

 ?>
