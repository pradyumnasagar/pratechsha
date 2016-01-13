// To demonstrate lifetime of a variable
class lifetime 
{
public static void main (String args [])
 {
  int x;
  for (x=0; x<3; x++);
  int y = 100;
  {
   int y = -1; //y is initialized each time block is entered
   System.out.println("y is now: " + y); // this will print -1
   System.out.println ("y is now: " +y);
  } 
 }
}
