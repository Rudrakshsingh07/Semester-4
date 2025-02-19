 class Cc{
    Cc(){
        System.out.println("Hello World");
    }
    Cc(String name){
        System.out.println("Hello "+ name);
    }
}
 public class p12 {
    @SuppressWarnings("unused")
    public static void main(String[] args) {
        Cc a = new Cc();
        Cc b = new Cc("Nityam");
    }
}
