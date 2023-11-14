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
    for(i=0,k=0;i<m;i++)
        cr[k++]=ar[i];
    for(i=0;i<n;i++)
        cr[k++]=br[i];
    printf("\n Merged Array is :");
    for(i=0;i<m+n;i++)
        printf("%d ",cr[i]);
}
