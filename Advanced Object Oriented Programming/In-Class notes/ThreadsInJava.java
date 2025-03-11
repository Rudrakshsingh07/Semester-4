class setPrior extends Thread{
    String name = null;
    public setPrior(String s){
        name = s;    
    }
    public void run(){
            System.out.println(name);
    }
}

public class ThreadsInJava{
    public static void main(String[] args) {
        setPrior s1 = new setPrior("Thread 1");
        setPrior s2 = new setPrior("Thread 2");
        setPrior s3 = new setPrior("Thread 3");
        System.out.println(s1.getPriority());
        System.out.println(s2.getPriority());
        System.out.println(s3.getPriority());
        s1.setPriority(10);
        s2.setPriority(1);
        s3.setPriority(5);
        System.out.println(s1.getPriority());
        System.out.println(s2.getPriority());
        System.out.println(s3.getPriority());
        
        s1.start();
        s2.start();
        s3.start();
    }
}