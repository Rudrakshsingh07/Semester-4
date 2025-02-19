import java.util.Scanner;

class DivideByZeroException extends Exception{
    DivideByZeroException(String s){
        super(s);
    }
}
public class pr23 {
    double display(int a, int b) throws DivideByZeroException{
        if (b == 0 || a == 0){
            throw new DivideByZeroException("Cannot Divide By Zero");
        }
        else{
            return a/b;
        }

        
    }
    public static void main(String [] args){
        Scanner sc = new Scanner(System.in);
        pr23 d = new pr23();
        int a,b;
        double c;
        a = sc.nextInt();
        b = sc.nextInt();

        try {
            c = d.display(a,b);
            System.out.println(c);
        } catch (DivideByZeroException e1) {
            System.out.println(e1.getMessage());

        }
        sc.close();

    }
}
