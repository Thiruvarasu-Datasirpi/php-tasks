class pers {
    String name;
    int id;

    pers(String name, int id) {
        this.name = name;
        this.id = id;
    }
}
    class EMS extends pers{
    String dept;
    EMS(String name,int id,String dept){
        super(name,id);
        this.dept=dept;



    }
    void disp(){
        System.out.println(id+" "+name+" "+dept);
    }
}

public class hs {

    public static void main(String[] args) {
        EMS as =new EMS ("THIRU",1,"DEV");
        as.disp();
    }
}
