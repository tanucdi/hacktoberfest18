#include<stdio.h>
int main(){
int a=0,b=1,c,i,f;
printf("enter a no:");
scanf("%d",&f);
printf("the fibonacci series is %d\t%d\t",a,b);
for(i=1;i<=f-2;i++)
{
c=a+b;
a=b;
b=c;
printf("%d\t",c);
}
return 0;

}