class X {

int Xage ;
public X (String name) {
//this contructor has 1 parameter
System.out.println("Name:"+" "+name);
}
public void setAge (int age) {
Xage=age;
}

public int getAge(){
System.out.println("x's age:"+" "+ Xage);
return Xage;
}

public static void main (String [] args) {
/* obj creation*/
X myX = new X( "Dheeraj" );

/*call class method to set x's age*/
myX.setAge(22);

/* call another class */
myX.getAge();

/* you can access instance variable as follows as well*/
System.out.println ("variable value :" + " " + myX.Xage);
}
}

