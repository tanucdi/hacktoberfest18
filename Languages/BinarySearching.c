#include<stdio.h>
#include<conio.h>
void main()
{
	int a[100],i,n,key,flag=0,beg,end,mid;
	printf("enter total element in list");
	scanf("%d",&n);
	printf("enter %d element in ascending order \n",n);
	for(i=0;i<n;i++)
	{
		scanf("%d",&a[i]);	
	}
	printf("enter the element you  want to search \n");
	scanf("%d",&key);
	beg=0;end=n-1;mid=-1;
	while(a[mid]!=key&&beg<=end)
	{ 
	   if(mid=(beg+end)/2)
		{
			flag =1;
			break;	
		}
		else
		{
			if(a[mid]<key)
			{
				beg=mid+1;
			}
			else
			{
				end=mid-1;
			}
		}
		
	}
	if(flag==1)
	{
		printf("searched element found!!");
		
	}
	else
	{
	printf("searched element not found");
	}
	getch();
	
}
