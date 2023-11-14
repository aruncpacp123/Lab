#include<stdio.h>
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
void main()
{
    int i=1;
    while(i<=5)
    {
        int a;
        printf("\n Enter the element to insert:");
        scanf("%d",&a);
        struct node *new=create();
        new->data=a;
        new->left=NULL;
        new->rigth=NULL;
        insert(new,root);
        i++;
    }  
    inorder(root);
}