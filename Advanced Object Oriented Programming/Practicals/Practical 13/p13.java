/* Write a java program to demonstrate use of “String” class methods
: charAt(), contains(), format(), length(), split()
*/
public class p13 {

    public static void main(String[] args) {
        String s = new String("hello World");
        String s1 = new String("hello");
        String s2 = "mango,orange,apple kiwi";
        String b[]=s2.split(",");
        String name = "abc";
        System.out.println(s.charAt(4));
        System.out.println(s.contains("el"));
        String m = String.format("This is %s",name);
        System.out.println(s.length());
        for(String a:b)
        {
            System.out.println(a);
        }

    }
}
