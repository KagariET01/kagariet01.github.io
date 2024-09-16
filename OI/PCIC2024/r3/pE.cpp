

/*

IT'S MYGO TIME!!!!!

*/




#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>
#define read(n) reader<n>()

template<typename T>istream&operator>>(istream&in,vector<T>&vec){
    for(T&i:vec)in>>vec;
    return in;
}
template<typename T>T reader(istream&in=cin){
    T re;cin>>re;return re;
}


const INT mxn=1e5+5;
INT n,m,s,t;
bool nxt[mxn];
INT story[mxn];
vector<INT>tree[mxn];
bool vis[mxn];//story vis

void dfs(INT nw,INT lst){
    for(auto&i:tree[nw]){
        if(i==lst)continue;
        if(story[i]){
            vis[story[i]]=1;
            if(vis[story[i]-1])nxt[story[i]-1]=1;
        }
        dfs(i,nw);
        vis[story[i]]=0;
    }
}

int main(){
    cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    cin>>n>>m>>s>>t;
    for(INT i=1;i<=n-2;i++){
        story[read(INT)]=i;
    }
    for(INT i=1;i<=m;i++){
        INT x,y;
        cin>>x>>y;
        if(x==t||y==t)continue;
        tree[x].push_back(y);
        tree[y].push_back(x);
    }
    dfs(s,-1);
    INT ans=0;
    for(INT i=1;i<=n-2;i++){
        ans+=(!nxt[i]);
    }
    cout<<ans<<endl;
    return 0;
}

/*

6 7 4 1
3 2 6 5
1 5
5 6
2 1
4 6
3 4
3 1
2 4






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

J'aime visiter le Musee de le Louvre a trois heures de le apres-midi.



J'aime visiter le Musee de le Louvre a trois heures de le apres-midi.
Ils aiment plus la Allemagne que les Etas-Unis. En fait, ils sont rester en Allemagne de le sept juin au quinze septembre, et Ils sont revenir de la Allemagne ce martin.
Le president sortant Joe Biden et la candidate a sa succession Kamala Harris ont attribue la liberation de les Americains detenus par Moscou a une diplomatie qui respecte les allies, dans une volonte de se distinguer de Donald Trump.



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
