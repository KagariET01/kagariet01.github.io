{
	function filereader(url,tpe=null){
		var re=new tpe;
		fetch(url).then(
			function(response){
				if(response.ok){
					re=response.tpe;
				}
			}
		)
		return re;
	}


	var tmp=filereader("blog_board.html");
	var tmpget=tmp.ok;
	tmp=tmp.html();

	console.log(tmp);

}