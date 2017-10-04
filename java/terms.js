/*
<!-- Desciption: COS10020 Assignment2 - Terms and Conditions Window Javascript -->
<!-- Author: Lucas Moore -->
<!-- Date: 09/08/17 -->
*/

/* Functions */
function showdiscWin () {
	discWin.style.display = "block";
	scrnOverlay.style.visibility = "visible";
}
function hidediscWin () {
	discWin.style.display = "none";
	scrnOverlay.style.visibility = "hidden";
}

/* Main Function */
function init2 () {
	console.log("inti2");
	/* Links */
	discBtn = document.getElementById("discBtn");
	discWinClose = document.getElementById("discWinClose");
	discWin = document.getElementById("discWin");
	scrnOverlay = document.getElementById("scrnOverlay");

// Menu Highlight Enhancement Section
	var bodyId = document.body.id;
	var nav = document.getElementsByTagName('nav') [0];
	var index = document.getElementById("index_link");
	var form = document.getElementById("form_link");
	var enh = document.getElementById("enh_link");
	var table = document.getElementById("table_link");

	if (bodyId == "index") {
		index.style.background = "#B42929";
	}
	if (bodyId == "form") {
		form.style.background = "#B42929";
	}
	if (bodyId == "enhancements") {
		enh.style.background = "#B42929";
	}
	if (bodyId == "table") {
		table.style.background = "#B42929";
	}		
	console.log("Highlights working");
	
	/* Events */
  discBtn.onclick = showdiscWin;
  discWinClose.onclick = hidediscWin;
}
/* On-Load */
window.addEventListener("load", init2, false);