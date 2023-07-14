<?php 
  $conn = mysqli_connect("localhost", "root", "", "ams");  
    
  $sql = mysqli_query($conn, "SELECT `empid`,`latitude`, `longitude`, `lat`, `longt`, `OfficeDate` 
                              FROM `tracker` 
                              WHERE `empid` = '18445' ");
  $row = mysqli_fetch_assoc($sql);
  
  $latitude = $row['latitude'];
  $longitude = $row['longitude'];

?>
<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
