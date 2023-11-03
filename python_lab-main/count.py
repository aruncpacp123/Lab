n=int(input("Enter a number:"))
count=0
num=n
while(n!=0):
    r=n%10
    count+=1
    n=int(n/10)
print("Number of digits in ",num," =",count)