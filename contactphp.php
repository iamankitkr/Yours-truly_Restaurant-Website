<?php
session_start();
if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"ankit");

        $query = "INSERT into help(Firstname,Lastname,Emailaddress,Mobilenumber,Writemessage) VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[Emailaddress]','$_POST[Mobilenumber]','$_POST[Writemessage]')";

        $query_run = mysqli_query($connection,$query);
              header("location:contact.php");
    }

    ?>