{
	fetch('rick.html')
		.then(response => response.text())
		.then(text => document.getElementById('rick').innerHTML = text);
	document.getElementById('rick').style.display = "none";
}
function showrick() {
	document.getElementById('rick').style.display = "inline";
}