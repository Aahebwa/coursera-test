class Person {
    private String name;
    private int age;
    private String email;

    // constructor
    public Person(String name, int age, String email) {
        this.name = name;
        this.age = age;
        this.email = email;
    }

    // setter
    public void setName(String name) {
        this.name = name;
    }

    public void setAge(int age) {
        if (age > 0) {
            this.age = age;
        } else {
            System.out.println("Age cannot be 0 or a negative");
        }
    }

    public void setEmail(String email) {
        this.email = email;
    }

    // getter
    public String getName() {
        return name;
    }

    public int getAge() {
        return age;
    }

    public String getEmail() {
        return email;
    }

    
}

public class Janane {
    public static void main(String[] args) {
        Person person = new Person("Movia", 23, "movia@gmail.com");

        // accessing attributes using the getter method
        System.out.println("Name: " + person.getName());
        System.out.println("Age: " + person.getAge());
        System.out.println("Email: " + person.getEmail());

        // modify attributes using the setter method
        person.setAge(21);
        person.setName("Nakiyingi");

        // displaying updated attributes
        System.out.println("Modified Age: " + person.getAge());
        System.out.println("Modified Name: " + person.getName());
    }
}
