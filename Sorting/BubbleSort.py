#Bubble sort program 
n=(int(input("enter the number of elements you want to enter ")))
l=[]
for i in range(0,n):
    x=int(input())
    l.append(x)
print(l)
for j in range(0,n):
    for i in range(0,n-1):
        if l[i]>l[i+1]:
            l[i],l[i+1]=l[i+1],l[i]
        
print("list after sorting is",l)



         
