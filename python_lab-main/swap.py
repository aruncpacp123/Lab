a=int(input("Enter number 1 :"))
b=int(input("Enter number 2"))

print("with using temp")
print("Before Swapping :a=",a," b= ",b)
temp=a
a=b
b=temp
print("After Swapping :a=",a," b= ",b)

print("without using temp")
print("Before Swapping :a=",a," b= ",b)
a=a+b
b=a-b
a=a-b
print("After Swapping :a=",a," b= ",b)

print("with function")
print("Before Swapping :a=",a," b= ",b)
a,b=b,a
print("After Swapping :a=",a," b= ",b)