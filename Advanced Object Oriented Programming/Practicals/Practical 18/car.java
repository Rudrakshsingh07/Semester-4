class Car {
    private String name;
    private int topSpeed;

    // Constructor
    public Car(String name, int topSpeed) {
        this.name = name;
        this.topSpeed = topSpeed;
    }

    // Overriding toString() method
    @Override
    public String toString() {
        return "Car{name='" + name + "', topSpeed=" + topSpeed + " km/h}";
    }

    public static void main(String[] args) {
        // Creating 5 instances of Car class
        Car car1 = new Car("Ferrari F40", 324);
        Car car2 = new Car("Lamborghini Miura", 280);
        Car car3 = new Car("Porsche 911 Turbo", 290);
        Car car4 = new Car("Ford GT40", 350);
        Car car5 = new Car("Jaguar E-Type", 240);

        // Printing instances
        System.out.println(car1);
        System.out.println(car2);
        System.out.println(car3);
        System.out.println(car4);
        System.out.println(car5);
    }
}