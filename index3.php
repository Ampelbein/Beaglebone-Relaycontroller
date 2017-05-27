<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Remote control</title>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
	
<form id="relay" action="index.php" method="GET">
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Wohnzimmer An" onClick="relayOn($pin=17)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=17)"/>
    <br>
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Balkon An    " onClick="relayOn($pin=24)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=24)"/>
    <br>
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Esstisch An" onClick="relayOn($pin=7)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=7)"/>
    <br>
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Strahler An" onClick="relayOn($pin=27)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=27)"/>
    <br>
<!---
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Relay 5 An" onClick="relayOn($pin=8)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=8)"/>
    <br>
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="Relay 6 An" onClick="relayOn($pin=22)"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Aus" onClick="relayOff($pin=22)"/>
--->
    <br>
    <br>
    <input type="button" id="alleSchalterAn" style="border:1px solid #000; font-size:40px;" value="Alle An" onClick="alleAn()"/>
    <input type="button" id="alleSchalterAus" style="border:1px solid #000; font-size:40px;" value="Alle Aus" onClick="alleAus()"/>
    <br>
    <br>
    <input type="button" id="tuerAuf" style="border:1px solid #000; font-size:40px;" value="Haust&uuml;r" onClick="oeffnerAn($pin=23)"/>
    <br>
    <input type="button" id="tuerAuf" style="border:1px solid #000; font-size:40px;" value="Garage" onClick="oeffnerAn($pin=18)"/>
    <br>
	<input type="hidden" name="total" id="total" value="">
	<input type="hidden" name="gpioNum" id="gpioNum" value="">
	<input type="hidden" name="setAll" id="setAll" value="">
</form>

<?php
	$gpio = $_GET["gpioNum"];
	$setall = $_GET["setAll"];
	if ($setall == "no"){
		exec("gpio -g mode ".$gpio." out");
	}
	if ($setall == "yes"){
                exec("gpio -g mode 22 out");
                exec("gpio -g mode 8 out");
                exec("gpio -g mode 17 out");
                exec("gpio -g mode 27 out");
                exec("gpio -g mode 7 out");
                exec("gpio -g mode 24 out");
	}
	$state = $_GET["total"];
	  
	if ($state == "on"){
		exec("gpio -g write ".$gpio." 0");
	}
	if ($state == "off"){
		exec("gpio -g write ".$gpio." 1");
	}
	if ($state == "tuerauf"){
		exec("gpio -g write ".$gpio." 0; sleep 1 ; gpio -g write ".$gpio." 1");
	}
	if ($state == "allean"){
                exec("gpio -g write 8 0");
		exec("sleep 1");
                exec("gpio -g write 22 0");
                exec("sleep 1");
                exec("gpio -g write 17 0");
                exec("sleep 1");
                exec("gpio -g write 27 0");
                exec("sleep 1");
                exec("gpio -g write 7 0");
                exec("sleep 1");
                exec("gpio -g write 24 0");
	}
        if ($state == "alleaus"){
                exec("gpio -g write 8 1");
                exec("sleep 1");
                exec("gpio -g write 22 1");
                exec("sleep 1");
                exec("gpio -g write 17 1");
                exec("sleep 1");
                exec("gpio -g write 27 1");
                exec("sleep 1");
                exec("gpio -g write 7 1");
                exec("sleep 1");
                exec("gpio -g write 24 1");
        }
?>

</body>
