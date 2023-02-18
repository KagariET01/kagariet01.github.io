{




	
	var blog_board=document.getElementById('blog_list').innerHTML;
	document.getElementById('blog_list').innerHTML="";
	var reader=new FileReader(HTML);
	var gorun=true;
	reader.error=function(){
		gorun=false;
	}
	reader.onload=function(){
		var addtxt=blog_board.getElementById('doc_here').innerHTML=reader.result;
		document.getElementById('blog_list').innerHTML=addtxt+document.getElementById('blog_list').innerHTML;
	}

}