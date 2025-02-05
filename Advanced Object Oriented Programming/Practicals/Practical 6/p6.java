class student {
    int i = 0;
    String n;

    public void display(){
        System.out.println(i);
        System.out.println(n);
    }
}

public class p6 {

    public static void main(String[] args) {
        student a1 = new student();
        a1.i = 1;
        a1.n = "Nityam";
        a1.display();
        student a2 = new student();
        a2.i = 2;
        a2.n = "Neev";
        a2.display();
        student a3 = new student();
        a3.i = 3;
        a3.n = "New";
        a3.display();
    }
}
