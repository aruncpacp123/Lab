def fact(n):
    fact=1
    for i in range (1,n+1):
        fact=fact*i
    print(n,"!= ",fact)
    
n=int(input("Enter a number :"))
fact(n)