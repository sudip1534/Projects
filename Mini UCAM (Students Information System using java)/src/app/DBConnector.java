package app;
import java.sql.Connection;


import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;

public class DBConnector {

        Connection con = null;

        public static Connection ConnecrDb(){

            try{
                Class.forName("org.sqlite.JDBC");
                Connection con = DriverManager.getConnection("jdbc:sqlite:src/UCAM.sqlite");
                //JOptionPane.showMessageDialog(null,"Connected");
                return con;
            }
            catch(Exception e){
                JOptionPane.showMessageDialog(null,"Problem with connection of database");
                e.printStackTrace();
                return null;
            }
        }

    }




