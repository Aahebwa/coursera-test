class Animal {
    void eat() {
        system.out.println("The animal eats food");
    }

}

//parent class
class Bird extends Animal{
    void song() {
        system.out.println("The Turkey says kolokolo");
    }
}


//child class
class Dog extends Bird{
    void bark() {
        system.out.println("The dog barks");
    }
}

public class tim{
    public static void main(String[] args){
        Dog dog = new Dog();
        dog.bark();
        dog.song();
        dog.eat();
    }
}