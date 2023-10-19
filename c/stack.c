#include<stdio.h>
#include<stdlib.h>
void main()
{
	int max=10;
	int s[max],top=-1,n,ch,a,i,c;
	do{
		printf("\n MENU  \n");
		printf("\n 1.Insertion");
		printf("\n 2.Deletion");
		printf("\n 3.Display");
		printf("\n 4.Peek");
		printf("\n 5.Top element");
		printf("\n 6.Exit");
		printf("\n Enter your choice:");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
					printf("\n Enter the element to insert:");
					scanf("%d",&a);
					if(top==max-1){
						printf("\n Stack Overflow");
						break;
					}
					else{
						top++;
						s[top]=a;
						break;
					}
			case 2:
					if(top==-1){
						printf("\n Stack underflow");
						break;
					}
					else{
						a=s[top--];
						printf("\n %d is deleted from stack",a);
						break;
					}
			case 3:
					printf("\n Stack is :  ");
					for(i=0;i<=top;i++)
						printf("%d  ",s[i]);
					break;
			case 4:
					if(top==-1){
						printf("\n Stack is empty");
						break;
					}
					else{
						printf("\n Enter the position:");
						scanf("%d",&a);
						if(a<0 || a>top){
							printf("\n Invalid position:");
						}
						else{
							printf("\n Element at position %d in stack is %d",a,s[a]);
						}
						break;
					}
			case 5:
					if(top==-1){
						printf("\n Stack is empty");
						break;
					}
					else
						printf("\n Top of the stack is %d",s[top]);
					break;
			case 6:
					exit(0);
			default:
					printf("\n Wrong choice");	
		}
		printf("\n Do you want to continue(1/0):");
		scanf("%d",&c);
	}while(c!=0);
}

