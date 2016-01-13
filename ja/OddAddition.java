class OddAddition
{
   public static void main(String args[])
   {
      int n;
      int sum=0;
      
      for ( n = 1 ; n <= 100 ; n++ )
      { 
          if (n%2!=0)
          sum+=n;
}
          System.out.println("the sum of odd number from 1 to 100 is:" +sum);

}
}
