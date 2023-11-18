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
            {
                r->rigth=n;
                return;
            }
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
        preorder(r->left);
    if(r->rigth!=NULL)
        preorder(r->rigth);
}
void postorder(struct node *r)
{
    if(r->left!=NULL)
        postorder(r->left);
    if(r->rigth!=NULL)
        postorder(r->rigth);
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
struct node* delete2(struct node* r,struct node* n)//Inorder Predecessor
{
    if(r->left!=NULL)//r!=NULL
    {
        if(r->data > n->data)
            n=r;
        n=delete2(r->left,n);
    }
    if(r->rigth!=NULL)
    {
        if(r->data > n->data)
            n=r;
        n=delete2(r->rigth,n);
    }
    return n;
}
struct node* delete3(struct node* r,struct node* n)//Inorder Successor
{
    if(r->left!=NULL)
    {
        if(r->data < n->data)
            n=r;
        n=delete3(r->left,n);
    }
    if(r->rigth!=NULL)
    {
        if(r->data < n->data)
            n=r;
        n=delete3(r->rigth,n);
    }
    return n;
}
void delete(struct node* k,struct node* r)
{
    int d;
    struct node* m;
    if(root==NULL)
    {
        printf("\n Underflow");
        return;
    }
    if(k->left==NULL && k->rigth==NULL)
    {
        if(k->data<r->data && r->left!=k)
            delete(k,r->left);
        else if(k->data>r->data && r->rigth!=k)
            delete(k,r->rigth);
        else
        {
            if(r->left==k)
            {
                r->left=NULL;
                printf("%d is deleted ",k->data);
                free(k);
            }
            else if(r->rigth==k)
            {
                r->rigth=NULL;
                printf("%d is deleted ",k->data);
                free(k);
            }
        }        
    }
    else if((k->left==NULL && k->rigth!=NULL && (k->rigth)->left==NULL && (k->rigth)->rigth==NULL)||(k->left!=NULL && k->rigth==NULL && (k->left)->left==NULL && (k->left)->rigth==NULL))
    {
        if(k->left==NULL && k->rigth!=NULL)
        {
            d=k->data;
            k->data=(k->rigth)->data;
            free(k->rigth);
            k->rigth=NULL;
            printf("%d is deleted ",d);
        }
        else
        {
            d=k->data;
            k->data=(k->left)->data;
            free(k->left);
            k->left=NULL;
            printf("%d is deleted ",d);
        }
    }
    else
    {
        d=k->data;
        if(k->left!=NULL)
        {
            m=delete2(k->left,k->left);
            k->data=m->data;
            delete(m,root);
        }
        else
        {
            m=delete3(k->rigth,k->rigth);
            k->data=m->data;
            delete(m,root);
        }
        printf("%d is deleted ",d);
    }
}
void main()
{ 
    int ch,op,a,d;
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
                printf("\n Enter the node to delete:");
                scanf("%d",&a);
                k=NULL;
                k=search(root,a,NULL);
                if(k==NULL)  
                    printf("\n %d is not presented",a);
                else
                {
                    delete(k,root);
                }
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
                k=NULL;
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

/*
struct node* delete2(struct node* r,struct node* n)
{
    if(r==NULL)
    {
        return n;
    }
    if(r->left!=NULL)
    {
        if(r->data>n->data)
        {
            n=delete2(r->left,n);
        }
        else
        {
            n=delete2(r->left,r);
        }
    }
    if(r->rigth!=NULL)
    {
        if(r->data>n->data)
        {
            n=delete2(r->rigth,n);
        }
        else
        {
            n=delete2(r->rigth,r);
        }
    }
    return n;
}
struct node* delete3(struct node* r,struct node* n)
{
    if(r==NULL)
    {
        return n;
    }
    if(r->left!=NULL)
    {
        if(r->data<n->data)
        {
            n=delete3(r->left,n);
        }
        else
        {
            n=delete3(r->left,r);
        }
    }
    if(r->rigth!=NULL)
    {
        if(r->data<n->data)
        {
            n=delete3(r->rigth,n);
        }
        else
        {
            n=delete3(r->rigth,r);
        }
    }
    return n;
}
*/