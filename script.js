window.onload = function(){
	buttonOn = document.getElementById('submitOn');
	buttonOn.onClick = relayOn;
	
	buttonOff = document.getElementById('submitOff');
	buttonOff.onClick = relayOff;

	buttonTuer = document.getElementById('tuerAuf');
	buttonTuer.onClick = oeffnerAn;

	buttonAlle = document.getElementById('alleSchalterAn');
	buttonAlle.onClick = alleAn;

        buttonAlleAus = document.getElementById('alleSchalterAus');
        buttonAlleAus.onClick = alleAus;


}

function relayOn($pin){
	
	hidden = document.getElementById("total");
	hidden.value = "on";
	gpi = document.getElementById("gpioNum");
	gpi.value = $pin;
        alleset = document.getElementById("setAll");
        alleset.value = "no";
	form = document.getElementById("relay");
	form.method = "GET";
	form.action = "index.php";
	form.submit();
}

function relayOff($pin){
	
	hidden = document.getElementById("total");
	hidden.value = "off";
	gpi = document.getElementById("gpioNum");
	gpi.value = $pin;
        alleset = document.getElementById("setAll");
        alleset.value = "no";
	form = document.getElementById("relay");
	form.method = "GET";
	form.action = "index.php";
	form.submit();
}

function oeffnerAn($pin){

	hidden = document.getElementById("total");
	hidden.value = "tuerauf";
	gpi = document.getElementById("gpioNum");
	gpi.value = $pin;
        alleset = document.getElementById("setAll");
        alleset.value = "no";
	form = document.getElementById("relay");
	form.method = "GET";
	form.action = "index.php";
	form.submit();
}

function alleAn(){

        hidden = document.getElementById("total");
        hidden.value = "allean";
	alleset = document.getElementById("setAll");
	alleset.value = "yes";
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "index.php";
        form.submit();
}

function alleAus(){

        hidden = document.getElementById("total");
        hidden.value = "alleaus";
        alleset = document.getElementById("setAll");
        alleset.value = "yes";
        form = document.getElementById("relay");
        form.method = "GET";
        form.action = "index.php";
        form.submit();
}

