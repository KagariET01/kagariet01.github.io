
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


var tmptxt = catcher("https://kagariet01.github.io/blog_tmp.html");
var tmp = stoHTML(tmptxt);
console.log(tmp);

var alldoc = "";

if (tmp != null) {
	var i = 1;
	while (true) {
		var nw = catcher("https://kagariet01.github.io/blog/docs/" + i + "/post.html");
		if (nw != null) {
			var nwhtml=stoHTML(nw);
			nwhtml.querySelector("#title").a = "https://kagariet01.github.io/blog/?p="+i;
			tmp.querySelector("#docs").innerHTML = nwhtml;//將獲得的文章放入模板
			console.log(tmp);
			var ad = tmp.innerHTML;
			alldoc = ad + alldoc;//將文章插入文章列表裡
		}else break;
		i++
	}
}


document.getElementById("blog_list").innerHTML = alldoc;
