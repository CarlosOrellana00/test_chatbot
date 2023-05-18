<?php
  $conn = mysqli_connect("localhost","root","","bot");

  $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

  $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
  $run_query = mysqli_query($conn, $check_data) or die("Error");

  if(mysqli_num_rows($run_query) > 0){

  }else{
    echo "no puedo entenderte, lo siento";
  }

?>