word=input("Enter a sentence :")
x=word.split()
#for e in x:
   # count=0
    #for v in x:
       # if e==v:
            #count+=1
   # print(e," occurs ",count," times")
b=[]
for e in x:
    if e not in b:
        b.append(e)
        print(e," occurs ",x.count(e)," times")

