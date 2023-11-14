#include<stdio.h>
#include<stdlib.h>
void create(int ar[],int *n)
{ 
    printf("\n Enter size of the array :");
    scanf("%d",n);
    if(*n>10)
    {
        printf("\n Invalid Size ");
        *n=0;
        return ;
    }
    else
    {
        printf("\n Enter %d elements to the array :",*n);
        for(int i=0;i<*n;i++)
            scanf("%d",&ar[i]);
    } 
}
void display(int ar[],int n)
{
    if(n==0)
    {
        printf(" Empty");
        return;
    }
    for(int i=0;i<n;i++)
        printf("%d ",ar[i]);
}
void insertbeg(int ar[],int *n)
{
    int e,i;
    printf("\n Enter the element to insert :");
    scanf("%d",&e);
    if(*n>10)
    {
        printf("\n Array is Full");
        return;
    }
    for(i=(*n);i>0;i--)
        ar[i]=ar[i-1];
    ar[0]=e;
    (*n)++;
    printf("\n Insertion Successfull");
    printf("\n New array is :");
    display(ar,*n);
}
void insertend(int ar[],int *n)
{
    int e,i;
    printf("\n Enter the element to insert :");
    scanf("%d",&e);
    if(*n>10)
    {
        printf("\n Array is Full");
        return;
    }
    ar[*n]=e;
    (*n)++;
    printf("\n Insertion Successfull");
    printf("\n New array is :");
    display(ar,*n);
}
void insertpos(int ar[],int *n)
{
    int p,e,i;
    printf("\n Enter the element to insert and its position :");
    scanf("%d%d",&e,&p);
    if(*n>10)
        printf("\n Array is Full");
    else if(p>*n || p<=0)
        printf("\n Insertion Can't Possible ");
    else
    {
        p--;
        for(i=(*n)-1;i>=p;i--)
            ar[i+1]=ar[i];
        ar[p]=e;
        (*n)++;
        printf("\n Insertion Successfull");
        printf("\n New array is :");
        display(ar,*n);
    }
}
void insert(int ar[],int *n)
{
    int op;
    printf("\n 1.Insert at Beginning \n 2.Insert at a position \n 3.Insert at End \n 4.Back ");
    printf("\n Enter your option :");
    scanf("%d",&op);
    switch(op)
    {
        case 1:
                insertbeg(ar,n);
                break;
        case 2:
                insertpos(ar,n);
                break;
        case 3:
                insertend(ar,n);
                break;
        case 4:
                return;
        default:
                printf("\n Invalid Choice ");
    }
}
void deletebeg(int ar[],int *n)
{
    int k,i;
    k=ar[0];
    if(*n==0)
    {
        printf("\n Array is Empty ");
        return;
    }
    for(i=0;i<(*n)-1;i++)
        ar[i]=ar[i+1];
    (*n)--;
    printf("%d is deleted",k);
    printf("\n Array after deleting is:");
    if(*n==0)
        printf("\n Array is Empty ");
    display(ar,*n);
}
void deleteend(int ar[],int *n)
{
    int k,i;
    k=ar[(*n)-1];
    if(*n==0)
    {
        printf("\n Array is Empty ");
        return;
    }
    (*n)--;
    printf("%d is deleted",k);
    printf("\n Array after deleting is:");
    if(*n==0)
        printf("\n Array is Empty ");
    display(ar,*n);
}
void deletepos(int ar[],int *n)
{
    int p,i,k;
    printf("\n Enter the position of element to delete :");
    scanf("%d",&p);
    if(*n==0)
        printf("\n Array is Empty ");
    else if(p>*n||p<=0)
        printf("\n Invalid position");
    else
    {
        k=ar[p-1];
        for(i=--p;i<*n-1;i++)
            ar[i]=ar[i+1];
        (*n)--;
        printf("%d is deleted from position %d",k,p);
        printf("\n Array after deleting is:");
        if(*n==0)
            printf("\n Array is Empty ");
        display(ar,*n);
    }
}
void delete(int ar[],int *n)
{
    int op;
    printf("\n 1.Delete at Beginning \n 2.Delete at a position \n 3.Delete at End \n 4.Back ");
    printf("\n Enter your option :");
    scanf("%d",&op);
    switch(op)
    {
        case 1:
                deletebeg(ar,n);
                break;
        case 2:
                deletepos(ar,n);
                break;
        case 3:
                deleteend(ar,n);
                break;
        case 4:
                return;
        default:
                printf("\n Invalid Choice ");
    }
}
void bina_search(int ar[],int n)
{
    int s,i,mid,beg,end,pos;
    printf("\n Enter the element to search :");
    scanf("%d",&s);
    beg=0;
    end=n-1;
    mid=(int)(beg+end)/2;
    while(ar[mid]!=s && beg<=end)
    {
        if(ar[mid]>s)
            end=mid-1;
        else
            beg=mid+1;
        mid=(int)(beg+end)/2;
    }
    if(ar[mid]==s)
        pos=mid;
    else
        pos=0;
    if(pos==0)
        printf("\n Element not present in the array ");
    else
        printf("\n Element found at position %d",pos+1);
}
void select_sort(int ar[],int n)
{
    int i,j;
    for(i=0;i<n-1;i++)
        for(j=i+1;j<n;j++)
        {
            if(ar[i]>ar[j])
            {
                ar[i]=ar[i]+ar[j];
                ar[j]=ar[i]-ar[j];
                ar[i]=ar[i]-ar[j];
            }
        }
    printf("\n Sorted Array is:");
    display(ar,n);
}
int main()
{
    int op,n,ar[10];
    create(ar,&n);
    if(n<=10)
    {
        printf("\n Array is");
        display(ar,n);
    }
    dis:
    printf("\n 1.Insert \n 2.Delete \n 3.Display \n 4.Search \n 5.Sort \n 0.Exit");
    printf("\n Enter your option :");
    scanf("%d",&op);
    switch(op)
    {
        case 1:
                insert(ar,&n);
                break;
        case 2:
                delete(ar,&n);
                break;
        case 3:
                display(ar,n);
                break;
        case 4:
                bina_search(ar,n);
                break;
        case 5:
                select_sort(ar,n);
                break;
        case 0:
                exit(0);
                break;
        default:
                printf("\n Invalid Choice ");
    }
    goto dis;
    return 0;
}