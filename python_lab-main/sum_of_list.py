def sum(l):
    sum=0
    for i in l:
        sum+=i
    return sum

def inp(n,l):
    print("Enter ",n," elements to the list")
    for i in range(0,n):
        l.append(int(input()))

def main():
    n=int(input("Enter number of items in the list:"))
    l=[]
    inp(n,l)
    print("Sum=",sum(l))

main()