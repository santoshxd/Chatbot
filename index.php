<?php
  if(isset($_REQUEST['hub_challenge'])) {
    $c = $_REQUEST['hub_challenge'];
    $v = $_REQUEST['hub_verify_token'];
}
if($v == "token111")
{
echo $c;
}

?>