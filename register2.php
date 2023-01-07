<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ems");
    $query = "insert into admin(a_name,a_email,password) values('$_POST[a_name]','$_POST[a_email]','$_POST[password]')";
    $query_run = mysqli_query($connection,$query);
?>
<script type= "text/javascript">
    alert("Registration Successfull. You may login now.")
    window.location.href = "index.php";
</script>