{//get head.html
	fetch('https://kagariet01.github.io/head.html')
		.then(response => response.text())
		.then(text => document.getElementById('top').innerHTML = text);
}
function ricktime() {
	fetch('https://kagariet01.github.io/rick.html')
		.then(response => response.text())
		.then(text => document.getElementById('rick').innerHTML = text);
}