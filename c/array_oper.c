#include<stdio.h>
#include<stdlib.h>
void main()
{
	int max=10;
	int ar[max],n,ch,a,i,c,ch2,p,top;
	printf("\n Enter size of the array:");
	scanf("%d",&n);
	if(n>max){
		printf("\n Array size cannot be greater than %d",max);
	}
	else{
		printf("\n Enter %d numbers to the array:",n);
		for(i=0;i<n;i++)
			scanf("%d",&ar[i]);
	}
	do{
		menu:
		printf("\n MENU  \n");
		printf("\n 1.Insertion");
		printf("\n 2.Deletion");
		printf("\n 3.Display");
		printf("\n 4.Exit");
		printf("\n Enter your choice:");
		scanf("%d",&ch);
		switch(ch)
		{
			case 1:
					printf("\n 1.Insert at Beginning");
					printf("\n 2.Insert at a position");
					printf("\n 3.Insert at end");
					printf("\n 4.Back");
					printf("\n Enter your choice:");
					scanf("%d",&ch2);
					switch(ch2)
					{
						case 1:
								printf("\n Enter the element to insert :");
								scanf("%d",&a);
								if(n>=max){
									printf("\n Array is full");
								}
								else{
									for(i=n-1;i>=0;i--)
										ar[i+1]=ar[i];
									ar[0]=a;
									n++;
									printf("\n %d is inserted",a);
								}
								break;
						case 2:
								printf("\n Enter the element to insert :");
								scanf("%d",&a);
								printf("\n Enter the position in the array to insert:");
								scanf("%d",&p);
								
								if(p<=0 && p>n)
								{
									printf("Invalid psoition");										
								}
								else{
									if(n>=max){
										printf("\n Array is full");
									}
									else{
										p--;
										for(i=n-1;i>=p;i--)
											ar[i+1]=ar[i];
										ar[p]=a;
										n++;
										printf("\n %d is inserted",a);
									}
								}
								break;
						case 3:
								printf("\n Enter the element to insert :");
								scanf("%d",&a);
								if(n>=max){
									printf("\n Array is full");
								}
								else{
									ar[n]=a;
									n++;
									printf("\n %d is inserted",a);
								}
								break;
						case 4:
								goto menu;
						default:
								printf("\n Invalid Choice");
					}
					break;
			case 2:
					printf("\n 1.delete at Beginning");
					printf("\n 2.delete at a position");
					printf("\n 3.delete at end");
					printf("\n 4.Back");
					printf("\n Enter your choice:");
					scanf("%d",&ch2);
					switch(ch2)
					{
						case 1:
								if(n<=0){
									printf("\n Array is empty");
								}
								else{
									a=ar[0];
									for(i=0;i<n-1;i++){
										ar[i]=ar[i+1];
									}
									n--;
									printf("\n %d is deleted",a);
								}
								break;
						case 2:
								printf("\n Enter the position in the array to delete:");
								scanf("%d",&p);
								if(p<=0 || p>n)
								{
									printf("Invalid psoition");										
								}
								else{
									if(n<=0){
										printf("\n Array is empty");
									}
									else{
										a=ar[--p];
										for(i=p;i<n-1;i++)
											ar[i]=ar[i+1];
										n--;
										printf("\n %d is deleted",a);
									}
								}
								break;
						case 3:
								a=ar[n-1];
								n--;
								printf("\n %d is deleted",a);
								break;
						case 4:
								goto menu;
						default:
								printf("\n Invalid Choice");
					}
					break;
			case 3:
					printf("\n Array Elements are: ");
					for(i=0;i<n;i++)
						printf("%d ",ar[i]);
					break;
			case 4:
					exit(0);
			default:
					printf("\n Wrong choice");	
		}
		printf("\n Do you want to continue(1/0):");
		scanf("%d",&c);
	}while(c!=0);
}
		
