import java.util.Scanner;

class AirthmeticOperation
   {
      

      public static void main(String [] args){

       int x,y;
       System.out.println("give two numbers:-");
       Scanner in = new Scanner(System.in);
       
       x = in.nextInt();
       y = in.nextInt();

      int add = x + y;
      System.out.println("addition result is:" +add);

      int sub = x - y;
      System.out.println("substraction result is:" +sub);

      int multiplication = x * y;
      System.out.println("multiplication result is:" +multiplication);

      float division = x / y;
      System.out.println("division result is:" +division);

}

}

