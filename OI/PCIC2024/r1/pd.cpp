#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define S second
#define F first

vector<INT>prime;
vector<INT>p;

void Prime(INT sz){
    p.resize(sz,0);
    for(INT i=2;i<sz;i++){
        if(!p[i])prime.push_back(i);
        for(auto&j:prime){
            if(j*i>=sz)break;
            p[j*i]=j;
            if(j==p[i])break;
        }
    }
}

map<INT,INT>need;
vector<INT>ned;

const INT mxn=100005;
INT n;
INT a[mxn];
INT m,m2;
map<INT,INT>combo;
map<INT,INT>cache;

int main(){
    cin.tie(0);cout.tie(0);ios::sync_with_stdio(0);
    Prime(100005);


    cin>>n;
    for(INT i=0;i<n;i++){
        cin>>a[i];
    }
    cin>>m;
    m2=m;
    for(auto&i:prime){
        bool p=0;
        while(!(m2%i)){
            need[i]++;
            m2/=i;
            if(!p)ned.push_back(i);
            p=1;
        }
    }

    #ifdef DBG
    for(auto&i:need){
        cout<<i.F<<" "<<i.S<<endl;
    }
    cout<<"start"<<endl;
    #endif // DBG
    if(m2!=1)need[m2]++;
    m2=m;
    for(INT i=0;i<n;i++){
        a[i]=__gcd(a[i],m);
    }

    for(INT i=0;i<n;i++){
        cache.clear();
        #ifdef DBG
        cout<<"a:"<<a[i]<<endl;
        #endif // DBG
        INT nwi=a[i];
        for(INT&j:ned){
            while(!(nwi%j)){
                cache[j]++;
                nwi/=j;
            }
            #ifdef DBG
            cout<<"j:"<<j<<" need[j]:"<<need[j]<<" cache:"<<cache[j]<<" combo[j]:"<<combo[j]<<endl;
            #endif // DBG
            if(cache[j]){
                need[j]-=combo[j]*cache[j];
                combo[j]+=cache[j];
            }else{
                combo[j]=0;
            }
        }
    }


    #ifdef DBG
    for(INT&j:ned){
    cout<<"j:"<<j<<" need[j]:"<<need[j]<<" cache:"<<cache[j]<<" combo[j]:"<<combo[j]<<endl;
    }
    #endif // DBG


    for(auto&i:need){
        #ifdef DBG
        cout<<"m2:"<<m2<<"i:"<<i.F<<" "<<i.S<<endl;
        #endif // DBG
        while(i.S>0)m2/=i.F,i.S--;
    }
    cout<<m2<<endl;
    return 0;
}
/*

3
7 3 15
10



5
3 6 2 10 8
192


*/
