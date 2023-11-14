#include<stdio.h>
#include<stdlib.h>
#include<stdbool.h>
#define MAX 20
int ar[MAX],top=-1;
bool isEmpty()
{
    return(top<0);
}
bool isFull()
{
    return(top>=MAX-1);
}
void display()
{
    printf("\n Stack is: ");
    if(!isEmpty())
        for(int i=top;i>=0;i--)
            printf("%d ",ar[i]);
    else
        printf(" Empty");
}
bool push(int p)
{
    if(!isFull())
    {
        ar[++top]=p;
        return true;
    }
    else
    {
        printf("\n Stack Overflow");
        return false;
    }
}
void pop()
{
    if(!isEmpty())
    {
        printf(" %d removed from top of the stack",ar[top--]);
    }
    else
    {
        printf("\n Stack Underflow");
        return ;
    }
    //if we make this function return int value we should introduce a flag variable which is 0 when stack has value and make it 1 when stack is empty .and pass it via argument 
    //and in main function check whether the flag variable is 0 or 1.if it is 0 print d is removed if it is 1 nothing prints.if we did so we can return a dummy value in else part(stack underflow)
    //and it reaches in main function but didt print.if we didnt use flag variable in else part we cant return any integer value.if we did like above method we can sent dummy value to d
    //but it check flag before printing.
}
void peek()
{
    int i,p;
    printf("\n Enter the position to peek:");
    scanf("%d",&p);
    if(p>top+1 || p<=0)
    {
        printf("\n Invalid position");
        return;
    }
    for(i=top;i>top-p+1;i--);
    printf("%d is presented at position %d from top",ar[i],p);
        
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
                if(push(e))
                    printf("\n Element inserted ");
                display();
                break;
        case 2:
                pop();
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