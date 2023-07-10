{
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


	var data={
		"type":"row",
		"index":[
			{"type":"block","index":"l1"},
			{"type":"block","index":"l2"},
			{"type":"block","index":"l3"}
		]
	}

	var templst;
	templst["block"]=stoHTML(catcher("https://kagariet01.github.io/EngSen/block.html"));
	templst["row"]=stoHTML(catcher("https://kagariet01.github.io/EngSen/row.html"));

	function solve(jsf){
		var re=document.createElement("div");
		if(jsf["type"]=="block"){
			re=templst["block"];
			re.querySelectory("in").innerHTML=jsf["index"];
		}else if(jsf["type"]=="row"){
			
			for(var nw:jsf["index"]){
				re.innerHTML+=solve(nw).innerHTML;
			}
		}
		return re;
	}

	document.getElementById("in").innerHTML=solve(data).innerHTML;
	
}