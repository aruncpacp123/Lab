#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node* next;
}*head,*temp;
struct node * create()
{
    struct node* new_node=(struct node*)malloc(sizeof(struct node));
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
    head=new;
}
void display()
{
    printf("Linked List :");
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
    //struct node N;
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
                    case 4:
                            exit(0);
                }
                break;
        case 5:
                exit(0);
    }
    goto dis;
}