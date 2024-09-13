/****************************


dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue
dequeue


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
const INT mxnm=1e7+7;
INT t[mxn];
INT ttt[mxn];
INT staff[mxnm];
INT n,m,q;

struct str{
    INT nw=0;
    str*l=nullptr;
    str*r=nullptr;
    void pop(){
        if(this->l)this->l->r=this->r;
        if(this->r)this->r->l=this->l;
        delete(this);
    }
    str* push_back(INT v){
        str *b=new str;
        b->nw=v;
        b->l=this;
        this->r=b;
        return b;
    }
    str*push_front(INT v){
        str *b=new str;
        b->nw=v;
        b->r=this;
        this->l=b;
        return b;
    }
};

str* op[mxn];
str* ed[mxn];
str* it[mxnm];


INT nw;
INT query;
INT ans;

int main(){
    cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);cerr.tie(0);
    cin>>n>>m>>q;
    for(INT i=1;i<=n;i++){
        for(INT j=1;j<=m;j++){
            cin>>nw;
            if(op[i]==nullptr){
                op[i]=new str;
                op[i]->nw=nw;
                ed[i]=op[i];
            }else{
                ed[i]=ed[i]->push_back(nw);
            }
            it[nw]=ed[i];
            staff[nw]=i;
        }
    }
    for(INT i=1;i<=n;i++){
        cin>>t[i];
        ttt[i]=ttt[i-1]+t[i];
    }
    bool o=0;
    while(q--){
        if(o)cout<<' ';
        o=1;
        cin>>query;
        ans=0;
        ans=ttt[staff[query]];
        if(ed[staff[query]]->nw==query)ans+=t[staff[query]];
        cout<<ans;
        op[staff[query]]=op[staff[query]]->push_front(query);
        if(ed[staff[query]]->nw==query)ed[staff[query]]=ed[staff[query]]->l;
        it[query]->pop();
        it[query]=op[staff[query]];
    }
    cout<<endl;
    return 0;
}

/*


2 2 3
1 3
2 4
10 20
4 4 1




























*/

