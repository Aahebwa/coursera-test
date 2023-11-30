public class Facto {

    public static int fibonacci(int num) {
        if(num == 0) {
            return 0;
        }else if(num == 1) {
            return 1;
        }else{
            return fibonacci(num-1) + fibonacci(num-2);    
        }
    }

    public static void main(String[] args) {

        int num = 10;
        int result = fibonacci(num);
        System.out.println(result);
        
        
    }
}