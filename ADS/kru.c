#include<stdio.h>
int ar[10],top=-1,d=1;
void push(int x)
{
    ar[++top]=x;
}
int pop()
{
    return ar[--top];
}
int check(int e)
{
    int i;
    for(i=0;i<top;i++)
    {
        if(e==ar[top])
            return 0;
    }
    if(i==top)
        return 1;
}
void adj(int start,int edger[][3],int k)
{
    int i,j;
    if(d==0)
        return;
    for(i=0;i<k;i++)
    {
        if(edger[i][0]==start || edger[i][1]==start)
        {
            if(edger[i][0]==start)
            {
                if(check(edger[i][1]))
                {   
                    printf("\n%d",edger[i][1]);
                    push(edger[i][1]);
                    d=1;
                    return adj(edger[i][1],edger,k);
                }
            }
            else
            {
                if(check(edger[i][0]))
                {
                    printf("\n%d",edger[i][0]);
                    push(edger[i][0]);
                    d=1;
                    return adj(edger[i][0],edger,k);
                }
            }
        }
        else
            d=0;
    }
    return;
}
int kruskal(int edge[][3],int m,int n,int res[][n+1],int edger[][3])
{
    int i,j,temp1;
    for(i=0;i<m-1;i++)
    {
        for(j=i+1;j<m;j++)
        {
            if(edge[i][2]>edge[j][2])
            {
                temp1=edge[i][2];
                edge[i][2]=edge[j][2];
                edge[j][2]=temp1;
                temp1=edge[i][1];
                edge[i][1]=edge[j][1];
                edge[j][1]=temp1;
                temp1=edge[i][0];
                edge[i][0]=edge[j][0];
                edge[j][0]=temp1;
            }
        }
    }
    for(i=1;i<=n;i++)
        for(j=1;j<=n;j++)
            res[i][j]=0;
    int cost=0,x,y,c,a,b,d,k;
    int start,end,e;
    for(i=0,k=0;i<m;i++)
    {
        top=-1;
        x=edge[i][0];
        y=edge[i][1];
        c=edge[i][2];
        if(k>1)
        {
            start=x;
            end=y;
            push(start);
            adj(start,edger,k);
            d=0;
            while(top>=0)
            {
                start=pop();
                if(start==end)
                {
                    d=1;
                    break;
                }
            }
            if(d==1)
                continue;
        }
        res[x][y]=c;
        res[y][x]=c;

        edger[k][0]=x;
        edger[k][1]=y;
        edger[k][2]=c;
        printf("\n\n%d %d %d" ,edger[k][0],edger[k][1],edger[k][2]);
        k++;
        cost=cost+c;
    }
    return cost;
}
void main()
{
    int N,M,i,j;
    printf("\n Enter number of vertices :");
    scanf("%d",&N);
    printf("\n Enter number of edges :");
    scanf("%d",&M);
    int edge[M][3];
    int adj[N+1][N+1];
    printf("\n Enter edges with its cost(2 vertices and cost)");
    for(i=0;i<M;i++)
    {
        printf("\n Enter %dth edge and its cost:",i+1);
        //here check for we enter same edges twice and in kruskals remove loops 
        scanf("%d%d%d",&edge[i][0],&edge[i][1],&edge[i][2]);
    }
    int res[N+1][N+1],edger[N][3];
    printf("\n Entered matrix is:\n");
    printf("\nv1 v2 cost\n");
    for(i=0;i<M;i++)
    {
        for(j=0;j<3;j++)
            printf("%d ",edge[i][j]);
        printf("\n");
    }
    int k;
    k=kruskal(edge,M,N,res,edger);
    printf("\n Minimum cost spanning tree:");
    printf("\nv1 v2 cost\n");
    for(i=0;i<N-1;i++)
    {
        for(j=0;j<3;j++)
            printf("%d ",edger[i][j]);
        printf("\n");
    }
    printf("\n minimum cost=%d",k);
}