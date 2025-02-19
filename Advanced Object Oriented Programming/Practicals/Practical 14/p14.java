class EXT {
    static int t = 10;
    void displayEXT(int i,int j){
        int e = i+j;
        System.out.println("Display I + J : " + e);
    }
}
class p14 extends EXT {
    static int y = 20;
    public static void main(String[] args) {
        p14 obj14 = new p14();
        obj14.displayEXT(t,y);
    }
}
