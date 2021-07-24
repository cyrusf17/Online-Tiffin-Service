<?php

session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
echo"<script>alert('Logout successful');window.location.href='index.php';</script>";
  ?>