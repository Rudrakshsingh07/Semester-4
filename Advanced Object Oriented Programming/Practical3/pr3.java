package Practical3;

import java.util.Scanner;
public class pr3 {
    public static void main(String[] args) {
        int num,rev = 0,rem;
        Scanner s = new Scanner(System.in);

        System.out.print("Enter the Value:");
        num = s.nextInt();
        while(num>0){
            rem = num%10;
            rev = rev*10+rem;
            num = num/10;
        }
        System.out.println("Reverse:"+rev);
        s.close();    
    }
}