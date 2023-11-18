#include<stdio.h>
void change(int *a,int*b)
{
    int temp;
    temp=*a;
    *a=*b;
    *b=temp;
}
void main()
{
    int a=10,b=5;
    printf("\n a=%d,b=%d",a,b);
    change(&a,&b);
    printf("\n a=%d,b=%d",a,b);
}