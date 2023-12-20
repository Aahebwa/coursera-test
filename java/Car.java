import java.util.Scanner;

public class Car {
    public static void main(String[] args) {
        //scanner object 
        Scanner scanner = new Scanner(System.in);

        //prompt a user
        System.out.println("Enter soap weight");
        int weight = scanner.nextInt();

        scanner.close();

        String category = gradeSoap(weight);
        System.out.println("Soapcategory:"+category);
    }

    static String gradeSoap(int weight) {
        if(weight >800) {
            return "LARGE";
        }else if(weight >500){
            return "MEDIUM" ;
        }else if(weight <100){
            return "Small";
        }else{
            return "Invalid weight";
        }
    }
}