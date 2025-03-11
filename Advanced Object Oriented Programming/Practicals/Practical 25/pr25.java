class pr25 extends Thread {
    String name;

    pr25(String name) {
        this.name = name;
    }

    public void run() {
        for (int i = 0; i < 5; i++) {
            if (name.equals("Thread 1")) {
                try {
                    sleep(1000);
                    System.out.println("Thread1");
                } catch (Exception e) {
                    System.out.println("Exception in Thread 1");
                }
            } else if (name.equals("Thread 2")) {
                try {
                    sleep(2000);
                    System.out.println("Thread2");
                } catch (Exception e) {
                    System.out.println("Exception in Thread 2");
                }
            }
        }
    }

    public static void main(String[] args) {
        pr25 t1 = new pr25("Thread 1");
        pr25 t2 = new pr25("Thread 2");
        t1.start();
        t2.start();
    }
}