

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;

public class rwtf {
    public static void main(String[] args) {
        String sourceFileName = "output.txt";
        String destinationFileName = "source.txt";

        try (FileInputStream fis = new FileInputStream(sourceFileName);
             FileOutputStream fos = new FileOutputStream(destinationFileName)) {

            byte[] buffer = new byte[1024];
            int bytesRead;

            // Read data from the source file and write it to the destination file
            while ((bytesRead = fis.read(buffer)) != -1) {
                fos.write(buffer, 0, bytesRead);
            }

            System.out.println("File copied successfully!");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
