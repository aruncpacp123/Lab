a,b=map(int,input("enter two numbers:").split())
op=(input("enter operator:"))

if (op=='+'):
    print(a,"+",b,"=",a+b)
elif(op=='-'):
    print(a,"-",b,"=",a-b)
elif(op=='*'):
    print(a,"*",b,"=",a*b)
elif(op=='/'):
    print(a,"/",b,"=",a/b)
else:
    print("invalid")