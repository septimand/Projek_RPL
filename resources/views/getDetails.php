<?php
include "config.php";

$request = $_POST['request']; // request

// Get username list
if($request == 1){
 $search = $_POST['search'];

 $query = "SELECT * FROM users WHERE nomor_induk like'%".$search."%'";
 $result = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($result) ){
  $response[] = array("value"=>$row['id'],"label"=>$row['nomor_induk']);
 }

 // encoding array to json format
 echo json_encode($response);
 exit;
}

// Get details
if($request == 2){
 $userid = $_POST['userid'];
 $sql = "SELECT * FROM users WHERE id=".$userid;

 $result = mysqli_query($con,$sql);

 $users_arr = array();

 while( $row = mysqli_fetch_array($result) ){
  $userid = $row['id'];
  $nomor_induk = $row['nomor_induk'];
  $nama_user = $row['nama_user'];

  $users_arr[] = array("id" => $userid, "nomor_induk" => $nomor_induk,"nama_user" =>$nama_user);
 }

 // encoding array to json format
 echo json_encode($users_arr);
 exit;
}
