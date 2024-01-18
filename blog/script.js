let postlst=stoJSON(readfile('/blog/docs/list.json'));
let posttmp=stoHTML(readfile('./TEMP/html/docs_TEMP.html'));
let sposttmp=stoHTML(readfile('./TEMP/html/docs_TEMP_small.html'));

function getTT(t){
	console.log(t);
	return String(t.Y)+"-"+String(t.M)+"-"+String(t.D);
}


let big=false;
for(let i of postlst){
	console.log(i);
	if(!big){
		let tmp=sposttmp.cloneNode(true);
		tmp.querySelector('#title').innerHTML=i.title;
		tmp.querySelector('#time').innerHTML=getTT(i.time);
		tmp.querySelector('#docshere').href='/blog/docs/'+i["id"]+'/index.html';
		tmp.querySelector('#docshere').id=i["id"];
		document.getElementById('docs').innerHTML+=tmp.innerHTML;
	}
}