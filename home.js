const thisURL=window.location.search;
const thisURLtagtxt=thisURL;
const URLtag=new URLSearchParams(thisURLtagtxt)
console.log("網址tag="+URLtag);


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
function stoJSON(str){
	var re=JSON.parse(str);
	return re;
}


var tmptxt = catcher("https://kagariet01.github.io/TEMP/blog_tmp.html");
var tmp = stoHTML(tmptxt);
//console.log(tmp);
var jsonex={"test":"test"};

var alldoc = "";

if (tmp != null) {
	var i = 1;
	while (true) {
		var nw = catcher("https://kagariet01.github.io/blog/docs/" + i + "/post.html");
		if (nw != null) {
			var nwHTML=stoHTML(nw);
			var post_Tag;
			try{
				post_Tag=stoJSON(nwHTML.querySelector("#jsonData").innerHTML);
				//console.log(post_Tag);
				//console.log(typeof(post_Tag));
				if(post_Tag["hide"] && URLtag.get("showhide")!=1){i++;continue;}
			}catch(error){
				post_Tag=null;
			}

			var nwhtml=stoHTML(nw);
			nwhtml.querySelector("#title").href = "https://kagariet01.github.io/blog/?p="+i;
			
			tmp.querySelector("#docs").innerHTML = nwhtml.innerHTML;//將獲得的文章放入模板
			//console.log(tmp);
			var ad = tmp.innerHTML;
			alldoc = ad +"<br>"+ alldoc;//將文章插入文章列表裡
		}else break;
		i++
	}
}










const URL_result=URLtag.get('result');
if (URL_result== "I_want_AC") {
	var i = "AC";
	{
		var nw = catcher("https://kagariet01.github.io/blog/docs/" + i + "/post.html");
			var nwHTML=stoHTML(nw);
			

			var nwhtml=stoHTML(nw);
			
			tmp.querySelector("#docs").innerHTML = nwhtml.innerHTML;//將獲得的文章放入模板
			//console.log(tmp);
			var ad = tmp.innerHTML;
			alldoc = ad +"<br>"+ alldoc;//將文章插入文章列表裡
	}
}
























document.getElementById("blog_list").innerHTML = alldoc;
