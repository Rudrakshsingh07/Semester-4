class book
{
    String t,a;
    int p;
    book()
    {
        t=null;
        a=null;
        p=0;

    }
    
    book(String t,String a)
    {
        this.t=t;
        this.a=a;
    }
    book(String t,String a,int p)
    {
        this.t=t;
        this.a=a;
        this.p=p;

    }
    void display()
    {
        System.out.println(a+"\n"+t+"\n"+p);
    }

}
public class test {

    public static void main(String[] args) {
        book o2=new book()   ;
        o2.display();
        book o1=new book("Jayesh", "Jayesh")   ;
        o1.display();
        book o=new book("Jayesh", "Jayesh", 0)   ;
        o.display();
    }
}