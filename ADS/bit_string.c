#include<stdio.h>
#include<stdlib.h>
int check(int a[],int n,int b)
{
    int i;
    for(i=0;i<n;i++)
        if(a[i]==b)
            return 1;
    if(i==n)
        return 0;
}
void uni_read(int *a,int n)
{
    int d=0;
    int c;
    for(int i=0;i<n;i++)
    {
        scanf("%d",&c);
        if(check(a,d,c))
        {
            i--;
            printf("\n Element already exists!Reenter item:");
        }
        else
        {
            a[i]=c;
            d++;
        }
    }
}
void read(int a[],int n,int *u,int n1)
{
    int d=0;
    int c;
    for(int i=0;i<n;i++)
    {
        scanf("%d",&c);
        if(check(a,d,c))
        {
            i--;
            printf("\n Element already exists!Reenter item:");
        }
        else if(!check(u,n1,c))
        {
            i--;
            printf("\n Element Not in Universal set!reenter item:");
        }
        else
        {
            a[i]=c;
            d++;
        }
    }
}
void print_bitarr(char ar[],int n)
{
    for(int i=0;i<n;i++)
        printf("%d ",ar[i]);
}
void print_set(int *u,int a,char s1[])
{
    for(int i=0;i<a;i++)
        if(s1[i]==1)
            printf("%d ",u[i]);
}
void bit_str(int *u,int n1,int *s1,int n2,char r[])
{
    int i,j;
    for(i=0;i<n1;i++)
    {
        for(j=0;j<n2;j++)
        {
            if(u[i]==s1[j])
            {
                r[i]=1;
                break;
            }
        }
        if(j==n2)
            r[i]=0;
    }
}
void diff(char a[],int n,char b[],char r[])
{
    for(int i=0;i<n;i++)
        if(a[i]!=b[i]&& b[i]==0)//A-B
            r[i]=1;
        else
            r[i]=0;
}
void comp(int *u,int n,char a[],char r[])
{
    for(int i=0;i<n;i++)
        if(u[i]!=a[i]&& a[i]==0)//A`
            r[i]=1;
        else
            r[i]=0;
}
void main()
{
    int a,b,c,i,j;

    printf("\n Enter number of elements in the universal set:");
    scanf("%d",&a);
    int *n1=(int *)malloc(sizeof(int));
    printf("\n Enter Universal Set:");
    uni_read(n1,a);

    char ar[a],br[a],cr[a];//for bit string

    printf("\n Enter number of elements in the first set:");
    scanf("%d",&b);
    printf("\n Enter the set1:");
    int *n2=(int *)malloc(sizeof(int));//for original set
    read(n2,b,n1,a);

    printf("\n Enter number of elements in the Second set:");
    scanf("%d",&c);
    printf("\n Enter the set2:");
    int *n3=(int *)malloc(sizeof(int));
    read(n3,c,n1,a);
    //conveting to bit string
    bit_str(n1,a,n2,b,ar);
    bit_str(n1,a,n3,b,br);

    

    printf("\nUniversal set: ");
    for(i=0;i<a;i++)
        printf("%d ",n1[i]);

    printf("\nSet1: ");
    print_set(n1,a,ar);

    printf("\nSet2: ");
    print_set(n1,a,br);

    printf("\nSet1 using bit string: ");
    print_bitarr(ar,a);

    printf("\nSet2 using bit string: ");
    print_bitarr(br,a);

    for(i=0;i<a;i++)
        cr[i]=ar[i]|br[i];//union OR

    printf("\n Union set:");
    print_set(n1,a,cr);

    printf("\n Union using bit string:");
    print_bitarr(cr,a);

    for(i=0;i<a;i++)
        cr[i]=ar[i]&br[i];//intersection AND

    printf("\n Intersection set:");
    print_set(n1,a,cr);

    printf("\n Intersection Using Bit String: ");
    print_bitarr(cr,a);

    diff(ar,a,br,cr);//A-B

    printf("\n Set1-Set2:");
    print_set(n1,a,cr);

    printf("\n Set1-Set2 Using Bit String:");
    print_bitarr(cr,a);

    diff(br,a,ar,cr);//B-A
    
    printf("\n Set2-Set1:");
    print_set(n1,a,cr);

    printf("\n Set1-Set2 Using Bit String:");
    print_bitarr(cr,a);

    comp(n1,a,ar,cr);//A`
    
    printf("\n Set1 Compliment:");
    print_set(n1,a,cr);

    printf("\n Set1 Compliment Bit String:");
    print_bitarr(cr,a);

    comp(n1,a,br,cr);//B`
    
    printf("\n Set2 Compliment:");
    print_set(n1,a,cr);

    printf("\n Set2 Compliment Bit String:");
    print_bitarr(cr,a);

    
}
//second method to convert to bit string
 /*for(i=0,j=0;i<a;i++)
    {
        for(;j<b;)
        {
            if(n1[i]==n2[j])
            {
                ar[i]=1;
                j++;
                break;
            }
            else
            {
                ar[i]=0;
                break;
            }
        }
    } 
    for(i=0,j=0;i<a;i++)
    {
        for(;j<c;)
        {
            if(n1[i]==n3[j])
            {
                br[i]=1;
                j++;
                break;
            }
            else
            {
                br[i]=0;
                break;
            }
        }
    }
    */



