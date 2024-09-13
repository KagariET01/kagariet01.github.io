#define build RUN

#ifndef RUN
#include"Tyellow.h"
long long game_start(int N,int K);
void B_add_A(int x,int y);
void B_sub_A(int x,int y);
void B_add_B(int x,int y);
void B_sub_B(int x,int y);
void abs_B(int x);
void set_B(int x,int c);
bool ask_Tyellow(int x);
#endif // RUN

#define INT long long int

long long game_start(int N,int K){

}


#ifndef RUN

INT n,k;
const INT mxn=1005;
INT a[mxn];
const INT mxm=1000000;
INT b[mxm];
const INT mxv=1000000000;
INT ask_Tyellow_count=0;
INT set_B_count=0;

void WA(string msg=""){
    cout<<"WA: "<<msg<<endl;
    exit(0);
}

void B_add_A(int x,int y){
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_add_A and parameter is out of limit.");
    }
    if(!(1<=y&&y<=n)){
        WA("you call function B_add_A and parameter is out of limit.");
    }
    x--,y--;
    b[x]+=a[y];
}
void B_sub_A(int x,int y){
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_sub_A and parameter is out of limit.");
    }
    if(!(1<=y&&y<=n)){
        WA("you call function B_sub_A and parameter is out of limit.");
    }
    x--,y--;
    b[x]-=a[y];
}
void B_add_B(int x,int y){
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_add_B and parameter is out of limit.");
    }
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_add_B and parameter is out of limit.");
    }
    x--,y--;
    b[x]+=b[y];
}
void B_sub_B(int x,int y){
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_sub_B and parameter is out of limit.");
    }
    if(!(1<=x&&x<=mxm)){
        WA("you call function B_sub_B and parameter is out of limit.");
    }
    x--,y--;
    b[x]-=b[y];
}
void abs_B(int x){
    if(!(1<=x&&x<=mxm)){
        WA("you call function abs_B and parameter is out of limit.");
    }
    x--;
    b[x]=abs(b[x]);
}
void set_B(int x,int c){
    set_B_count++;
    if(set_B_count>2000000)WA("you call function set_B too much.");
    if(!(1<=x&&x<=mxm)){
        WA("you call function set_B and parameter is out of limit.");
    }
    if(!(-mxv<=c&&c<=mxv)){
        WA("you call function set_B and parameter is out of limit.");
    }
    x--;
    b[x]=c;
}
bool ask_Tyellow(int x){
    ask_Tyellow_count++;
    if(ask_Tyellow_count>2000000)WA("you call function ask_Tyellow too much.");
    if(!(1<=x&&x<=mxm)){
        WA("you call function set_B and parameter is out of limit.");
    }
    x--;
    if(b[x])return true;
    else return false;
}

int main(){
    cin>>n>>k;
    for(int i=0;i<n;i++){
        cin>>a[i];
    }
    long long res=game_start(n,k);
}










#endif // RUN
