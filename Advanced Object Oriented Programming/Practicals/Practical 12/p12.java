/*
 Write a program in Java to demonstrate the constructor
 overloading
 */
 class Cc{
    Cc(){
        System.out.println("Hello World");
    }
    Cc(String name){
        System.out.println("Hello "+ name);
    }
}
 public class p12 {
    public static void main(String[] args) {
        Cc a = new Cc();
        Cc b = new Cc("Nityam");
    }
}
