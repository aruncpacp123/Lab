w=input("ENter a word:")
s=w[0]
for i in range(1,len(w)):
    if(w[i]==w[0]):
        s+='$'
    else:
        s+=w[i]
print("word is",s)