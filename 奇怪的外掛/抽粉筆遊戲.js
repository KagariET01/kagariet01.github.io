var ans=[0,0,0,0,0];
var sol=[0,0,0,0,0];
var txt=["藍","紅","橘","黃","綠"];
var col=["#00A2E8","#ED1C24","#FF7F27","#FFF200","#22B14C"]
var playflag=1,i,j,score=1;
function getCookie(cname){
  var name=cname+"=";
  var ca=document.cookie.split(';');
  for(i=0;i<ca.length;i++){
    var c=ca[i];
    while(c.charAt(0)==' '){
      c=c.substring(1);
    }
    if(c.indexOf(name)==0){
      return c.substring(name.length,c.length);
    }
  }
  return "";
}

function showoptions(a){
	hide();
	document.getElementById("color"+a).classList.toggle("show");
}
function hide(){
	var dropdowns=document.getElementsByClassName("dropdown-content");
	var i;
	for (i=0;i<dropdowns.length;i++){
		var openDropdown=dropdowns[i];
		if(openDropdown.classList.contains('show')){
			openDropdown.classList.remove('show');
    }
  }
}
function start(){
	var cd=parseInt(getCookie("countdown"))
	if(cd>parseInt(Date.now())){
		playflag=1;
	}
	document.getElementById("no").style="visibility:hidden;height:0px;margin-top:0px;margin-bottom:0px;";
	if(playflag){
		document.getElementById("area").style="";
	}
	else{
		document.getElementById("www").style="";
		var waits=cd-parseInt(Date.now());
		document.getElementById("time").innerHTML=parseInt(waits/3600000)+"時"+parseInt((waits/60000)%60)+"分"+parseInt((waits/1000)%60)+"秒";
		var salmons=parseInt(getCookie("salmons"));
		if(isNaN(salmons))
			salmons=0;
		document.getElementById("fishes").innerHTML=salmons;
	}
}
function recolor(a,b){
	document.getElementById("b"+a).style.background=b;
	if(b=="#00A2E8"){
		document.getElementById("b"+a).c=0;
	}
	else if(b=="#ED1C24"){
		document.getElementById("b"+a).c=1;
	}
	else if(b=="#FF7F27"){
		document.getElementById("b"+a).c=2;
	}
	else if(b=="#FFF200"){
		document.getElementById("b"+a).c=3;
	}
	else if(b=="#22B14C"){
		document.getElementById("b"+a).c=4;
	}
}
function send(){
	for(i=0;i<5;i++){
		ans[i]=parseInt(document.getElementById("b"+(i+1)).c);
		if(isNaN(ans[i]))
			ans[i]=0;
	}
	if(confirm("這是你的猜測："+txt[ans[0]]+txt[ans[1]]+txt[ans[2]]+txt[ans[3]]+txt[ans[4]]+"，確認此猜測？")){
		document.getElementById("area").style="visibility:hidden;height:0px;";
		document.getElementById("send").style="visibility:hidden;height:0px;";
		endgame();
	}
}
function endgame(){
	document.getElementById("result").style="";
	for(i=0;i<5;i++){
		sol[i]=0;
		document.getElementById("u"+i).style.background=col[sol[i]];
		document.getElementById("u"+i).innerHTML=txt[sol[i]];
		document.getElementById("w"+i).style.background=col[ans[i]];
		document.getElementById("w"+i).innerHTML=txt[ans[i]];
	}
	for(i=0;i<5;i++){
		if(sol[i]==ans[i]){
			sol[i]=ans[i]=-1;
			score*=10;
		}
	}
	for(i=0;i<5;i++){
		for(j=0;j<5;j++){
			if(sol[i]==ans[j]&&sol[i]!=-1){
				sol[i]=ans[j]=-1;
				score*=4;
			}
		}
	}
	score/=100;
	score=parseInt(score);
	document.getElementById("amount").innerHTML=score;
	cookie();
}
window.onclick = function(event){
	if(!event.target.matches('.dropbtn')){
  	hide();
	}
}
function cookie(){
	var salmons=parseInt(getCookie("salmons"));
	if(isNaN(salmons))
		salmons=0;
	salmons+=score;
	var d=new Date();
  d.setTime(d.getTime()+(4320*60*60*1000));
	document.cookie="salmons="+salmons+";expires="+d;
	d.setTime(d.getTime()+(3*60*60*1000))
	document.cookie="countdown="+(Date.now()+(3*60*60*1000))+";expires="+d;
	document.getElementById("total").innerHTML=salmons;
}