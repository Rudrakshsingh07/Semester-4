//Write a Java program to add two 3×3 matrices.


class p4 {
    public static void main(String[] args) {
        int a[][] = new int [3][3];

        a[0][0] = 1;
        a[0][1] = 2;
        a[0][2] = 3;
        a[1][0] = 4;
        a[1][1] = 5;
        a[1][2] = 6;
        a[2][0] = 7;
        a[2][1] = 8;
        a[2][2] = 9;

        int b[][] = new int [3][3];

        b[0][0] = 1;
        b[0][1] = 2;
        b[0][2] = 3;
        b[1][0] = 4;
        b[1][1] = 5;
        b[1][2] = 6;
        b[2][0] = 7;
        b[2][1] = 8;
        b[2][2] = 9;

        for(int j = 0 ; j < 3 ; j++){
            for (int i = 0 ; i < 3 ; i++){
                System.out.print(a[j][i]+b[j][i]);
                System.out.print("\t");
            }
            System.out.println();
        }
    }
}
