function showMore() { // Shows and hides database table
	if (panel.offsetHeight < 200) {
		panel.style.height = "200px";
		moreBtn.innerHTML = "Click to hide table";
		panel.style.visibility = "visible";
	}
	else{
		panel.style.height = "5px";
		panel.style.visibility = "hidden";
		moreBtn.innerHTML = "Click here to view table of orders";
	}
}

/* Display More Enhancement */	
function init3 () {
	panel = document.getElementsByClassName('panel')[0];
	moreBtn = document.getElementById('click_btn');

	moreBtn.onclick = showMore;
}
/* On-Load */
window.addEventListener("load", init3, false);