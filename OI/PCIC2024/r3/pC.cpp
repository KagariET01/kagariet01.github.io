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

struct str{
    INT l=0;
    INT e=0;
    INT m=0;
};

istream&operator>>(istream&in,str&s){
    return in>>s.l>>s.e>>s.m;
}

string aeiou="aeiouAEIOU";

int main(){
    cin.tie(0);cout.tie(0);cerr.tie(0);ios::sync_with_stdio(0);
    vector<string>a;
    string s;
    while(cin>>s){
        #ifdef DBG
        if(s=="EOF")break;
        #endif // DBG
        a.push_back(s);
    }
    INT n=a.size();
    for(INT i=0;i<n-1;i++){
        a[i]+=' ';
    }
    for(INT i=0;i<n-1;i++){
        if(a[i]=="le " || a[i]=="la "){
            INT j=0;
            while(a[i+1][j]=='h'||a[i+1][j]=='H'){
                j++;
                //break;
            }
            char c=a[i+1][j];
            for(auto&k:aeiou){
                //cerr<<"k: "<<k<<" c:"<<c<<endl;
                if(k==c){
                    a[i]="l'";
                }
            }


        }
        if(a[i]=="Le " || a[i]=="La "){
            INT j=0;
            while(a[i+1][j]=='h'||a[i+1][j]=='H'){
                j++;
                //break;
            }
            char c=a[i+1][j];
            for(auto&k:aeiou){
                if(k==c){
                    a[i]="L'";
                }
            }


        }
    }


    for(INT i=0;i<n-1;i++){
        if(a[i]=="de "){
            if(a[i+1]=="le " || a[i+1]=="Le "){
                a[i+1]="";
                a[i]="du ";
            }
            if(a[i+1]=="les " || a[i+1]=="Les "){
                a[i+1]="";
                a[i]="des ";
            }


        }if(a[i]=="De "){
            if(a[i+1]=="le " || a[i+1]=="Le "){
                a[i+1]="";
                a[i]="Du ";
            }
            if(a[i+1]=="les " || a[i+1]=="Les "){
                a[i+1]="";
                a[i]="Des ";
            }
        }
    }
    for(auto&i:a)cout<<i;
    cout<<endl;
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
