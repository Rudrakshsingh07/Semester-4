 class sample {
    int a;
    sample(){
        this(20);
    }
    sample(int a){
        System.out.println(a);
    }
    @SuppressWarnings("unused")
    public static void main(String[] args) {
        sample s = new sample();
    }
}
