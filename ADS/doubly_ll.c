#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node* next,*prev;
}*head,*temp;
struct node * create()
{
    struct node* new_node=(struct node*)malloc(sizeof(struct node));
    if(!new_node)
    {
        printf("\n Memory allocation failed!Linked List Overflow");
        return NULL;
    }
    return new_node;
}
void insert_beg()
{
    int d;
    printf("\n Enter the data to insert:");
    scanf("%d",&d);
    struct node * new=create();
    new->data=d;
    new->next=head;
    new->prev=NULL;
    head=new;
}
void insert_pos()
{
    int d,p,i=2,j;
    printf("\n Enter the data to insert:");
    scanf("%d",&d);
    printf("\n Enter the position to insert:");
    scanf("%d",&p);
    temp=head;
    j=0;
    while(temp!=NULL)
    {
        temp=temp->next;
        j++;
    }
     if(p<=0 || p>j+1)
    {
        printf("\n Invalid Position");
        return;
    }
    struct node * new=create();
    new->data=d;
    if(head==NULL || p==1)
    {
        new->next=head;
        new->prev=NULL;
        head=new;
        return;
    }
    temp=head;
    while(i<p)
    {
        temp=temp->next;
        i++;
    }
    new->prev=temp;
    new->next=temp->next;
    if(temp->next!=NULL)
        (temp->next)->prev=new;
    temp->next=new;

}
void insert_end()
{
    int d;
    printf("\n Enter the data to insert:");
    scanf("%d",&d);
    struct node * new=create();
    new->data=d;
    new->next=NULL;
    if(head==NULL)
    {
        new->prev=NULL;
        head=new;
        return;
    }
    temp=head;
    while(temp->next!=NULL)
    {
        temp=temp->next;
    }
    new->prev=temp;
    temp->next=new;
}
void delete_beg()
{
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    int d=head->data;
    temp=head;
    head=head->next;
    head->prev=NULL;
    free(temp);
    printf("\n %d deleted",d);
}
void delete_pos()
{
    int p,i,d,j;
    struct node* del;
    printf("\n Enter the position to delete:");
    scanf("%d",&p);
    j=0;
    temp=head;
    while(temp!=NULL)
    {
        temp=temp->next;
        j++;
    }
     if(p<=0|| p>j)
    {
        printf("\n Invalid Position");
        return;
    }
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    i=2;
    temp=head;
    //here we stop iteration with deleting node
    //del=head;
    /*while(i<=p)
    {
        del=del->next;
        i++;
    }
    d=del->data;
    if(p==1)
    {
        head=del->next;
        head->prev=NULL;
    }
    else
    {
        (del->prev)->next=del->next;
        (del->next)->prev=del->prev;
    }*/
    //here we stop iteration with previous node
    while(i<p)
    {
        temp=temp->next;
        i++;
    }
    if(p==1)
    {
        del=head;
        if(head->next==NULL)
            head=NULL;
        else
        {
            head=temp->next;
            head->prev=NULL;
        }
    }
    else
    {
        del=temp->next;
        temp->next=del->next;
        if(del->next!=NULL)
            (del->next)->prev=temp;//(del->next)->prev=del->prev
    }
    d=del->data;
    free(del);
    printf("\n %d deleted",d);
}
void delete_end()
{
    int d;
    struct node* del=head;
    temp=head;
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    if(temp->next!=NULL)
    {
        while((temp->next)->next!=NULL)
            temp=temp->next;
        del=temp->next;
    }
    else
        head=NULL;
    d=del->data;
    temp->next=NULL;
    free(del);
    printf("\n %d is deleted",d);
}
void search()
{
    int d;
    printf("\n Enter the node to search:");
    scanf("%d",&d);
    temp=head;
    while(temp!=NULL)
    {
        if(temp->data==d)
        {
            printf("\n %d is presented in linked list",d);
            return;
        }
        temp=temp->next;
    }
    if(temp==NULL)
        printf("%d is not presented in linked list",d);
}
void display()
{
    
    if(head==NULL){
        printf("Empty");
    }
    else{
        temp=head;
        while(temp!=NULL){
            printf("%d ",temp->data);
            temp=temp->next;
        }
    }
}
void main()
{
    int ch,op;
    dis:
    printf("\n 1.Insert \n 2.Delete \n 3.Display \n 4.Search \n 5.Exit");
    printf("\n Enter your choice :");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:
                printf("\n 1.Insert at Beginning \n 2.Insert at a position \n 3.Insert at End \n 4.Back");
                printf("\n Enter your option :");
                scanf("%d",&op);
                switch(op)
                {
                    case 1:
                            insert_beg();
                            printf("\n New Linked List :");
                            display();
                            break;
                    case 2:
                            insert_pos();
                            printf("\n New Linked List :");
                            display();
                            break;
                    case 3:
                            insert_end();
                            printf("\n New Linked List :");
                            display();
                            break; 
                    case 4:
                            break;
                }
                break;
        case 2:
                printf("\n 1.Delete from Beginning \n 2.Delete from a position \n 3.Delete from End \n 4.Back");
                printf("\n Enter your option :");
                scanf("%d",&op);
                switch(op)
                {
                    case 1:
                            delete_beg();
                            printf("\n New Linked List :");
                            display();
                            break;
                    case 2:
                            delete_pos();
                            printf("\n New Linked List :");
                            display();
                            break;
                    case 3:
                            delete_end();
                            printf("\n New Linked List :");
                            display();
                            break; 
                    case 4:
                            break;
                }
                break;
        case 3:
                printf("\n Linked List is :");
                display();
                break;
        case 4:
                search();
                break;
        case 5:
                exit(0);
    }
    goto dis;
}