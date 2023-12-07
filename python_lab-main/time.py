class time:
    def __init__(self, hours=0, minutes=0,seconds=0):
        self.hours = hours
        self.minutes=minutes
        self.seconds=seconds

    def __add__(self,other):
        t1=time()
        t1.seconds=self.seconds+other.seconds
        t1.minutes=self.minutes+other.minutes
        if(t1.seconds>=60):
            t1.minutes+=int(t1.seconds/60)
            t1.seconds=t1.seconds%60
            t1.hours=self.hours+other.hours
            if(t1.minutes>=60):
                t1.hours=t1.hours+t1.seconds//60
                t1.minutes=t1.minutes%60
        return t1
    
    def __str__(self):
        return f"{self.hours } hrs:{self.minutes} min:{self.seconds} sec"

T1=time(6,40,40)
T2=time(5,40,30)
T3=time()
T3=T1+T2
print(f" The sum of time 1 and time 2 is :{T3}")