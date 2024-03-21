

fast_load_list=[
	"ET01"
];

data={}
for(let i of fast_load_list){
	data[i]=await readfile("./"+i+"/index.html");
	document.getElementById(i).innerHTML=data[i];
}

async function show_post(user){
	if(data[user]==null){
		data[user]=await readfile("./"+user+"/index.html");
	}
	if(document.getElementById(user).innerHTML==""){
		document.getElementById(user).innerHTML=data[user];
	}else{
		document.getElementById(user).innerHTML="";
	}
}


