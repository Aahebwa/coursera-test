//interface methods
interface Animal {
    void makeSound();
}

//class 1
class Dog implements Animal {
    @Override
    public void makeSound() {
        System.out.println("Dog Barks");
    }
}

//class 2
class Cat implements Animal {
    @Override
    public void makeSound() {
        System.out.println("Cat Meows");
    }
}


public class polyInterfaces {
    public static void main(String[] args) {
        Animal animal1 = new Dog();
        Animal animal2 = new Cat();

        animal1.makeSound();
        animal2.makeSound();
    }
}
