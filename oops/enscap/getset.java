package enscap;

public class getset {
    public static void main(String[] args) {
        Account n =new Account();

        n.setaccno(11122);
        n.setname("thiru");
        n.setmail("thiru3d@gmail.com");
        System.out.println(n.getaccno()+" "+n.getname()+" "+n.getmail());
    }
}
