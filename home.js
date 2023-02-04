{
	const i=1;
	const fso = CreateObject("Scripting.FileSystemObject");//設定變數fs為：檔案組件

	while(true){
		const nowfile="./blog/docs/"+i+"/post.html";//設定nowfile為第i篇文章的檔案路徑
		const washave=fso.FileExists(nowfile);//TF值，若該檔案存在即回傳T
		if(washave){
			
		}else{
			break;
		}
		i++;
	}
}