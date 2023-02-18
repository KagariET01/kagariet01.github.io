
async function catcher(url) {//函數(前面有async是為了在函數裡面寫await)
	try {
		const response = await fetch(url); // 发送请求并等待响应
		//await:等待 fetch=抓取url
		const data = await response.text(); // 提取响应内容并等待转化为文本
		return data; // 返回响应内容
	} catch (error) {
		console.error(error); // 处理错误信息
		return null;
	}
}
//fn字串轉html
function stoHTML(str) {
	var re=document.createElement("div");
	re.innerHTML=str;
	return re;
}

var tmp=stoHTML(catcher("https://kagariet01.github.io/blog_tmp.html"));

var alldoc="";

if(tmp!=null){
	var i=1;
	while(true){
		var nw=catcher("https://kagariet01.github.io/blog/docs/"+i+"/post.html");
		if(nw!=null){
			tmp.querySelector("#docs").innerHTML=nw;
			alldoc=alldoc+String(tmp);
		}
		i++
	}
}

document.getElementsById("blog_list").innerHTML=alldoc;

console.log(alldoc);