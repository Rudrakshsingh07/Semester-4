interface A{
    void display1();
}

interface B{
    void display2();
}

class pr19 implements A,B{
    public void display1(){
        System.out.println("Class A");
    }
    public void display2(){
        System.out.println("Class B");
    }
    public static void main(String[] args) {
        pr19 ob = new pr19();
        ob.display1();
        ob.display2();
    }
}