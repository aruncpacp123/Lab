#include<stdio.h>
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
    int cost=0,x,y,c,a,b,d,k,start,end,count=0,h=0,cycle[10],e=1,s;
    for(i=0,k=0;i<m;i++)
    {
        count=0;
        x=edge[i][0];
        y=edge[i][1];
        c=edge[i][2];
        d=0;
        if(k>1){
        for(a=0;a<k-1;a++)
        {
            d=0;
            for(b=a+1;b<k;b++)
            {
                printf("\n %d %d \n",a,b);
                if(edger[a][0]==edger[b][0]||edger[a][0]==edger[b][1]||edger[a][1]==edger[b][0]||edger[a][1]==edger[b][1])
                {
                    printf("\nhello");
                    if(edger[a][0]==edger[b][0])
                    {
                        printf("\nhello1");
                        if((edger[a][1]==x && edger[b][1]==y)||edger[a][1]==y && edger[b][1]==x)
                        {
                            printf("\nhello5");
                            d=1;
                            break;
                        }
                    }
                    if(edger[a][0]==edger[b][1])
                    {
                        printf("\nhello2");
                        if((edger[a][1]==x && edger[b][0]==y)||edger[a][0]==y && edger[b][1]==x)
                        {
                            printf("\nhello6");
                            d=1;
                            break;
                        }
                    }
                    if(edger[a][1]==edger[b][0])
                    {
                        printf("\nhello3");
                        if((edger[a][0]==x && edger[b][1]==y)||edger[a][0]==y && edger[b][1]==x)
                        {
                            printf("\nhello7");
                            d=1;
                            break;
                        }
                    }
                    if(edger[a][1]==edger[b][1])
                    {
                        printf("\nhello4");
                        if((edger[a][0]==x && edger[b][0]==y)||edger[a][0]==y && edger[b][0]==x)
                        {
                            printf("\nhello8");
                            d=1;
                            break;
                        }
                    }
                }
            }
            if(d==1)
                break;
        }
        if(d==1)
            continue;
        }
        start=y;
        end=x;
        d=0;
        e=1;
        if(k>1)
        {   dis:
            for(a=0;a<k;a++)
            {
                //for(int a=0;a<k;a++){
                if(edger[a][0]==start || edger[a][1]==start)
                {
                    if(count==0)
                    {
                        for(b=0;b<k;b++)
                        {
                            if(edger[b][0]==start || edger[b][1]==start)
                            {
                                count++;
                                e=0;
                                if(edger[b][0]==start )
                                    cycle[h++]=edger[b][1];
                                else
                                    cycle[h++]=edger[b][0];
                            }//for counting no. of edges from a vertex
                        }
                        /*if(edger[a][0]==start )
                            start=edger[a][1];
                        else
                            start=edger[a][0];*/
                        start=cycle[0];
                        a=-1;
                    }
                    if(e==1)
                    {
                        if(edger[a][0]==start )
                        {
                            start=edger[a][1];
                            a=-1;
                        }
                        else
                        {
                            a=-1;
                            start=edger[a][0];
                        }
                    }
                //}
                
                if(start==end)
                {
                    d=1;
                    break;
                }
            }
            
            
            if(d==1)
                continue;
            printf("\nhello%d %d \n",x,y);
            if(a==k && e!=1)
            {
                h++;
                start=cycle[h];
                goto dis;
            }
            }
            
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
    for(i=0;i<N;i++)
    {
        for(j=0;j<3;j++)
            printf("%d ",edger[i][j]);
        printf("\n");
    }
    printf("\n minimum cost=%d",k);
}