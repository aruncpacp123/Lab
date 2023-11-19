#include<stdio.h>
#include<string.h>
#include<stdlib.h>
void main()
{
    int a,b,c,i,j;
    void display(int a[],int n);
    printf("\n Enter number of elements in the universal set:");
    scanf("%d",&a);
    int *n1=(int *)malloc(sizeof(int));
    printf("\n Enter Universal Set:");
    for(i=0;i<a;i++)
        scanf("%d",&n1[i]);
    char ar[a],br[a],cr[a];//for bit string
    printf("\n Enter number of elements in the first set:");
    scanf("%d",&b);
    printf("\n Enter the set1:");
    int *n2=(int *)malloc(sizeof(int));//for original set
    for(i=0;i<b;i++)
        scanf("%d",&n2[i]);

    printf("\n Enter number of elements in the Second set:");
    scanf("%d",&c);
    printf("\n Enter the set2:");
    int *n3=(int *)malloc(sizeof(int));
    for(i=0;i<c;i++)
        scanf("%d",&n3[i]);
    //conveting to bit string
    for(i=0;i<a;i++)
    {
        for(j=0;j<b;j++)
        {
            if(n1[i]==n2[j])
            {
                ar[i]=1;
                break;
            }
        }
        if(j==b)
            ar[i]=0;
    }
    for(i=0;i<a;i++)
    {
        for(j=0;j<c;j++)
        {
            if(n1[i]==n3[j])
            {
                br[i]=1;
                break;
            }
        }
        if(j==c)
            br[i]=0;
    }

    printf("\nUniversal set: ");
    for(i=0;i<a;i++)
        printf("%d ",n1[i]);

    printf("\nSet1: ");
    for(i=0;i<a;i++)
        if(ar[i]==1)
            printf("%d ",n1[i]);

    printf("\nSet2: ");
    for(i=0;i<a;i++)
        if(br[i]==1)
            printf("%d ",n1[i]);

    printf("\nSet1 using bit string: ");
    for(i=0;i<a;i++)
        printf("%d ",ar[i]);

    printf("\nSet2 using bit string: ");
    for(i=0;i<a;i++)
        printf("%d ",br[i]);

    for(i=0;i<a;i++)
        cr[i]=ar[i]|br[i];//union OR

    printf("\n Union set:");
    for(i=0;i<a;i++)
        if(cr[i]==1)
            printf("%d ",n1[i]);

    printf("\n Union using bit string:");
    for(i=0;i<a;i++)
        printf("%d ",cr[i]);

    for(i=0;i<a;i++)
        cr[i]=ar[i]&br[i];//intersection AND

    printf("\n Intersection set:");
    for(i=0;i<a;i++)
        if(cr[i]==1)
            printf("%d ",n1[i]);

    printf("\n Intersection Using Bit String: ");
    for(i=0;i<a;i++)
        printf("%d ",cr[i]);

    for(i=0;i<a;i++)
    {
        if(ar[i]!=br[i]&& br[i]==0){
            cr[i]=1;//A-B
        }
        else
            cr[i]=0;
    }

    printf("\n Set1-Set2:");
    for(i=0;i<a;i++)
        if(cr[i]==1)
            printf("%d ",n1[i]);

    printf("\n Set1-Set2 Using Bit String:");
    for(i=0;i<a;i++)
        printf("%d ",cr[i]);

    for(i=0;i<a;i++)
    {
        if(ar[i]!=br[i]&& ar[i]==0){
            cr[i]=1;//B-A
        }
        else
            cr[i]=0;
    }
    
    printf("\n Set2-Set1:");
    for(i=0;i<a;i++)
        if(cr[i]==1)
            printf("%d ",n1[i]);

    printf("\n Set1-Set2 Using Bit String:");
    for(i=0;i<a;i++)
        printf("%d ",cr[i]);

    for(i=0;i<a;i++)
    {
        if(n1[i]!=ar[i]&& ar[i]==0){
            cr[i]=1;//A`
        }
        else
            cr[i]=0;
    }
    
    printf("\n Set1 Compliment:");
    for(i=0;i<a;i++)
        if(cr[i]==1)
            printf("%d ",n1[i]);

    printf("\n Set1 Compliment Bit String:");
    for(i=0;i<a;i++)
        printf("%d ",cr[i]);
    
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