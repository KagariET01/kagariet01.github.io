{//get head.html
	fetch('https://kagariet01.github.io/head.html')
		.then(response => response.text())
		.then(text => document.getElementById('top').innerHTML = text);
}
{
	fetch('https://kagariet01.github.io/rick.html')
		.then(response => response.text())
		.then(text => document.getElementById('rick').innerHTML = text);
	document.getElementById('rick').style.display = "none";
}
function showrick() {
	document.getElementById('rick').style.display = "inline";
}