
async function main(){
	function getTT(t){
		console.log(t);
		return String(t.Y)+"-"+String(t.M)+"-"+String(t.D);
	}

	let showhide=0;
	let showdoc=0;
	let postid=URLtag.get('id');


	let docslist=stoJSON(await readfile('./list.json'));

	if(document.getElementById('title')!=null)
		document.getElementById('title').innerHTML=docslist[postid].title;
	if(document.getElementById('time')!=null)
		document.getElementById('time').innerHTML=getTT(docslist[postid].time);
	if(document.getElementById('author')!=null)
		document.getElementById('author').innerHTML=docslist[postid].author;
	//tag
	if(document.getElementById('tag')!=null)
		document.getElementById('tag').innerHTML=docslist[postid].tag;
		
	if(document.getElementById('content')!=null)
		document.getElementById('content').innerHTML=await readfile('./'+docslist[postid].fname+'/index.html');
}
main()







