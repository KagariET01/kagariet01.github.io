
#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>

template<typename T>istream&operator>>(istream&in,vector<T>&vec){
    for(T&i:vec)in>>vec;
    return in;
}

struct str{
    INT l=0;
    INT e=0;
    INT m=0;
};

istream&operator>>(istream&in,str&s){
    return in>>s.l>>s.e>>s.m;
}

int main(){
    cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    INT n;
    cin>>n;
    str a[n];
    for(auto&i:a)cin>>i;
    INT lv=0;
    INT ans=0;
    for(str&i:a){
        if(i.l*1000<=lv){
            lv+=i.e;
            ans+=i.m;
        }
    }
    cout<<ans<<endl;
    return 0;
}

/*




6
0 821 201
0 906 754
0 438 442
1 531 380
1 887 311
1 412 861









*/
