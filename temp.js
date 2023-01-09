{//get head.html
	fetch('https://kagariet01.github.io/head.html')
	.then(response=> response.text())
	.then(text=> document.getElementById('top').innerHTML = text);
}