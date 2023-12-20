public class SquareMain{
    public static void main(String[] args) {
        int n;
        n=3;
        int answer = square(n);
        System.out.println("Square:"+answer);
    }

    //static indicates that the method belongs to to the class rather than an instance of the class
    //method is a function == performs a specific task or action===organise code into reusable pieces
    static int square(int i){
        return i*i;
    }
}

//public can be accessed from any other class
//private can only be accessed in that specific class where they are declared
//protected same class, subclasses, and classes in the same package they are not accesssible in unrelated classes within other packages

//single inheritance is a concept in java where a class can only inherit from one super class
//multiple inheritance is a concept in java where a class can inherit from more than one class
    //this is not supported directly in java
    //class C implements A,B {//this is done through implementing} 