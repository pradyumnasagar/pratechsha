import java.util.Scanner;
 
class Factorial
{
   public static void main(String args[])
   {
      int n, c, fact=1;

      System.out.println("Enter an integer for calculate the factorial");
      Scanner in = new Scanner(System.in);

      n = in.nextInt();
      
      for ( c = 1 ; c <= n ; c++ ){
      fact = fact*c;
    }

         System.out.println("factorial of given number is:"+fact);
   }
   }
