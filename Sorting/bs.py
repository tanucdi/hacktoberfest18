# Bubble Sort
n=int(input("Enter the no of elements "))
l=[]
for i in range(0,n):
    x=int(input())
    l.append(x)
print("list is",l)
for j in range(0,n):
    for i in range(0,n-1):      
        if l[i]>l[i+1]:
            l[i],l[i+1]=l[i+1],l[i]
print("List after sorting is ",l)