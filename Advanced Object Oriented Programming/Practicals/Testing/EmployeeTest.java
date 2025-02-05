Package Testing;

class Employee {
    protected String name;
    protected double baseSalary;

    public Employee(String name, double baseSalary) {
        this.name = name;
        this.baseSalary = baseSalary;
    }

    public double calculateSalary() {
        return baseSalary;
    }
}

class Manager extends Employee {
    private double bonus;

    public Manager(String name, double baseSalary, double bonus) {
        super(name, baseSalary);
        this.bonus = bonus;
    }

    @Override
    public double calculateSalary() {
        return baseSalary + bonus;
    }
}

class Programmer extends Employee {
    private double overtimePay;

    public Programmer(String name, double baseSalary, double overtimePay) {
        super(name, baseSalary);
        this.overtimePay = overtimePay;
    }

    @Override
    public double calculateSalary() {
        return baseSalary + overtimePay;
    }
}

public class EmployeeTest {
    public static void main(String[] args) {
        Employee manager = new Manager("Alice", 50000, 10000);
        Employee programmer = new Programmer("Bob", 40000, 5000);

        System.out.println("Manager Salary: " + manager.calculateSalary());
        System.out.println("Programmer Salary: " + programmer.calculateSalary());
    }
}