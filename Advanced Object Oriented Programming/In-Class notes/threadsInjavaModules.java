class sample extends Thread{
    public void run(){
        for(int i=0;i<10;i++){
            try{
                Thread.sleep(2000);
            }
            catch(InterruptedException e){
                System.out.println("Value of i = " + i);
            }
        }
    }
}



public class threadsInjavaModules {
    public static void main(String[] args) {
        sample s1 = new sample();
        s1.start();
    }
}