{//get URL tag and load blog
	const thisURL=window.location.search;//獲取目前的網址(就是把網址列一字不漏地複製到thisURL)
	const thisURLtagtxt=thisURL;//將網址複製到thisURLtagtxt
	console.log(thisURLtagtxt);//解析網址，並把結果放到thisURLtagtxt
	const URLtag=new URLSearchParams(thisURLtagtxt);//URLSearchParams：獲取參數(就是網址?後面的東西)
	const URL_p=URLtag.get('p');//獲取文章編號
	if(URL_p==null){
		URL_p="null";
	}
	const postURL='https://kagariet01.github.io/blog/docs/'+URL_p+"/post.html";//postURL為要讀取的文章的檔案路徑
	//const postURL='./docs/'+URL_p+"/post.html";//postURL為要讀取的文章的檔案路徑
	
	//document.getElementById('docs').innerHTML = postURL;
	console.log(postURL);

	function catcher(url) {
		var xhttp = new XMLHttpRequest();//xhttp為可讀取檔案的功能變數
		xhttp.open("GET", url, false);//設定xhttp:動作為讀取，讀取路徑為url，非同步讀取
		try {
			xhttp.send();//嘗試發送請求
			if (xhttp.status == 404) {//如果回傳404(error)
				return null;
			} else {
				return xhttp.responseText;//xhttp.responseText為獲取到的檔案(轉成string型態)
			}
		}
		catch (error) {
			return null
		}
	}
	function stoHTML(str) {
		const re = document.createElement('div');//re=建立新html變數，初始標籤為div
		re.innerHTML = str.trim();//將str放入re裡面(trim為去除空格，系統會自動將字串轉換成html格式)
		return re;
	}

	var dcstxt=catcher(postURL);
	var dcHTML=stoHTML(dcstxt);
	dcHTML.querySelector('#title').a = "https://kagariet01.github.io/blog/?p="+URL_p;


	document.getElementById('docs').innerHTML = dcHTM.innerHTMLL;
	

	/*	
	var reader=new FileReader();
	reader.readAsText(postURL);
	reader.onload=()=>{
		
	}*/
}