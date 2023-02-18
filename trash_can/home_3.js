let tmp = fetch("https://kagariet01.github.io/blog/blog_temp.html").then(function (response) { return response.text() });
console.log(tmp);
/*
02/11進度：
想要將fetch得到的東西轉成text，並丟進變數
這邊有個在終端機可以用，但是在檔案裡用不了的指令
await fetch("https://kagariet01.github.io/blog/blog_temp.html").then(function(response){return response.text()});

太長了，拆解一下
await
fetch(URL)									//fetch
.then(											//然後
	function(response){				//用函數獲取response
		return response.text()	//回傳轉換成text的response
	}
);

*/