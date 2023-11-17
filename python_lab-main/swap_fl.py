w=input("Enter a word:")
b=w[0]
l=w[-1]
s=l
for i in range(1,len(w)-1):
    s+=w[i]
s+=b
print("New Word:",s)