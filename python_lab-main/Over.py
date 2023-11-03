n=int(input("Enter number of elements in list :"))
print("Enter ",n," numbers to the list(<=100):")
a=[]
for i in range(0,n):
    x=int(input())
    if(x>100):
        a.append("over")
    else:
        a.append(x)
print("List :",a)
