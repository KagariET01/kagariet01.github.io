function solve(){
	var mxn=1e9;
	var lst=[1,1,1];
	var ans=[];
	var i=0;
	while(i<=mxn){
		lst[i]=1;
	}
	var rr=0;
	i=2;
	while(i<=sqrt(mxn,2)+1){
		if(lst[i]==1){
			lst[i]=i;
			lst[rr]=i;
			rr++;
		}
		var j=0;
		while(j<rr){
			if(ans[j]*i>mxn)break;
			lst[ans[j]*i]=ans[j];
			if(j==lst[i])break;
			j++;
		}
		i++;
	}
	console.log(ans);
}
solve()