#ifndef DBG
#include "Swap_Seat.h"
#endif

#ifdef DBG
void start_swap(int N);
int middle_number(int x,int y,int z);
void swap_position(int x,int y);
#endif

void start_swap(int N){
    int a = middle_number(1,2,3);
    if(a == 1 || a == 3){
        swap_position(1,2);
    }
    else{
        swap_position(1,3);
    }
}

//----do not modify below----

#ifdef DBG
#include <cassert>
#include <stdio.h>
#include <stdlib.h>
#include <vector>
#include <algorithm>

namespace {
    int N;
    int arr[5010];
    int count;
    bool correct = 1;
    void wa(const char* msg) {
        printf("Wrong Answer: %s\n", msg);
        exit(0);
    }
}

int middle_number(int x,int y,int z){
    if( x == y || x == z || y == z || x > N || x < 1 || y > N || y < 1 || z > N || z < 1){
        wa("invalid query");
    }
    ++count;
    if(count > 25000000){
        wa("too many operations");
    }
    std::vector<std::pair<int,int>> v{{arr[x],x},{arr[y],y},{arr[z],z}};
    std::sort(v.begin(),v.end());
    return v[1].second;
}

void swap_position(int x,int y){
    if( x > N || x < 1 || y > N || y < 1 || x == y){
        wa("invalid swap operation");
    }
    ++count;
    if(count > 25000000){
        wa("too many operations");
    }
    int tmp = arr[x];
    arr[x] = arr[y];
    arr[y] = tmp;
}

int main() {
    assert(1 == scanf("%d", &N));
    for(int i=1;i<=N;i++){
        assert(1 == scanf("%d", &arr[i]));
    }
    start_swap(N);
    for(int i=2;i<N;i++){
        if(arr[i] < arr[i-1] && arr[i] < arr[i+1]){
            correct = 0;
        }
    }
    if(correct){
        printf("Accepted: %d %d\n", N, count);
    }
    else{
        wa("incorrect result");
    }
   
}

#endif // EVAL
