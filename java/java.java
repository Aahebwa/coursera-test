import java.util.Scanner 

public class java {
    Scanner scanner = new Scanner(System.in);
        int mark = scanner.nextInt();
    public static void main(String[] args) {
        while(mark<=100 && mark>=0){
            if(mark>80){
                System.out.println("A");
            }else if(mark>70){
                System.out.println("B");
            }else if(mark>60){
                System.out.println("C");
            }else if(mark>50){
                System.out.println("D");
            }else{
                System.out.println("F");
            }
            break;
        }
    }    
}
