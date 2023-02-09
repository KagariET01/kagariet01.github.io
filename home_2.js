{
	var fs=require('fs');
	var board="";
	fs.readFile(
		'https://kagariet01.github.io/blog_board.html',
		function(err,dta){
			if(err)return;
			board=dta.toString();
		}
	)
	console.log(board);
}