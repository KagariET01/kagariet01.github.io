/*
此.js檔用於載入網頁基礎模板
包括但不限於網頁名、網頁icon、網頁模板、CSS...
一樣可直接調用
*/
let CFGtxt=readfile('/config.json');
let CFG=stoJSON(CFGtxt);
document.getElementsByTagName("head")[0].innerHTML+='<link id="anime_css" rel="stylesheet" type="text/css" href="/TEMP/anime.css">';



//set CSS
let headadd=readfile("/TEMP/html/head.html");
document.getElementsByTagName("head")[0].innerHTML+=headadd;

//icon
let iconURL=CFG["iconURL"];
let iconHTML='<link rel="icon" type="image/x-icon" href="'+iconURL+'">'
document.getElementsByTagName("head")[0].innerHTML+=iconHTML;

//set title
let titlename=CFG["title"];
let titleHTML='<title>'+titlename+'</title>'
document.getElementsByTagName("head")[0].innerHTML+=titleHTML;

let headURL=CFG["headURL"];
document.getElementById('header').innerHTML=readfile(headURL);




let bt=readfile("/TEMP/html/header2.html");
document.getElementById("MO").innerHTML+=bt;
document.getElementById("PC").innerHTML=bt;
