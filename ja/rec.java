class stud2{
int rollno;
String name;

void insertRecord(int r, String n)
{ //method
rollno = r;
name = n;
}

void displayInformation(){System.out.println(rollno+" "+name);} //method

public static void main (String args[]){
stud2 s1=new stud2();
stud2 s2=new stud2();

s1.insertRecord (1,"Harsha");
s2.insertRecord (2,"Anoopa");


s1.displayInformation();
s2.displayInformation();

}

}

