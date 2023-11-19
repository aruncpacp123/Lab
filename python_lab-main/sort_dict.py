cricket = {'virat': 120, 'rohit': 104, 'sachin': 150, 'dhoni': 132, 'shammi': 125}

print("Dictionary ::")
print(cricket)

sorted_cricket = sorted(cricket.items(), key=lambda x:x[1])
converted_dict = dict(sorted_cricket)

print("Sorted Dictionary in Ascending order:")
print(converted_dict)

sorted_cricket = sorted(cricket.items(), key=lambda x:x[1], reverse=True)
converted_dict = dict(sorted_cricket)

print("Sorted Dictionary in Descending order:")
print(converted_dict)

"""
my_dict = {'e': 3, 
           'a': 1, 
           'd': 4, 
           'b': 2}
sorted_dict = sorted([(key,value )
 for (key, value) in my_dict.items()])
print("Sorted dictionary is :")
print(sorted_dict)
"""