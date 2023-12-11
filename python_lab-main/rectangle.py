class rectangle:
    def __init__(self, length, width):
        self.length = length
        self.width  = width
    
    def area(self):
        return self.length * self.width
    
    def __lt__(self,other):
        return self.area() < other.area()

    
r1=rectangle(2,3)
r2=rectangle(3,6)

if(r1 < r2):
    print("Area of Rectangle1 is less than Recatngle2")
else:
    print("Area of Rectangle1 is not less than Rectangle2")