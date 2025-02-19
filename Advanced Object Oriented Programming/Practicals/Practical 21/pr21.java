final class demo{
    void display(){
        System.out.println("Hello!");
    }
}

public class pr21 extends demo {
    
    void display(){
        System.out.println("Good Morning!");
    }
    public static void main(String[] args) {
        demo d = new demo();
        d.display();
    }
}

