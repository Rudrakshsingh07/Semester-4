// Write a Java program to find the maximum of three numbers using a conditional operator.
import java.util.Scanner;

class Practical2{
    public static void main(String[] args){
        int a;
        int b;
        int c;
        int max;
        Scanner sc = new Scanner(System.in);
        a = sc.nextInt();
        b = sc.nextInt();
        c = sc.nextInt();
        
        max = (a>b) ? ((a>c)? a:c):((b>c) ? b:c);
        System.out.println("Max is:"+max);
        sc.close();
    }
}