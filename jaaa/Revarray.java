class Revarray {
    public static void main(String[] args) {        
        int [] array = {233,3,4,56,6,7,8,9};       
        reverse(array);
        for(int i=0; i<array.length; ++i)
            System.out.print(array[i] + " ");
    }
    public static void reverse (int [] array){
        for(int start=0, end=array.length-1; start<=end; start++, end--){
            int aux = array[start];
            array[start]=array[end];
            array[end]=aux;
        }
    }
}
