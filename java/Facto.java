public class Facto {

    public static int factorial(int num) {
        if(num == 0) {
            return 0;
        }else if(num == 1) {
            return 1;
        }else{
            return factorial(num-1);    
        }
    }

    public static void main(String[] args) {

        int num = 10;
        
    }
}