<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ems");
    $query = "insert into venue(v_name,v_address,capacity) values('$_POST[v_name]','$_POST[v_address]','$_POST[capacity]')";
    $query_run = mysqli_query($connection,$query);
?>
<script type= "text/javascript">
    alert("Event Added.")
    window.location.href = "admin_dashboard.php";
</script>