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
	function copyer(n){
		var re=n;
		return re;
	}


	var data={
		"type":"row",
		"index":[
			{"type":"block","index":"S 主詞"},
			{
				"type":"column",
				"index":[
					{
						"type":"row",
						"index":[
							{"type":"block","index":"Vi 不及物動詞"},
							{
								"type":"column",
								"index":[
									{"type":"block","index":" X "},
									{"type":"block","index":"SC 主詞補語"}
								]
							}
						]
					},
					{
						"type":"row",
						"index":[
							{"type":"block","index":"Vt 及物動詞"},
							{
								"type":"column",
								"index":[
									{
										"type":"row",
										"index":[
											{"type":"block","index":"O 受詞"},
											
											{
												"type":"column",
												"index":[
													{
														"type":"row",
														"index":[
															{"type":"block","index":"X"}
														]
													},
													{
														"type":"row",
														"index":[
															{"type":"block","index":"OC 受詞補語"}
														]
													}
												]
											}
										]
									},
									{
										"type":"row",
										"index":[
											{"type":"block","index":"IO 間接受詞"},
											{"type":"block","index":"DO 直接受詞"}
										]
									}
								]
							}
						]
					}
				]
			}
		]
	}

	var templst={};
	templst["block"]=stoHTML(catcher("https://kagariet01.github.io/EngSen/block.html"));
	templst["row"]=stoHTML(catcher("https://kagariet01.github.io/EngSen/row.html"));
	templst["column"]=stoHTML(catcher("https://kagariet01.github.io/EngSen/column.html"));

	function solve(jsf){
		console.log(jsf);
		var re=document.createElement("div");

		if(jsf["type"]=="block"){
			re=copyer(templst["block"]);
			var aaa=re.querySelector("#in").innerHTML;
			re.querySelector("#in").innerHTML=jsf["index"];
		}
		else{
			re=copyer(templst[jsf["type"]]);
			re.querySelector("#in").innerHTML="";
			for(var i=0;i<(jsf["index"]).length;i++){
				re.querySelector("#in").innerHTML+=solve(jsf["index"][i]).innerHTML;
			}
		}
		console.log(re);
		return re;
	}

	document.getElementById("in").innerHTML=solve(data).innerHTML;
	
}