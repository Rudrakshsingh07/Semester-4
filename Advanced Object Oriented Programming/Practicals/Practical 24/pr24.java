class AmountException extends Exception{
    AmountException(String s1){
        System.out.println(s1);
    }
}

class Account{
    int balance;
    Account(int amount){
        balance = amount;
    }
    void withdraw(int amount) throws AmountException {
        if(balance - amount < 0){
            throw new AmountException("Not Sufficient Balance");
        }
        else{
            balance = balance - amount;
            System.out.println("Remaining Balance: "+balance);
        }
    }
}



public class pr24 {
    public static void main(String[] args) {
        Account obAccount = new Account(25000);
        try{
        obAccount.withdraw(20000);
        obAccount.withdraw(4000);
        obAccount.withdraw(2000);
        }
        catch(AmountException e1){
            System.out.println(e1);
        }
        
    }    
}
