class bank:
    def __init__(self,acc_no,acc_name,_acc_type,acc_bal):
        self.acc_no=acc_no
        self.acc_name=acc_name
        self.acc_type=_acc_type
        self.balance=acc_bal
        
    def deposit(self,amount):
        self.balance=self.balance+amount
        print(amount," deposited successfully")
        
    def withdraw(self,amount):
        if(self.balance>=amount):
            self.balance=self.balance-amount
            print(amount," witdrawed successfully")
    
    def print(self):
        print("Account Number : ",self.acc_no)
        print("Account Name   : ",self.acc_name)
        print("Account Type   : ",self.acc_type)
        print("Account Balance: ",self.balance)
        
b1=bank(33,"ARUN","Savings",50000)
print("1.Deposit \n2.Withdraw \n3.Display Balance")
ch=int(input("Enter a choice :"))
if(ch == 1):
    b1.deposit(int(input("Enter the amount to deposit:")))
    print("______BILL______")
    b1.print()
elif(ch == 2):
    b1.withdraw(int(input("Enter the amount to withdraw:")))
    print("______BILL______")
    b1.print()
elif(ch == 3):
    print("______BILL______")
    b1.print()
else:
    print("Invalid Choice")