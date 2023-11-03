word=input("Enter a word :")
vowels=['a','e','i','o','u']
new=[]
for e in word:
    for v in vowels:
        if e==v:
            new.append(e)
print("Vowels in the word '",word, "' are  ",new)
