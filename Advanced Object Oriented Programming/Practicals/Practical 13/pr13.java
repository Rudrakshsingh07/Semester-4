class pr13{
    public static void main(String [] args){
    String s = new String("Hello");
    String s1 = new String("hello");
    String s2 = "Mango,Orange,Kiwi";
    String b[] = s2.split(",");

    
    System.out.println(s);
    System.out.println(s.length());
    System.out.println(s.charAt(4));
    System.out.println(s.charAt(2));
    System.out.println(s.substring(1,3));

    System.out.println(s.equals(s1));
    System.out.println(s.equalsIgnoreCase(s1));

    System.out.println(s.compareTo(s1));

    System.out.println(s.indexOf('l'));
    System.out.println(s.lastIndexOf('l'));
    System.out.println(s.contains("el"));
    System.out.println(s.contains("ei"));

        System.out.println(s.replace("l","i"));

    System.out.println(s.toUpperCase());
    System.out.println(s.toLowerCase());
    System.out.println(s.trim());

    System.out.println(s.substring(2,4));
    System.out.println(s.substring(2));
    
    for (String a:b){ 
        System.out.println();
    }

    String name = "pqrs";
    int age = 17;
    String m = String.format("My Name is %s and I am %d years old",name,age);
    System.out.println(m);
    }
}