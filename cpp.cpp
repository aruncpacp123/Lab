#include<iostream>
using namespace std;
int main()
{
	int a,b,ch;
	label:
	cout<<"\nOPTIONS \n";
	cout<<"------------";
	cout<<"\n1.Addition ";
	cout<<"\n2.Subtraction ";
	cout<<"\n3.Multiplication ";
	cout<<"\n4.Division ";
	cout<<"\n5.Exit ";
	cout<<"\nEnter your choice :";
	cin>>ch;
	switch(ch)
	{
		case 1:
				cout<<"\nEnter any two numbers :";\
				cin>>a>>b;
				cout<<a<<"+"<<b<<"="<<a+b;
				break;
		case 2:
				cout<<"\nEnter any two numbers :";
				cin>>a>>b;
				cout<<a<<"-"<<b<<"="<<a-b;
				break;
		case 3:
				cout<<"\nEnter any two numbers :";
				cin>>a>>b;
				cout<<a<<"*"<<b<<"="<<a*b;
				break;
		case 4:
				cout<<"\nEnter any two numbers :";
				cin>>a>>b;
		        if(b!=0)
					cout<<a<<"/"<<b<<"="<<a/b;
				else
					cout<<"\nDivision not possible ";
				break;
		case 5:
		        cout<<"\nProgram terminated by choice ";
		        exit(0);
		default:
				cout<<"\nInvalid choice ";
	}
	goto label;
	return 0;
}
