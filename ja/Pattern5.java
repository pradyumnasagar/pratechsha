import java.util.Scanner;


class Pattern5
{

public static void main(String [] args)
{
int n;
Scanner in = new Scanner(System.in);
System.out.println("give no.");
n = in.nextInt();


for(int i=1; i<=n; i+=2){
for(int j=0; j < n - i/2; j++){

System.out.print(" ");
}
for (int j = 0; j < i; j++){

System.out.print("*");
}
System.out.print("\n");
}
}
}

