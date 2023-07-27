import java.util.*;

public class bank {
    public static void main(String[] args) {
        Scanner scanner =new Scanner(System.in);
        Banker cust1 = new Banker();
        Banker cust2 = new Banker();
        cust1.display();
        System.out.println("do you want to add balance if yes enter 1 or 2");

       int result= scanner.nextInt();

       if (result==1){
           cust1.bal();
       }else{
           cust1.baldis();

       }
        System.out.println("do you want to continue?? if yes press 1 else 2");
        int b=scanner.nextInt();
        if(b==1){
            System.out.println("select what do you need");
            System.out.println("press 1 to withdraw");
            System.out.println("press 2 to transfer to another account");
            int c= scanner.nextInt();
            if(c==1){
                cust1.wit();
            }else{
                cust1.tran();
            }

            }
    }
}

