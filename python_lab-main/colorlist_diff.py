c1=[]
c2=[]
m,n=map(int,input("Enter number of colours in list1 and list2:").split())
print("Enter ",m," colors to list1:")
for i in range(0,m):
    c1.append(input())
print("Enter ",n," colors to list2:")
for i in range(0,n):
    c2.append(input())
    
'''
c1=input("Enter colours in list1:")
col1=c1.split(',')
c2=input("Enter colours in list2:")
col2=c2.split(',')
'''

print("FIrst list:",c1)
print("Second List:",c2)   
print("Colours present in list1 but not in list2 are:")     
for i in c1:
    k=1
    for j in c2:
        if(i==j):
            k=i
            continue
    if(i!=k):
        print(i)