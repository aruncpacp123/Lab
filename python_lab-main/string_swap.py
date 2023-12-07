s=input("Enter a word:")
b=s[0]
l=s[-1]
s1=l
for i in range(1,len(s)-1):
    s1+=s[i]
s1+=b
print("word:",s1)