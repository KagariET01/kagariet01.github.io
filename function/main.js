function readfile(URL){
	var OSbot=new XMLHttpRequest;
	OSbot.open("GET",URL,0);
	OSbot.send(null);
	var re=OSbot.responseText;
	return re;
}
function stoHTML(str){
	var re=document.createElement('div');
	re.innerHTML=str.trim();
	return re;
}
function stoJSON(str){
	var re=JSON.parse(str);
	return re;
}