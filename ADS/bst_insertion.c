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
struct node* insert(struct node* n,struct node* r)
{
        if((n->data < r->data )&& r->left!=NULL){
            r->left=(n,r->left);
        }
        else if((n->data > r->data)&& r->rigth!=NULL)
        {
            r->rigth=(n,r->rigth);
        }
        return n;
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
    struct node *new=create();
        new->data=10;
        new->left=NULL;
        new->rigth=NULL;
        root=insert(new,root);
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