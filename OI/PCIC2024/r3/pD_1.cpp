

/*

IT'S MYGO TIME!!!!!

*/




#include<bits/stdc++.h>
using namespace std;
#define INT long long int
#define PII pair<INT,INT>

template<typename T>istream&operator>>(istream&in,vector<T>&vec){
    for(T&i:vec)in>>vec;
    return in;
}

const INT mxn=10005;
const INT mxm=100000;

INT s[mxn];
INT d[mxn];
INT l[mxn];
INT r[mxn];

INT tl[mxm];
INT tr[mxm];
INT t[mxm];

INT n,m;

int main(){
    cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    cin>>n>>m;
    for(INT i=1;i<=n;i++){
        cin>>s[i];
        cin>>d[i];
        cin>>l[i];
        cin>>r[i];
    }
    INT ans=0;
    for(INT i=1;i<=m;i++){
        cin>>tl[i]>>tr[i]>>t[i];
        INT nw[t[i]+1]={};
        for(INT j=tl[i];j<=tr[i];j++){
            if(l[j]<=i&&i<=r[j]){
                for(INT k=t[i];k>=d[j];k--){
                    nw[k]=max(nw[k],nw[k-d[j]]+s[j]);
                }
            }
        }
        //ans+=nw;
        cout<<nw[t[i]]<<endl;
    }
    //cout<<ans<<endl;
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
