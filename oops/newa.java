class newa{
    void sum(int a,int b){System.out.println("int arg method invoked");}
    void sum(long a,long b){System.out.println("long arg method invoked");}

    public static void main(String args[]){
   newa obj=new newa();
        obj.sum( 20l, 20l);//now int arg sum() method gets invoked
    }
}