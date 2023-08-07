/*
此.js檔用於載入網頁基礎模板
包括但不限於網頁名、網頁icon、網頁模板、CSS...
一樣可直接調用
*/
var iconHTML='<link rel="icon" type="image/x-icon" href="'+CFG["iconURL"]+'">'
//console.log(iconHTML);
document.getElementsByTagName("head")[0].innerHTML+=iconHTML;