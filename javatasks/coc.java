class people{
    private String name;
    private String dept;


public  people(String name,String dept){
this.name=name;
this.dept=dept;
}

public void displaydetails(){
    System.out.println("name is "+name);
    System.out.println("dept is "+dept);
}
}



public class coc {
    public static void main(String[] args){

        people person1 =new people("THIRU","ECE");
        people person2 =new people("BHEEM","CSE");

        
        person1.displaydetails();
        System.out.println();
         person2.displaydetails();


    }
    
}

