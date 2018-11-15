package app;

import java.awt.BorderLayout;
import java.awt.EventQueue;
import java.awt.Frame;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import org.omg.CORBA.PUBLIC_MEMBER;

import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

import java.sql.Connection;

import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import javax.swing.JMenuBar;
import javax.swing.JCheckBoxMenuItem;
import javax.swing.JCheckBox;
import javax.swing.ImageIcon;
import java.awt.Color;
import java.awt.Font;
public class Login extends JFrame {
	Connection con = null;
	private JPanel contentPane;
	
	private JTextField pass;
	public JTextField user1;
	public String add;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Login frame = new Login();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Login() {
		 con=DBConnector.ConnecrDb();
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(20, 20, 600, 700);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblUsername = new JLabel("Username:");
		lblUsername.setFont(new Font("Tahoma", Font.BOLD, 16));
		lblUsername.setForeground(Color.ORANGE);
		lblUsername.setBounds(142, 222, 96, 14);
		contentPane.add(lblUsername);
		
		JLabel lblPassward = new JLabel("Password:");
		lblPassward.setFont(new Font("Tahoma", Font.BOLD, 16));
		lblPassward.setForeground(Color.ORANGE);
		lblPassward.setBounds(142, 261, 96, 14);
		contentPane.add(lblPassward);
	
		
		pass = new JTextField();
		pass.setBackground(new Color(255, 235, 205));
		pass.setForeground(new Color(0, 0, 205));
		pass.setFont(new Font("Tahoma", Font.BOLD, 14));
		pass.setBounds(236, 260, 160, 20);
		contentPane.add(pass);
		pass.setColumns(10);
		
		JButton login = new JButton("Login");
		login.setBackground(new Color(255, 140, 0));
		login.setFont(new Font("Tahoma", Font.BOLD, 15));
		login.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				if(user1.getText().equals("admin")) {
                    try {
                        String query = "select * from Login where username=? and password=?";
                        PreparedStatement pst = con.prepareStatement(query);
                        pst.setString(1, user1.getText());
                        pst.setString(2, pass.getText());
                        ResultSet rs = pst.executeQuery();
                        int count = 0;
                        while (rs.next()) {
                            count++;
                        }
                        if (count == 1) {

                            JOptionPane.showMessageDialog(null, "Successfully Login");
                            pst.close();
                            rs.close();
                            setVisible(false);
                            HomePageA homePageA=new HomePageA();
                            homePageA.setVisible(true);
                            homePageA.Name.setText(user1.getText());
                            
                           

                        } else if (count > 1) {
                            JOptionPane.showMessageDialog(null, "Duplicate username");
                        } else {
                            JOptionPane.showMessageDialog(null, "Invalid username");
                        }

                    } catch (SQLException e1) {
                        e1.printStackTrace();
                    }
                }
                // for student
                else{
                	try {
                        String query = "select * from Login where username=? and password=?";
                        PreparedStatement pst = con.prepareStatement(query);
                        pst.setString(1, user1.getText());
                        pst.setString(2, pass.getText());
                        ResultSet rs = pst.executeQuery();
                        int count = 0;
                        while (rs.next()) {
                            count++;
                        }
                        pst.close();
                        if (count == 1) {

                            JOptionPane.showMessageDialog(null, "Successfully Login");
                            setVisible(false);
                            HomePageSt homePageSt=new HomePageSt();
                            homePageSt.setVisible(true);
                            try{
                            	String query2 = "select * from Login where username='"+user1.getText()+"'";
                                PreparedStatement pst2 = con.prepareStatement(query2);
                                ResultSet resultSet=pst2.executeQuery();
                                add=resultSet.getString("StdName");
                                homePageSt.user.setText("Name: "+add);
                                homePageSt.std.setText("ID: "+user1.getText());
                                
                                
                                
                                pst.execute();
                                pst.close();
                              
                            }catch(Exception e2){
                            	e2.printStackTrace();
                            }
                           
                            
                           

                        } else if (count > 1) {
                            JOptionPane.showMessageDialog(null, "Duplicate username");
                        } else {
                            JOptionPane.showMessageDialog(null, "Invalid username");
                        }

                    } catch (SQLException e1) {
                        e1.printStackTrace();
                    }
                	finally {
						try {
							con.close();
						} catch (SQLException e1) {
							// TODO Auto-generated catch block
							e1.printStackTrace();
						}
					}
                }
				
				
				
			}
			
		});
		
		login.setBounds(300, 301, 96, 33);
		contentPane.add(login);
		
		user1 = new JTextField();
		user1.setBackground(new Color(255, 235, 205));
		user1.setForeground(new Color(0, 0, 205));
		user1.setFont(new Font("Tahoma", Font.BOLD, 14));
		user1.setBounds(236, 221, 160, 20);
		contentPane.add(user1);
		user1.setColumns(10);
		
		JLabel lblNewLabel = new JLabel("");
		lblNewLabel.setIcon(new ImageIcon("C:\\Users\\Shudip\\Desktop\\login.jpg"));
		lblNewLabel.setBounds(-51, -40, 651, 729);
		contentPane.add(lblNewLabel);
	}
	
	
	public String getAdd() {
		return add;
	}
}
