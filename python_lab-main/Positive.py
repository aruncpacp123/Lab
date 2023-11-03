a=[]
n=int(input("Enter number of elements in the list :"))
print("Enter ",n," elements to list:")
for i in range(0,n):
    a.append(int(input()))
print("list:",a)
b=[]
for x in a:
    if x>0:
        b.append(x)
print("New list:",b)
