//parent(base class)
class Vehicle {
    String brand;
    int year;

    public Vehicle(String brand, int year) {
        this.brand = brand;
        this.year = year;
    }

    public void displayInfo() {
        System.out.println("Brand: " + brand);
        System.out.println("Year: " + year);
    }
}

//child class
class Car extends Vehicle {
    int numberOfDoors;

    public Car(String brand, int year, int numberOfDoors) {
        super(brand, year);//calls the constructor of the parent class 
        this.numberOfDoors = numberOfDoors;
    }

    public void drive() {
        System.out.println("Driving the car");
    }

}
public class Diana {
     public static void main(String[] args) {
        Car car = new Car(brand:"Sport")

        car.displayInfo();
        car.drive(); 
     }
}