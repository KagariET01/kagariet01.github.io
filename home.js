
/*async function catcher(url) {//函數(前面有async是為了在函數裡面寫await)
	try {
		const response = await fetch(url); // 发送请求并等待响应
		//await:等待 fetch=抓取url
		const data = await response.text(); // 提取响应内容并等待转化为文本
		return data; // 返回响应内容
	} catch (error) {
		console.error(error); // 处理错误信息
		return null;
	}
}*/

function catcher(url) {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", url, false);
  xhttp.send();
	if(xhttp.status ==404){
		return null;
	}
  return xhttp.responseText;
}
/*function createHtmlFromString(htmlString) {
  const html = document.createElement('div');
  html.innerHTML = htmlString.trim();
  return html;
}*/
function stoHTML(str){
	const re=document.createElement('div');
	re.innerHTML=str.trim();
	return re;
}
function HTMLtos(html) {
  var str = html.toString();
  return str;
}

var tmptxt=catcher("https://kagariet01.github.io/blog_tmp.html");
var tmp=stoHTML(tmptxt);
console.log(tmp);


var alldoc="";

if(tmp!=null){
	var i=1;
	while(true){
		var nw=catcher("https://kagariet01.github.io/blog/docs/"+i+"/post.html");
		if(nw!=null){
			tmp.querySelector("#docs").innerHTML=nw;
			console.log(tmp);
			var ad=tmp.innerHTML;
			alldoc=ad+alldoc;
		}
		i++
		break;
	}
}


document.getElementById("blog_list").innerHTML=alldoc;
