package MyPackage;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Scanner;

public class Server {

    public static void main(String[] args) throws IOException {
	// write your code here

        ServerSocket serverSocket=new ServerSocket(9990);

        Socket socket = serverSocket.accept();
        BufferedReader in   = new BufferedReader(new InputStreamReader(socket.getInputStream()));
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);

        Scanner scanner=new Scanner(System.in);

        while(true)
        {
            String s = scanner.nextLine();


            out.println(s);

             s = in.readLine();
            System.out.println(s);




        }


        //out.println("Successfully connected with server");
          /*  new ClienHandler("client"+cn,socket).start();
            cn++;*/
       // }
    }
}

/*class ClienHandler extends Thread {

    private String name;
    private Socket socket;


    public ClienHandler(String name, Socket socket) {
        super(name);
        this.name = name;
        this.socket = socket;


    }


    @Override
    public void run() {
        try {
            PrintWriter out = new PrintWriter(socket.getOutputStream(), true);

            BufferedReader in   = new BufferedReader(new InputStreamReader(socket.getInputStream()));

            while(true){
                String s = in.readLine();

                System.out.println(name + ":"+s);
                if(s.equals("end")) break;

                s=s.toUpperCase();
                out.println(s);
            }
            socket.close();

        } catch (IOException e) {
            e.printStackTrace();
        }

    }
}*/