package MyPackage;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;
import java.util.Scanner;

/**
 * Created by Student on 8/2/2016.
 */
public class Client {

    public static void main(String[] args) throws IOException {

        Socket socket = new Socket("192.168.0.105",9990);

        BufferedReader in   = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
       // String s = in.readLine();
       // System.out.println(s);

        Scanner scanner=new Scanner(System.in);


        while(true)
        {
            String s = in.readLine();
            System.out.println(s);
           s = scanner.nextLine();


            out.println(s);

           // if(s.equals("end")) break;
          //  System.out.println("Converted : "+in.readLine());

        }
        //socket.close();

    }

}
