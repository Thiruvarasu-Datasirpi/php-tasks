import java.util.Scanner;

public class Voter {
    private String name;
    private int Age;

    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }


    public int getAge() {

        return Age;


    }

    public void setAge(int age) {
        Age = age;

    }

public void check(){

        if (getAge()>18){
            System.out.println("eligible");
        }else {
            System.out.println("not eligible");
        }
}
    public void display() {


        Scanner scanner = new Scanner(System.in);
        System.out.println("enter your name");

        String name = scanner.next();
        setName(name);
        System.out.println("enter age");
        int age = scanner.nextInt();
        setAge(age);
    }

    public void diso(){
        System.out.println(getName());
        System.out.println(getAge());
    }



}

