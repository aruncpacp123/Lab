#include<iostream>
using namespace std;
void change(int &a,int &b)
{
    int temp;
    temp=a;
    a=b;
    b=temp;
}
int main()
{
    int a=10,b=5;
    printf("\n a=%d,b=%d",a,b);
    change(a,b);
    printf("\n a=%d,b=%d",a,b);
    return 0;
}