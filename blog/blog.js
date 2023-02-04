{//get URL tag and load blog
	const thisURL=window.location.search;//獲取目前的網址(就是把網址列一字不漏地複製到thisURL)
	const thisURLtagtxt=thisURL;//將網址複製到thisURLtagtxt
	console.log(thisURLtagtxt);//解析網址，並把結果放到thisURLtagtxt
	const URLtag=new URLSearchParams(thisURLtagtxt);//URLSearchParams：獲取參數(就是網址?後面的東西)
	const URL_p=URLtag.get('p');//獲取文章編號
	const postURL='https://kagariet01.github.io/blog/docs/'+URL_p+"/post.html";//postURL為要讀取的文章的檔案路徑
	//const postURL='E:/git/kagariet01.github.io/blog/docs/'+URL_p+"/post.html";//postURL為要讀取的文章的檔案路徑
	
	//document.getElementById('docs').innerHTML = postURL;

	fetch(postURL)
	 	.then(response => response.text())
	 	.then(text => document.getElementById('docs').innerHTML = text);
}