async function main(){
	let postlst=stoJSON(await readfile('./docs/list.json'));//文章列表
	let sposttmp=stoHTML(await readfile('./TEMP/html/docs_TEMP_small.html'));//  文章列表樣板

	function getTT(t){
		console.log(t);
		return String(t.Y).padStart(2,'0')+"-"+String(t.M).padStart(2,'0')+"-"+String(t.D).padStart(2,'0');
	}

	let showhide=0;
	let showdoc=0;

	document.getElementsByTagName('head')[0].innerHTML+=
	'<link rel="stylesheet" href="./TEMP/style_small.css" type="text/css">';


	let id=0;
	for(let i of postlst){
		let tmp=sposttmp.cloneNode(true);
		if(i.hide && !showhide)continue;
		
		if(tmp.querySelector('#title')!=null)
			tmp.querySelector('#title').innerHTML=i.title;
		
		if(tmp.querySelector('#time')!=null)
			tmp.querySelector('#time').innerHTML=getTT(i.time);
		
		if(tmp.querySelector('#tag')!=null)
			tmp.querySelector('#tag').innerHTML=i["tag"];

		if(tmp.querySelector('#link')!=null)
			tmp.querySelector('#link').href='./docs/?id='+String(id);

		if(tmp.querySelector('#link')!=null)
			tmp.querySelector('#link').id=i["id"];


		if(showdoc){
			if(tmp.querySelector('#docs')!=null)
				tmp.querySelector('#docs').innerHTML=await readfile('./docs/'+i["id"]+'/index.html');
		}

		document.getElementById('docs').innerHTML+=tmp.innerHTML;
		id++;
	}
}
main();