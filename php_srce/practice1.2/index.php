
<html>
<head>
  <title>Satovi</title>

  <script type="text/javascript">
<!--

function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

// -->
</script>

</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )">
    Vrijeme na klijentu: <span id="clock" style="color:red">&nbsp;</span>
    <br /><br />
    Vrijeme na poslužitelju: <span style="color:blue"><?php echo date('G:i:s')?></span>
</body>
</html>
