import java.util.Scanner;

class mt
{
 public static void main (String args[])
  {
   int n, c;
   System.out.println("give in integer");
   Scanner in = new Scanner(System.in);
   n = in.nextInt();
   System.out.println("Multiplication Table");


   for (c=1; c<=10; c++)
   System.out.println(n+" "+"*"+" "+ c +" "+"="+" "+(n*c));
  }
}
