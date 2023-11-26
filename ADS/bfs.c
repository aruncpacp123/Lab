#include<stdio.h>
#include<stdbool.h>
int ar[10],front=-1,rear=-1;
void push(int x)
{
    if(front == -1)
        front = 0;
    ar[++rear]=x;
}
int pop()
{
    int item=ar[front];
    front=front+1;
    return item;
}
bool isEmpty()
{
    return(front==-1 || front == rear+1);
}
int visited(int x,int v[],int n)
{
    if(v[x]==1)
        return 1;
    else
        return 0;
}
int unvisited(int e,int edge[][2],int m,int v[],int n)
{
    int i;
    for(i=0;i<m;i++)
    {
        if(edge[i][0]==e || edge[i][1]==e)
        {
            if(edge[i][0]==e)
            {
                if(!visited(edge[i][1],v,n))//return 1 if unvisited
                {
                    return 1;//return 1 if it has unvisited nodes
                }
            }
            else
            {
                if(visited(edge[i][0],v,n))
                {
                    return 1;//return 1 if it has unvisited nodes
                }
            }
        }
    }
    return 0;//return 0 if it has all visited nodes
}
void bfs(int edge[][2],int m,int v[],int n,int e)
{
    int i,x;
    if(!visited(e,v,n))
    {
        push(e);
        x=pop();
        printf("%d ",x);
        v[x]=1;
    }
    for(i=0;i<m;i++)
    {
        if(edge[i][0]==e || edge[i][1]==e)
        {
            
            if(edge[i][0]==e)
            {
                if(!visited(edge[i][1],v,n))
                {
                    push(edge[i][1]);
                }
            }
            else
            {
                if(!visited(edge[i][0],v,n))
                {
                    push(edge[i][0]);
                }
            }
        }
    }
    while(!isEmpty())
    {
        x=pop();
        if(!visited(x,v,n))
        {
            printf("%d ",x);
            v[x]=1;
        }
        if(unvisited(x,edge,m,v,n))
        {
            bfs(edge,m,v,n,x);
        }
    }
    return;
}
void main()
{
    int N,M,i,j;
    printf("\n Enter number of vertices :");
    scanf("%d",&N);
    printf("\n Enter number of edges :");
    scanf("%d",&M);
    int edge[M][2];
    int v[N+1];
    for(i=0;i<N+1;i++)
        v[i]=0;
    printf("\n Enter edges with its cost(2 vertices)");
    for(i=0;i<M;i++)
    {
        printf("\n Enter %dth edge :",i+1);
        scanf("%d%d",&edge[i][0],&edge[i][1]);
    }
    int edger[N][3];
    printf("\n Entered graph is:\n");
    printf("\nv1  v2\n");
    for(i=0;i<M;i++)
    {
        for(j=0;j<2;j++)
            printf("%d  ",edge[i][j]);
        printf("\n");
    }
    printf("\n BFS is :");
    bfs(edge,M,v,N,1);
}