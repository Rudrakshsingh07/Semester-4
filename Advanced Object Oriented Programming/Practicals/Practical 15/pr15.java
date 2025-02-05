/*
Write a program in Java to demonstrate multilevel inheritance
*/
class EXT2{
    static int u = 30;
}

class EXT extends EXT2{
    static int t = 10;
    void displayEXT(int i,int j,int k){
        int e = i+j+k;
        System.out.println("Display I + J + K : " + e);
    }
}
class p15 extends EXT {
    static int y = 20;
    public static void main(String[] args) {
        p15 obj15 = new p15();
        obj15.displayEXT(t,y,u);
    }
}
