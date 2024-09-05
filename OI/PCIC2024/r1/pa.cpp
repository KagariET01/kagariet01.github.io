/*
pA: bit
*/

#include<bits/stdc++.h>
using namespace std;
#define INT long long int
using PII=pair<INT,INT>;
#define endl '\n'




int main(){
	cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);
	INT n,q;
	cin>>n>>q;
	map<INT,INT>mp;
	INT tot=0;
	INT basic=0;

	for(INT i=0;i<n;i++){
        cin>>mp[i];
        tot+=mp[i];
	}
	while(q--){
        INT op;
        cin>>op;
        INT x,c;
        //cerr<<"tot:"<<tot<<" basic:"<<basic<<endl;
        switch(op){
            case 1:
                cin>>x>>c;
                x--;
                mp[x]-=c;
                tot-=c;
                break;
            case 2:
                cin>>x>>c;
                x--;
                mp[x]+=c;
                tot+=c;
                break;
            case 3:
                mp.clear();
                tot+=n*basic;
                basic=tot/n;
                //if(tot<0&&tot%n)basic++;
                tot=0;
                break;
            case 4:
                cin>>x;
                x--;
                cout<<basic+mp[x]<<endl;
                break;
        }
	}
	return 0;
}

/*

*/
