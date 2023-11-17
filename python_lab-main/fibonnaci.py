def fibonacci(n):
    a,b,i=-1,1,1
    while i<=n:
        c=a+b
        print(c,end=" ")
        a=b
        b=c
        i+=1
def main():
    n=int(input("Enter a limit :"))
    fibonacci(n)
main()