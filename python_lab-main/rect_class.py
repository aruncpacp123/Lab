class rectangle:
    def __init__(self,l,b):
        self.l=l
        self.b=b
    
    def area(self):
        return self.l * self.b
    
    def perimeter(self):
        return 2 * self.l *self.b
    
l=int(input("Enter length of rectangle1:"))
b=int(input("Enter breadth of rectangle1:"))
    
r1=rectangle(l,b)
print("Area1 = ",r1.area())
print("Perimeter1 = ",r1.perimeter())

l=int(input("Enter length of rectangle2:"))
b=int(input("Enter breadth of rectangle2:"))

r2=rectangle(l,b)
print("Area2 = ",r2.area())
print("Perimeter2 = ",r2.perimeter())

if(r1.area()==r2.area()):
    print("Both rectangle objects have same area")
else:
    print("Both rectangle object have different area")