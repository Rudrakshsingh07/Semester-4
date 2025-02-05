 class sample {
    int a;
    sample(){
        this(20);
    }
    sample(int a){
        System.out.println(a);
    }
    public static void main(String[] args) {
        sample s = new sample();
    }
}
