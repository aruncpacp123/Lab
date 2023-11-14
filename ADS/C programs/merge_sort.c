#include<stdio.h>
#define SIZE 20
void main()
{
    int ar[SIZE],br[SIZE],cr[2*SIZE],m,n,i,j,k,t;
    printf("\n Enter size of first Array :");
    scanf("%d",&m);
    printf("\n Enter %d elements to first array :",m);
    for(i=0;i<m;i++)
        scanf("%d",&ar[i]);
    printf("\n Enter size of second Array :");
    scanf("%d",&n);
    printf("\n Enter %d elements to first array :",n);
    for(i=0;i<n;i++)
        scanf("%d",&br[i]);
    printf("\n Arrays before Merging \n");
    printf("\n First Array :");
    for(i=0;i<m;i++)
        printf("%d ",ar[i]);
    printf("\n Second Array :");
    for(i=0;i<n;i++)
        printf("%d ",br[i]);
    for(i=0;i<m;i++)
        for(j=i+1;j<m;j++)
            if(ar[i]>ar[j])
            {
                t=ar[i];
                ar[i]=ar[j];
                ar[j]=t;
            }
    for(i=0;i<n;i++)
        for(j=0;j<n-1;j++)
            if(br[j]>br[j+1])
            {
                t=br[j];
                br[j]=br[j+1];
                br[j+1]=t;
            }
    for(i=0,j=0,k=0;i<m&&i<n;k++)
        if(ar[i]<br[j])
            cr[k]=ar[i++];
        else
            cr[k]=br[j++];
    while(i<m)
        cr[k++]=ar[i++];
    while(j<n)
        cr[k++]=br[j++];
    printf("\n Merged Array is :");
    for(i=0;i<m+n;i++)
        printf("%d ",cr[i]);
}
