

/*

GO! GO! GO!

*/




#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>
#define read(n) reader<n>()
#define PIVI pair<INT,vector<INT>>
#define F first
#define S second
#define pit(n) #n<<": "<<n<<" "

template<typename T>istream&operator>>(istream&in,vector<T>&vec){
    for(T&i:vec)in>>vec;
    return in;
}
template<typename T>ostream&operator<<(ostream&ou,vector<T>&vec){
    bool o=0;
    ou<<"[";
    for(auto&i:vec){
        if(o)ou<<", ";
        ou<<i;
        o=1;
    }
    return ou<<"]";
}
template<typename T>T reader(istream&in=cin){
    T re;cin>>re;return re;
}
template<typename T1,typename T2>ostream&operator<<(ostream&ou,pair<T1,T2>p){
    return ou<<"["<<p.F<<", "<<p.S<<"]";
}
template<typename T1,typename T2,typename T3>ostream&operator<<(ostream&ou,priority_queue<T1,T2,T3>pq){
    vector<T1>vec;
    while(!pq.empty()){
        vec.push_back(pq.top());
        pq.pop();
    }
    reverse(vec.begin(),vec.end());
    return ou<<vec;
}

bool inc(INT que,vector<INT>&vec){
    for(auto&i:vec)if(que==i)return true;
    return false;
}
/*bool inc(INT que,vector<INT>vec){
    for(auto&i:vec)if(que==i)return true;
    return false;
}*/

struct cmp{
    bool operator()(PIVI a,PIVI b){
        return a.F<b.F;
    }
};

template<typename T>void sort(vector<T>vec){
    sort(vec.begin(),vec.end());
}

const INT mxn=1e4+5;
const INT mxm=1e5+5;
const INT mxd=25;
const INT SQRT=320;
vector<PIVI>dp[mxd];
INT n,m;
INT s[mxn];
INT d[mxn];


void pp(INT v){
    for(INT i=0;i<mxd;i++){
        cerr<<(dp[i].back().S);
        while((!dp[i].empty())&&inc(v,dp[i].back().S))dp[i].pop_back();
        sort(dp[i]);
    }
}

void pu(INT v){
    for(INT i=d[v];i<mxd;i++){
        if(dp[i-d[v]].empty()){
            dp[i-d[v]].push_back(PIVI(0,{}));
        }
        for(auto&j:dp[i-d[v]]){
            PIVI nw=j;
            if(inc(v,nw.S))continue;
            nw.F+=s[v];
            nw.S.push_back(v);
            dp[i].push_back(nw);
        }
        sort(dp[i]);
    }
}

struct query{
    INT l,r,t;
    INT ans=0;
    INT id=0;
};

bool operator<(query a,query b){
    if(a.l/SQRT!=b.l/SQRT)return a.l<b.l;
    return a.r<b.r;

}

query q[mxm];

INT ans[mxm];

INT wtf;

int main(){
    //cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    cin>>n>>m;
    for(INT i=1;i<=n;i++){
        cin>>s[i]>>d[i]>>wtf;
        cin>>wtf;
    }
    for(INT i=1;i<=m;i++){
        cin>>q[i].l>>q[i].r>>q[i].t;
        q[i].id=i;
    }
    sort(q+1,q+m+1);
    INT nwl=0,nwr=0;
    for(INT i=1;i<=m;i++){
        INT ql=q[i].l;
        INT qr=q[i].r;
        while(nwr<qr){
            nwr++;
            pu(nwr);
        }
        while(ql<nwl){
            nwl--;
            pu(nwl);
        }

        while(qr<nwr){
            pp(nwr);
            nwr--;
        }
        while(nwl<ql){
            pp(nwl);
            nwl++;
        }

        ans[q[i].id]=dp[q[i].t].back().F;

        #ifdef DBG
        cerr<<pit(nwl)<<pit(nwr)<<endl;
        for(INT j=0;j<mxd;j++){
            cerr<<"j:"<<j<<" "<<dp[j]<<endl;
        }
        cerr<<"=================="<<endl;
        #endif // DBG
    }
    for(INT i=1;i<=m;i++){
        cout<<ans[i]<<endl;
    }
    return 0;
}

/*

3 3
18 2 1 2
13 5 1 3
11 3 2 3
1 2 3
2 3 5
1 3 8




5 5
11 7 1 2
13 9 3 3
16 12 3 3
9 19 3 4
7 6 4 4
1 1 10
1 3 18
2 4 19
1 5 10
1 5 8















































*/
