def long(w):
    max=len(w[0])
    for i in w:
        if max<len(i):
            max=len(i)
    return max

s=input("Enter list of words separated by comma:")
w=s.split(',')
print("length of longest word=",long(w))