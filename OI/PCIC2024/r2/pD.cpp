/****************************


卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝
卡學長女裝


****************************/



















































#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>
#define endl '\n'
#define read(n) reader<n>()
#define pit(n) #n<<":"<<n<<" "

template<typename T>T reader(){
    T re;cin>>re;return re;
}
template<typename T>istream&operator>>(istream&in,vector<T>&v){
    for(T&i:v)in>>v;
    return in;
}
template<typename T>ostream&operator<<(ostream&ou,vector<T>&v){
    bool o=0;
    //ou<<'[';
    for(T&i:v){
    //    if(o)ou<<',';
        if(o)ou<<' ';
        ou<<i;
        o=1;
    }
    //return ou<<']';
    return ou;
}
template<typename T1,typename T2>ostream&operator<<(ostream&ou,pair<T1,T2>p){
    return ou<<"["<<p.first<<","<<p.second<<"]";

}
template<typename T>void sort(vector<T>&vec){
    sort(vec.begin(),vec.end());
}

struct str{
    INT a[2][2]={};
};

INT mod;
INT n,m;

str operator*(str&a,str&b){
    str re;
    for(INT i=0;i<2;i++){
        for(INT j=0;j<2;j++){
            for(INT k=0;k<2;k++){
                re.a[i][j]+=a.a[i][k]*b.a[k][j];
                re.a[i][j]%=mod;
            }
        }
    }
    return re;
}

ostream&operator<<(ostream&ou,str&a){
    return ou<<"[["<<a.a[0][0]<<","<<a.a[0][1]<<"],["<<a.a[1][0]<<","<<a.a[1][1]<<"]]";
}

template<typename T>T superpow(T a,INT n){
    T re=a;
    T x=a;
    n--;
        cerr<<"n:"<<n<<" x:"<<x<<" re:"<<re<<endl;
    while(n){
        if(n&1)re=re*x;
        x=x*x;
        n>>=1;
        cerr<<"n:"<<n<<" x:"<<x<<" re:"<<re<<endl;
    }
    return re;
}

int main(){
    cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);cerr.tie(0);
    cin>>n>>m;
    cerr<<"mod:"<<mod<<endl;
    str a;
    cin>>a.a[0][0];
    cin>>a.a[1][0];
    cin>>a.a[0][1];
    cin>>a.a[1][1];

    str b;
    cin>>b.a[0][0];
    cin>>b.a[0][1];
    INT x=b.a[0][0];
    INT y=b.a[0][1];
    INT k;
    cin>>k;
    if(k){
        mod=n;
        str c=superpow(a,k);
        c=b*c;
        x=c.a[0][0];

        mod=m;
        c=superpow(a,k);
        c=b*c;
        y=c.a[0][1];
        cerr<<"c:"<<c<<endl;
    }
    cerr<<"b:"<<b<<" a:"<<a<<endl;
    cout<<x<<" "<<y<<endl;
    return 0;
}

/*




11 45
1 4 48 76
1 1 3

























*/

