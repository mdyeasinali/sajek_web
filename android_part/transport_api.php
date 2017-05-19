<?php
require_once('../class/Transport.php');
$transport = new Transport();
$row = $transport->show_transport_api();
die( json_encode($row));

?>