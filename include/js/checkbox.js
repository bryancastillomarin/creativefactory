"use strict"

function check() {
	var flag = document.getElementById('check');
	if (flag.checked) {
		flag.checked = false;
	} else {
		flag.checked = true;
	}
}