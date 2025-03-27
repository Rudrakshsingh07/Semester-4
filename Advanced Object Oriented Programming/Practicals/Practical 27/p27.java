import java.io.*;
class p27{
    public static void main(String [] args){
        try{
            String s = "Priyanshi";
            FileWriter fw = new FileWriter("sample.txt");
            BufferedWriter bw = new BufferedWriter(fw);
            .writeLn(s);
            bw.close();
        }
        catch(Exception e){}
    }
}