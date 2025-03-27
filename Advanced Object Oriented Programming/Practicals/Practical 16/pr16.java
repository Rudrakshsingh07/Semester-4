/*
 16. Write a program in Java to demonstrate hierarchical inheritance.

 */
class EXT2{
    static int u = 30;
}

class EXT extends EXT2{
    static int t = 10;
    void displayEXT(int i){
        int e = i+t;
        System.out.println(" EXT Display I + T : " + e);
    }
}
class pr16 extends EXT2 {
    static int y = 20;
    void displayEXT(int i,int j){
        int e = i+j;
        System.out.println(" pr16 Display I + J : " + e);
    }
    public static void main(String[] args) {
        pr16 obj16 = new pr16();
        obj16.displayEXT(y,u);
        EXT objEXT = new EXT();
        objEXT.displayEXT(u);
    }
}
