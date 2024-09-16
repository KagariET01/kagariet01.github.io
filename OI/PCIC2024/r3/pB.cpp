/*


WHY PLAY "SPRING DAY SHADOW"?????


*/




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
    string s="";
    getline(cin,s);
    for(auto&i:s){
        if('A'<=i&&i<='Z'){
            i-='A';
            i+='a';
        }
    }
    //cout<<s<<endl;
    bool inc=0;
    string ans="haruhikage";
    for(INT i=0;i<s.size()-ans.size()+1;i++){
        INT it=i;
        inc=1;
        for(auto&j:ans){
            while(s[it]==' ')it++;
            if(s[it]!=j){inc=0;break;}
            it++;
        }
        if(inc)break;
    }
    if(s=="haruhikage"){
        cout<<"\\(Q A Q)/"<<endl;
    }else if(inc){
        cout<<"q(Q V Q)p"<<endl;
    }else{
        cout<<"d(> A <)b"<<endl;
    }
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


\(Q A Q)/
q(Q V Q)p

nande haruhikage yatta no




*/
