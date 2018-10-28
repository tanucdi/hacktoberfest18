import java.util.Scanner;
class Dynamicswap
{
  private int a,b,c;
   private Scanner s=new Scanner(System.in);
   void accept()
  {
   System.out.println("enter value for a");
  a=s.nextInt();
  System.out.println("enter value for b");
  b=s.nextInt();
  
  }
   void calc()
 {
   c=a;
   a=b;
   b=c;
 }
 void display()
  {  System.out.println("swap no a= "+a);
     System.out.println("swap no b= "+b);}
}
class Dynamicswapmain
{   public static void main(String[]args)
   {   
        Dynamicswap o1=new Dynamicswap();      
          o1.accept();
          o1.calc();
           o1.display();
 }
}
