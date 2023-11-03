a=[]
n=int(input("Enter number of elements in the list :"))
print("Enter ",n," elements to list:")
for i in range(0,n):
    a.append(int(input()))
print("list:",a)
b=[]
for x in a:
    b.append(x*x)
print("New list:",b)
