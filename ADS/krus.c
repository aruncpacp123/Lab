#include<stdio.h>
void adjacency(int edge[][3],int vertex,int adje[][vertex+1],int edges)
{
    int x,y,c,i,j;
    for(i=0;i<vertex+1;i++)
        for(j=0;j<vertex+1;j++)
            adje[i][j]=0;
    for(i=0;i<edges;i++)
    {
        x=edge[i][0];
        y=edge[i][1];
        c=edge[i][2];
        adje[x][y]=c;
        adje[y][x]=c;
    }
}
void main()
{
    int vertices,edges,i,j;
    printf("\n Enter no .of vertices:");
    scanf("%d",&vertices);
    printf("\n Enter no .of edges:");
    scanf("%d",&edges);
    int edgem[edges+1][3];
    int adj[vertices+1][vertices+1];
    printf("\n Enter the two vertex and cost:");
    for(i=0;i<edges;i++)
    {
        for(j=0;j<3;j++)
        {
            scanf("%d",&edgem[i][j]);
        }
    }
    adjacency(edgem,vertices,adj,edges);
    for(i=0;i<vertices+1;i++)
        for(j=0;j<vertices+1;j++)
            printf("%d ",adj[i][j]);
        printf("\n");
}