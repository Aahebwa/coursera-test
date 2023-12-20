import java.util.Scanner;

public class Kaleere {
    public static void main(String[] args) {
        
        int totalMarks=0, totalcu=3;

        int cucounter =1;
        while(cucounter<=totalcu){
            //scanner object
            Scanner scanner = new Scanner(System.in);

            //prompt a user for cu 1
            System.out.println("Enter course " +cucounter+ " Marks");
            int cuMarks = scanner.nextInt();
            totalMarks += cuMarks;
            cucounter++;
        }

        double average;
        average = totalMarks/totalcu;

        System.out.println("Total mark: "+totalMarks);
        System.out.println("Average Mark: "+average);

        if(average>=70  && average<=100) {
            System.out.println("Sponsered");
        }else{
            System.out.println("Not Qualified");
        }
        //scanner.close();
    }
}
