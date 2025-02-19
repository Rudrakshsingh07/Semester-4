class demo{
    void display() throws ArithmeticException,ArrayIndexOutOfBoundsException{
        int arr[] = new int[3];
        arr[8]=7;
        int a=10,b=0,c=a/b;
    }
}

class exc{
    public static void main(String [] args){
        try {
            demo s1 = new demo();
            s1.display();
            
        } 
        catch (ArithmeticException e) {
            System.out.println("Error handeled");
        }
        catch(ArrayIndexOutOfBoundsException e1){
            System.out.println("Array Index Out of Bound Error handeled");
        }
        finally{
            System.out.println("this block always executes");
        }

    }
}