/****************************


§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{
§Ú·R¤p£{£{


****************************/



















































#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>
#define endl '\n'
#define read(n) reader<n>()

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



const INT mxn=1e5+5;
INT b[mxn];
INT storage[mxn]; // give i return where storage box a_i at .
INT n,q;
vector<PII>st[mxn];//st[i]=ith storage it return what inside
INT ktt=0;

int main(){
    cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);cerr.tie(0);
    cin>>n>>q;
    for(INT i=1;i<=n;i++){
        INT k;
        cin>>k;
        ktt+=k;
        for(INT j=1;j<=k;j++){
            INT ina,inb;
            cin>>ina>>inb;
            b[ina]=inb;
            storage[ina]=i;
        }
    }
    while(q--){
        INT x,y;
        cin>>x>>y;
        storage[x]=y;
    }
    for(INT i=1;i<=ktt;i++){
        st[storage[i]].push_back(PII(b[i],i));
    }
    for(INT i=1;i<=n;i++){
        sort(st[i]);
    }
    for(INT i=1;i<=n;i++){
        bool o=0;
        for(auto&j:st[i]){
            if(o)cout<<" ";
            cout<<j.second;
            o=1;
        }
        if(st[i].empty()){
            cout<<"none";
        }
        cout<<endl;
        //cerr<<"i:"<<i<<" st:"<<st[i]<<endl;
    }
    return 0;
}

/*








2 5
2 3 914351957 4 894361243
2 2 287093328 1 92132175
3 2
4 2
3 1
1 2
1 2





















*/

