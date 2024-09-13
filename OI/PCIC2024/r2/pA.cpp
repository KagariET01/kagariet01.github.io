/****************************


STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ
STSTONEORZ


****************************/



















































#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT.INT>
#define endl '\n'

bool cla[10][10];

int main(){
    cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);cerr.tie(0);
    bool ans=1;
    for(INT i=0;i<2;i++){
        INT n;
        cin>>n;
        while(n--){
            INT a,b;
            cin>>a>>b;
            if(cla[a][b]){
                ans=0;
                break;
            }else cla[a][b]=1;
        }
    }
    if(ans)cout<<"Yaaa"<<endl;
    else cout<<"Sad"<<endl;
    return 0;
}



