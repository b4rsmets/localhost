<?php
use DBConnect as DBConnect;
$connect= DBConnect::getInstance()->getConnect();
$sql="SELECT * FROM seans WHERE movie_id=".$_GET['id']. " ORDER BY time_movie";
$query=$connect->query($sql);
if($query->num_rows) {
  while ($row = $query->fetch_assoc()) {
    $seans[] = $row;
  }
}


