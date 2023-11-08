#include<stdio.h>
void main()
{
	int ar[10],n,i;
	printf("\n Enter size of the array:");
	scanf("%d",&n);
	if(n>10)
		printf("Invalid size");
	else
	{
		printf("Enter %d numbers",n);
		for(i=0;i<n;i++)
			scanf("%d",&ar[i]);
printf("array elemnts are");
for(i=0;i<n;i++)
			printf("%d  ",ar[i]);
	}
     }


