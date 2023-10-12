class Members {
    String name;
    int age;
    String sex;

    public Members(String name, int age, String sex) {
        this.name = name;
        this.age = age;
        this.sex = sex;
    }

    public void display() {
        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Sex: " + sex);
    }
}

class Dets extends Members {
    String rel;
 
    public Dets(String name, int age, String sex, String rel) {
        super(name, age, sex);
        this.rel = rel;
    }


    public void relationship(boolean relStatus) {
        if(relStatus == true) {
            System.out.println("Weather for two");
        }else{
            System.out.println("Weather for tea");
        }
    }

    public void bedroom() {
        System.out.println("Has their own bedroom");
    }

}

public class family {
    public static void main(String[] args) {
        Dets dets = new Dets("Timo", 21, "M", "Single");
        dets.display();
        dets.bedroom();
        dets.relationship(false);
    }
}
