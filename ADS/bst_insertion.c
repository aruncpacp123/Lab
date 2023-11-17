#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *left,*rigth;
}*root=NULL;
struct node* create()
{
    struct node* new_node=(struct node*)malloc(sizeof(struct node));
    return new_node;
}
void insert(struct node* n,struct node* r)
{
    if(root==NULL)
    {
        root=n;
    }
    else{
        if((n->data < r->data )&& r->left!=NULL){
            insert(n,r->left);
        }
        else if((n->data > r->data)&& r->rigth!=NULL){
            insert(n,r->rigth);
        }
        else{
            if((n->data < r->data ))
            {
                r->left=n;
                return;
            }
            else
                r->rigth=n;
         }
    }
}
void inorder(struct node *r)
{
    if(r->left!=NULL)
        inorder(r->left);
    printf("%d ",r->data);
    if(r->rigth!=NULL)
        inorder(r->rigth);
}
void preorder(struct node *r)
{
    printf("%d ",r->data);
    if(r->left!=NULL)
        inorder(r->left);
    if(r->rigth!=NULL)
        inorder(r->rigth);
}
void postorder(struct node *r)
{
    if(r->left!=NULL)
        inorder(r->left);
    if(r->rigth!=NULL)
        inorder(r->rigth);
    printf("%d ",r->data);
}
struct node* search(struct node *r,int n,struct node *r1)
{
    if(r->data==n)
    {
        r1=r;
        return r1;
    }
    if(r->left!=NULL)
        r1=search(r->left,n,r1);
    if(r->rigth!=NULL)
        r1=search(r->rigth,n,r1);
    return r1;
}
void main()
{ 
    int ch,op,a;
    struct node* k;
    dis:
    printf("\n 1.Insert \n 2.Delete \n 3.Traversal \n 4.Search \n 5.Exit");
    printf("\n Enter your choice :");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:
                printf("\n Enter the element to insert:");
                scanf("%d",&a);
                struct node *new=create();
                new->data=a;
                new->left=NULL;
                new->rigth=NULL;
                insert(new,root);
                break;
        case 2:
                break;
        case 3:
                printf("\n 1.Inorder \n 2.Preorder \n 3.Postorder");
                printf("\n Enter your option :");
                scanf("%d",&op);
                switch(op)
                {
                    case 1:
                            printf("\n Inorder Traversal:");
                            inorder(root);
                            break;
                    case 2:
                            printf("\n Preorder Traversal:");
                            preorder(root);
                            break;
                    case 3:
                            printf("\n Postorder Traversal:");
                            postorder(root);
                            break;
                }
                break;
        case 4:
                printf("\n Enter the node to search:");
                scanf("%d",&a);
                k=search(root,a,NULL);
                if(k!=NULL)
                    printf("\n %d is presented",k->data);
                else   
                    printf("\n %d is not presented",a);
                break;
        case 5:
                exit(0);
        default:
                printf("\n Invalid Choice");
    }
    goto dis;
}