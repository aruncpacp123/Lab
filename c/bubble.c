#include<stdio.h>
void main()
{
	int ar[10];
	int n,i,k,j,temp;
	printf("\n Enter size of the array:");
	scanf("%d",&n);
	if(n>10){
		printf("\n Array size cannot be greater then 10");
	}
	else{
		printf("\n Enter %d numbers to the array:",n);
		for(i=0;i<n;i++)
			scanf("%d",&ar[i]);
		printf("\n Array elements before sorting:");
		for(i=0;i<n;i++)
			printf("%d  ",ar[i]);
		for(i=0;i<n;i++){
			for(j=0;j<n;j++){
				if(ar[j]>ar[j+1]){
					temp=ar[j];
					ar[j]=ar[j+1];
					ar[j+1]=temp;
				}
			}
		}
		printf("\n Array elements after sorting:");
		for(i=0;i<n;i++)
			printf("%d  ",ar[i]);
	}
}
		
