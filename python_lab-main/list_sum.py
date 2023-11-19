a=[]
b=[]
sum=0
sum2=0
n=int(input("Enter number of elements in the first list :"))
print("Enter ",n," elements to list:")
for i in range(0,n):
    a.append(int(input()))
n=int(input("Enter number of elements in the second list :"))
print("Enter ",n," elements to list")
for i in range(0,n):
    b.append(int(input()))
print("First list:",a)
print("Second List:",b)
if len(a)==len(b):
    print("Both list have same length")
else:
    print("Both list have different length")

for i in a:
    sum=sum+i
for i in b:
    sum2+=i
if(sum==sum2):
    print("Both list sum to same value")
else:
    print("Both list sum to different value")
for x in a:
    for y in b:
        if x==y:
            print(x," occurs in both list")
            
