public class Print
{
public static String name="default";
public static void printName()
{
System.out.println(name);
}
public static void main(String arg[])
{
System.out.println(Print.name); //static data memb
Print.printName(); //stat method
}
} //end of class 'Print'
