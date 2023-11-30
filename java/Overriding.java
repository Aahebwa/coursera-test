class Animal{
    void makeSound() {
        System.out.println("The animal makes a sound");
    }
}

class Dog extends Animal {
    //method overriding
    void makeSound() {
        System.out.println("Dog barks");
    }
}
    
public class Overriding {
    public static void main(String[] args){
        Animal animal = new Dog(); //polymorphic assignment
        animal.makeSound(); 
    }
}
