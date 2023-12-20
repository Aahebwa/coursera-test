import java.util.Scanner;

public class Product {
    public static void main(String[] args) {
        //create scanner object to read user input
        Scanner scanner = new Scanner(System.in);

        //prompt user for input1
        System.out.println("Enter first number");
        int firstNumber = scanner.nextInt();

        //prompt user for input2
        System.out.println("Enter second number");
        int secondNumber = scanner.nextInt();

        //multiply first number with second number
        int result = firstNumber * secondNumber;
        System.out.println(result);

        scanner.close();
    }
}
