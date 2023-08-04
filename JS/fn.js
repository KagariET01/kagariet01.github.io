/*
此.js檔集結所有本專案會用到的函數及設定
只要用<script src="/JS/fn.js"></script>就能使本區所有內容
*/

/*function readfile(URL){//傳入網址，回傳該檔案內容
	var OSbot=new XMLHttpRequest;
	OSbot.open("GET",URL,0);
	OSbot.send(null);
	var re=OSbot.responseText;
	return re;
}*/
function readfile(URL){
	var OSbot=require('fs');
	var re;
	OSbot.readfile(
		URL,
		'utf8',
		(err,data)=>{
			if(err){
				re=404;
			}else{
				re=data;
			}
		}
	);
	return re;
}
function stoHTML(str){//將字串轉換成HTML
	var re=document.createElement('div');
	re.innerHTML=str.trim();
	return re;
}
function stoJSON(str){//將字串轉換成JSON
	var re=JSON.parse(str);
	return re;
}
const nowURL=window.location.search;//獲取目前的網址(把網址列那一串一字不漏地複製到thisURL)
const URLtag=new URLSearchParams(nowURL);//URLSearchParams：獲取參數(就是網址?後面的東西)

var CFG=readfile("http://192.168.5.74/config.json");
console.log(stoJSON(CFG));