/*
pA: bit
*/

#include<bits/stdc++.h>
using namespace std;
using INT=long long int;
using PII=pair<INT,INT>;
#define endl '\n'
int main(){
	cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);
	INT n,m;
cin>>n>>m;
string sec,key;
cin>>sec>>key;
INT x,y;
cin>>x>>y;
x--,y--;
INT sec_l[n]={};
INT key_l[m]={};
for(INT i=0;i<n;i++){
sec_l[i]=sec[i]-'a';
}
for(INT i=0;i<m;i++){
key_l[i]=key[i]-'a';
if(key_l[i]==x)key_l[i]=y;
else if(key_l[i]==y)key_l[i]=x;
}
for(INT i=0;i<n;i++){
sec_l[i]-=key_l[i%m];
sec_l[i]+=26;
sec_l[i]%=26;
sec[i]='a'+sec_l[i];
}
cout<<sec<<endl;
	return 0;
}

/*

7 3
abcdefg
abc
1 13


n
*/