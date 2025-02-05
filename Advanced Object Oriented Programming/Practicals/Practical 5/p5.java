//Write a Java program to generate the first n prime numbers.

public class p5 {

    public static void main(String[] args) {
        int fl = 0;
        int list = 10;
        for(int j = 2; j < list ; j++){
            for (int i = 2 ;i < j ;i++){
                if(j%i == 0){
                    fl = 1;
                    break;
                }
            }
            if(fl == 0){
                System.out.println(j);
            }
            fl = 0;
        }
    }
}
