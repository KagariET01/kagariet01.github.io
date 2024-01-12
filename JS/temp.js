/*
此.js檔用於載入網頁基礎模板
包括但不限於網頁名、網頁icon、網頁模板、CSS...
一樣可直接調用
*/
let CFGtxt=readfile('/config.json');
let CFG=stoJSON(CFGtxt);

//icon
let iconURL=CFG["iconURL"];
let iconHTML='<link rel="icon" type="image/x-icon" href="'+iconURL+'">'
document.getElementsByTagName("head")[0].innerHTML+=iconHTML;

let titlename=CFG["title"];
let titleHTML='<title>'+titlename+'</title>'
document.getElementsByTagName("head")[0].innerHTML+=titleHTML;

let headadd=readfile("/TEMP/head.html");
document.getElementsByTagName("head")[0].innerHTML+=headadd;


let headURL=CFG["headURL"];
document.getElementById('header').innerHTML=readfile(headURL);