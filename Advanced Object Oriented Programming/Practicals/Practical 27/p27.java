import java.io.*;
class demo2{
    public static void main(String [] args){
        try{
            File f1 = new File("Sample.txt");
            boolean b = false;
            b = f1.createNewFile();
            if(b==true){
                System.out.println("The file was Created");
            }
            else{
                System.out.println("The file could NOT   be created");
            }
        }
        catch(IOException e){

        }
    }
}