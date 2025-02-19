abstract class shape{
    abstract void area();
}
class triangle extends shape{
    int h=10,b=2;
    void area(){
        int areaT = (b*h)/2;
        System.out.println("Area of Triangle: " + areaT);
    }
}
class rectangle extends shape{
    int l=10,w=2;
    void area(){
        int areaR = l*w;
        System.out.println("Area of Rectangle: " + areaR);
    }
}
class circle extends shape{
    int r=5;
    void area(){
        double areaC = (3.14*r*r);
        System.out.println("Area of Circle: " + areaC);
    }
}



public class pr20 {
    public static void main(String[] args) {
        triangle t = new triangle();
        rectangle r = new rectangle();
        circle c = new circle();

        t.area();
        r.area();
        c.area();
    }
}
