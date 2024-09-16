
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

struct str{
    INT s=0,d=0,l=0,r=0,id=0;
};




int main(){
    cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    INT n,m;
    cin>>n>>m;
    vector<str>snail;
    for(INT i=1;i<=n;i++){
        str nw;
        cin>>nw.s>>nw.d>>nw.l>>nw.r;
        nw.id=i;
        snail.push_back(nw);
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

J'aime visiter le Musee de le Louvre a trois heures de le apres-midi.



J'aime visiter le Musee de le Louvre a trois heures de le apres-midi.
Ils aiment plus la Allemagne que les Etas-Unis. En fait, ils sont rester en Allemagne de le sept juin au quinze septembre, et Ils sont revenir de la Allemagne ce martin.
Le president sortant Joe Biden et la candidate a sa succession Kamala Harris ont attribue la liberation de les Americains detenus par Moscou a une diplomatie qui respecte les allies, dans une volonte de se distinguer de Donald Trump.





*/
