<?php
  $ucid = $_POST["ucid"];
  $password = $_POST["password"];
  #$ucid = "person1";
  #$password = "password1";
    
  $curl_to_andrew = curl_init();
  curl_setopt($curl_to_andrew, CURLOPT_URL, 'https://afsaccess4.njit.edu/~ajs24/authenticate.php');
  curl_setopt($curl_to_andrew, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_to_andrew, CURLOPT_POSTFIELDS, "ucid=$ucid&password=$password");
  $response_in = curl_exec($curl_to_andrew);
  curl_close($curl_to_andrew);
  
  #$response_bool = json_decode($response_in, true)["authenticated"];
  #$reponse_type = json_decode($response_in, true)["type"];
  $response_in = json_decode($response_in, 1);
  echo json_encode($response_in);
  #echo "\n";
  #echo $response_in["type"];
?>