{//get URL tag and load blog
	const thisURL=window.location.search;
	const thisURLtagtxt=thisURL;
	console.log(thisURLtagtxt);
	const URLtag=new URLSearchParams(thisURLtagtxt);
	const URL_p=URLtag.get('p');//獲取文章編號
	const postURL='https://kagariet01.github.io/blog/docs/'+URL_p+"post.html";//postURL為要讀取的文章的檔案路徑
	
	fetch(postURL)
		.then(response => response.text())
		.then(text => document.getElementById('docs').innerHTML = text);
}