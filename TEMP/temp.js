//此文件會為每個頁面載入基礎模板
{//get head.html
	fetch('https://kagariet01.github.io/TEMP/head.html')
		.then(
			response => response.text()
		).then(
			text => document.getElementById('top').innerHTML = text
		);
}