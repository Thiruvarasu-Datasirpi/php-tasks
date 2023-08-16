

import java.io.FileOutputStream;
import java.io.IOException;

public class wrtf {
    public static void main(String[] args) {
        String content = "1234";
        try (FileOutputStream fls = new FileOutputStream("output.txt")) {
            fls.write(content.getBytes());
            System.out.println("Data written to the file.");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}