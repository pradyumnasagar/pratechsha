import java.util.Scanner;

public class Application {

    public static void main(String[] args) {

        String firstName;

 
         Scanner scanner1 = new Scanner( System.in );

        
         System.out.print("Enter your name:");
         firstName = scanner1.nextLine();

         System.out.print("Your  name is " + firstName + "\n" );

    }

}
