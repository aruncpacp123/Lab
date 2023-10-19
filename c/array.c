#include<stdio.h>
void main()
{
	int ar[10],n,i,a;
	printf("\n Enter size of the array:");
	scanf("%d",&n);
	if(n>10){
		printf("\n Array size cannot be greater then 10");
	}
	else{
		printf("\n Enter %d numbers to the array:",n);
		for(i=0;i<n;i++)
			scanf("%d",&ar[i]);
		printf("\n Array elements are :");
		for(i=0;i<n;i++)
			printf("%d  ",ar[i]);
	}
	printf("\n Enter 1 to delete:");
	scanf("%d",&a);
	if(a==1){
		for(i=0;i<n-1;i++){
			ar[i]=ar[i+1];
		}
		n--;
	}
	printf("\n Array elements are :");
		for(i=0;i<n;i++)
			printf("%d  ",ar[i]);
}
		
