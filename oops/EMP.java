import java.util.*;
public class EMP {
    int id;
    String name;
    String address;

    public EMP(int id, String name,String address) {
        this.id = id;
        this.name = name;
        this.address=address;
    }

    void display(){
        System.out.println(id+" "+name);
        System.out.println(address);
    }

    public static void main(String[] args) {

        EMP e=new EMP(111,"varun","TIRUNELVELI");
        EMP e2=new EMP(112,"arun","TIRUNELVELI");

        e.display();
        e2.display();

    }
}
