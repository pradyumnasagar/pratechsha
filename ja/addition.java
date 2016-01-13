import java.util.Scanner;

class addition {

   public static void main (String[] args)
   {
	   Scanner scanner = new Scanner(System.in);

	   System.out.println("Enter the first number:");
           double first = scanner.nextDouble();

	   System.out.println("Enter the second number:");
           double second = scanner.nextDouble();

	   double add = first + second;
	   System.out.println("Addition of two number is:"+add);

   }
}
