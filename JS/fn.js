/*
此.js檔集結所有本專案會用到的函數及設定
只要用<script src="/JS/fn.js"></script>就能使本區所有內容
*/

function readfile(URL){//傳入網址，回傳該檔案內容
	var OSbot=new XMLHttpRequest;//檔案操作器
	OSbot.open("GET",URL,0);
	OSbot.send(null);
	var re;
	if(OSbot.status==404){
		re=null;
	}else{
		re=OSbot.responseText;
	}
	return re;
}
function stoHTML(str){//將字串轉換成HTML
	var re=document.createElement('div');
	re.innerHTML=str.trim();
	return re;
}
function stoJSON(str){//將字串轉換成JSON
	var re=JSON.parse(str.trim());
	return re;
}
const nowURL=window.location.search;//獲取目前的網址(把網址列那一串一字不漏地複製到thisURL)
const URLtag=new URLSearchParams(nowURL);//URLSearchParams：獲取參數(就是網址?後面的東西)

var CFGtxt=readfile('/config.json');
var CFG=stoJSON(CFGtxt);
console.log(CFGtxt);
//console.log(CFG);