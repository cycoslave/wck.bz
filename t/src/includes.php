<?php
 require_once("/web/wbz/t/src/admin.php");
 require_once("/web/wbz/t/src/errors.php");
 //require_once("/web/wbz/t/src/recent.php");
 //require_once("/web/wbz/t/src/sidesearch.php");
 require_once("/web/wbz/t/src/post.php");
 
 if (isset($_GET['help'])) {
  require_once("/web/wbz/t/src/help.php");
 } else if (isset($_GET['search'])) {
  require_once("/web/wbz/t/src/search.php");
 } else {
  require_once("/web/wbz/t/src/pastebin.php");
 }
?>