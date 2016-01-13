import java.io.*;
class VowelCheck
{
public static void main(String args[])throws IOException
{
char x;
BufferedReader ob=new BufferedReader(new InputStreamReader(System.in));
System.out.print("Enter any alphabet:");
x=(char) System.in.read();
switch(x)
{
case 'a':
case 'A': System.out.println("Vowel"); break;
case 'e':
case 'E': System.out.println("Vowel"); break;
case 'i':
case 'I': System.out.println("Vowel"); break;
case 'u':
case 'U': System.out.println("Vowel"); break;
case 'o':
case 'O': System.out.println("Vowel"); break;
default: System.out.println("Consonant");
}
}
}


