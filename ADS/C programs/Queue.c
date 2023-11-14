#include<stdio.h>
#include<stdlib.h>
#include<stdbool.h>
#define MAX 10
int ar[MAX],rear=-1,front=-1;
bool isEmpty()
{
    return(front==-1 || front == rear+1);
}
bool isFull()
{
    return(rear==MAX-1);
}
void display()
{
    printf("\n Queue is: ");
    if(!isEmpty())
        for(int i=front;i<=rear;i++)
            printf("%d ",ar[i]);
    else
        printf(" Empty");
}
bool enque(int p)
{
    if(!isFull())
    {
        if(front == -1)
            front = 0;
        ar[++rear]=p;
    }
    else
    {
        printf("\n Queue Overflow");
        return false;
    }
}
void deque()
{
    int item;
    if(!isEmpty())
    {
        item=ar[front];
        front=front+1;
        printf(" %d removed from  Queue",item);
    }
    else
    {
        printf("\n Queue Underflow");
        return ;
    }
    //if we make this function return int value we should introduce a flag variable which is 0 when stack has value and make it 1 when stack is empty .and pass it via argument 
    //and in main function check whether the flag variable is 0 or 1.if it is 0 print d is removed if it is 1 nothing prints.if we did so we can return a dummy value in else part(stack underflow)
    //and it reaches in main function but didt print.if we didnt use flag variable in else part we cant return any integer value.if we did like above method we can sent dummy value to d
    //but it check flag before printing.
}
void peek()
{
    int i,p,c;
    printf("\n Enter the position to peek:");
    scanf("%d",&p);
    if(p>rear+1 || p<=front)
    {
        printf("\n Invalid position");
        return;
    }
    for(i=front,c=1;i<rear&&c!=p;i++,c++);
    printf("%d is presented at position %d from front",ar[i],p);
        
}
int main()
{
    int ch,e,d;
    dis:
    printf("\n 1.Insert \n 2.Delete \n 3.Display \n 4.Peek \n 5.Exit");
    printf("\n Enter your choice :");
    scanf("%d",&ch);
    switch(ch)
    {
        case 1:
                printf("\n Enter an element to insert :");
                scanf("%d",&e);
                if(enque(e))
                    printf("\n Element inserted ");
                display();
                break;
        case 2:
                deque();
                break;
        case 3:
                display();
                break;
        case 4:
                peek();
                break;
        case 5:
                exit(0);
        default:
                printf("\n Invalid choice ");
    }
    goto dis;
}   