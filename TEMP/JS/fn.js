/*
此.js檔集結所有本專案會用到的函數及設定
只要用<script src="/JS/fn.js"></script>就能使本區所有內容
*/

async function readfile(URL){//傳入網址，回傳該檔案內容
	let fe=await fetch(URL);
	data=await fe.text();
	console.debug("[DBG]read file successful \""+URL+"\"");
	return data;
}
function stoHTML(str){//將字串轉換成HTML
	let re=document.createElement('div');
	re.innerHTML=str.trim();
	return re;
}
function stoJSON(str){//將字串轉換成JSON
	let re=JSON.parse(str.trim());
	return re;
}
const nowURL=window.location.search;//獲取目前的網址(把網址列那一串一字不漏地複製到thisURL)
const URLtag=new URLSearchParams(nowURL);//URLSearchParams：獲取參數(就是網址?後面的東西)

//console.log(CFG);



//樣式列表
let stylelist=[
	'<link id="color_css" rel="stylesheet" type="text/css" href="/TEMP/style_dark.css">',
	'<link id="color_css" rel="stylesheet" type="text/css" href="/TEMP/style_gray.css">',
	'<link id="color_css" rel="stylesheet" type="text/css" href="/TEMP/style_light_gray.css">',
	'<link id="color_css" rel="stylesheet" type="text/css" href="/TEMP/style_light.css">'
];
let nwc=0;

function c_color(){
	nwc++;
	nwc%=stylelist.length;
	document.getElementById("color_css").outerHTML=stylelist[nwc];
}