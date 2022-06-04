<?php
session_start();

if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
 
  $users = [
    "user" => "0000",
    "user1" => "0000",
    "user2" => "0000"
  ];


  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }


  if (!isset($_SESSION["user"])) { $failed = true; }
}


if (!isset($_SESSION[‘user’])) {
  header(Location: "ponuda.html");
  die();
  } 


