
import { createRequire } from 'module';
const require = createRequire(import.meta.url);

var board = "";
{
	//load temp
	var fs_read_temp = new require('fs');
	var fserr = true;
	fs_read_temp.readFile(
		'blog_board.html',
		function (err, dta) {
			fserr = err;
			if (err) {
				console.log("load err");
				return;
			}
			board = dta.toString();
			//			console.log(board);
		}
	)





	//load docs
	if (!fserr) {
		//document.getElementById("doc_here").innerHTML = "404 error<br>something went wrong, so we can't load blog";
	} else {
		var board_html = document.createElement('div');
		board_html.innerHTML = board;



		var i = 1;
		var fs_load_blog = new require('fs');
		var blog_list_txt = "";
		var loadend = false;
		while (!loadend) {
			var takeurl = "./blog/docs/" + i + "/post.html";
			console.log(takeurl);
			fs_load_blog.readFile(
				takeurl,
				function (err, dta) {
					loadend = err;
					if (err) {
						loadend = true;
						return
					}
					var addfile = board_html;
					addfile.getElementById('docs').innerHTML = dta;
					blog_list_txt = addfile.innerHTML + "\n" + blog_list_txt;
					//document.getElementById('blog_list').innerHTML=blog_list_txt;
				}
			)
			i++;
			loadend = true;
		}
		console.log(blog_list_txt);
	}
}


