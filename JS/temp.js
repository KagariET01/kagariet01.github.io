/*
此.js檔用於載入網頁基礎模板
包括但不限於網頁名、網頁icon、網頁模板、CSS...
一樣可直接調用
*/
//icon
var iconURL=CFG["iconURL"];
var iconHTML='<link rel="icon" type="image/x-icon" href="'+iconURL+'">'
document.getElementsByTagName("head")[0].innerHTML+=iconHTML;

var headURL=CFG["headURL"];
document.getElementById('head').innerHTML=readfile(headURL);

var titlename=CFG["title"];
var titleHTML='<title>'+titlename+'</title>'
document.getElementsByTagName("head")[0].innerHTML+=titleHTML;

var vert="";
for(var i=0;i<CFG["button"].length;i++){
	console.log(vert);
	vert+="\""+CFG["button"][i]["name"]+":";
	vert+=CFG["button"][i]["value"]+" \"";
}
document.head.innerHTML+="<style>body::after{content:"+vert+";}</style>"