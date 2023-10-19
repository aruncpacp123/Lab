#include<stdio.h>
void main()
{
	int ar[10];
	int n,i,k;
	printf("\n Enter size of the array:");
	scanf("%d",&n);
	if(n>10){
		printf("\n Array size cannot be greater then 10");
	}
	else{
		printf("\n Enter %d numbers to the array:",n);
		for(i=0;i<n;i++)
			scanf("%d",&ar[i]);
		printf("\n Enter the element to be search:");
		scanf("%d",&k);
		for(i=0;i<n;i++){
			if(ar[i]==k){
				printf("\n Element %d is found at index position %d",k,i);
				break;
			}
		}
		if(i==n)
			printf("\n Element %d is not present in the array",k);
	}
}
		
