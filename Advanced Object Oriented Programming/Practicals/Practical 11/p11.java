/* Write a program in Java which has a class Shape having 2
overloaded methods area(float radius) and area(float length, float
width). Display the area of circle and rectangle using overloaded
methods.  */
class Shape{
    final double pi=3.14;
    void area(float radius){
        System.out.println(pi*radius*radius);
    }
    void area(float length,float width){
        System.out.println(length*width);
    }
}
public class p11 {

    public static void main(String[] args) {
        Shape s = new Shape();
        s.area(5);
        s.area(5,6);
    }
}
