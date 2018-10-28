class Area{
  int a,b;
  Area()
 { a=2;
b=4;}
void TriangleArea()
{  System.out.println((a*b)/2);}
Area(int a, int b)
{  this.a=a;
   this.b=b;}
Area(Area obj)
{ this.a=obj.a;
   this.b=obj.b;
}
void RectangleArea()
{System.out.println(a*b);}
}
class Areamain
{
   public static void main(String args[])
  {
    Area obj=new Area();
    obj.TriangleArea();
   Area obj1=new Area(5,4);
   obj1.RectangleArea();
   Area obj2=new Area(obj);
     obj2.RectangleArea();
}
}