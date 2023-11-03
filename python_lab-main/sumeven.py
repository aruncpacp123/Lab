i=1
sum=0
count=1
while(i<=100):
    if(count%2==0):
        sum=sum+count
        i=i+1
    count+=1
print("sum of first 100 even numbers=",sum)