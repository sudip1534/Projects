package app;

import java.awt.BorderLayout;
import java.sql.Connection;

import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.table.TableModel;
import javax.swing.text.TabableView;

import net.proteanit.sql.DbUtils;

import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.awt.event.ActionEvent;
import javax.swing.JTable;
import javax.swing.JScrollPane;
import javax.swing.JTextField;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;

public class RegistSt extends JFrame {
	Connection con = null;
	Connection con1 = null;
	private JPanel contentPane;
	
	String Semister;
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					RegistSt frame = new RegistSt();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
	int index;
	String Subject;
	String Code;
	String Credit;
	void refesh(){
		sname.setText(Id.getText());
		String string=sname.getText();
		string.split(" ");
		String[] strings=string.split(" ");
		sname.setText(strings[1]);
		
		String string1=Name.getText();
		string.split(" ");
		String[] strings1=string1.split(" ");
		sid.setText(strings1[1]);
	}
	
	void ref(){
		try{

			String query5 = "select Subject,Code,Credit,Complete from RegF where StudentID='"+sname.getText()+"'";
            PreparedStatement pst5 = con.prepareStatement(query5);
            ResultSet resultSet5=pst5.executeQuery();
            table3.setModel(DbUtils.resultSetToTableModel(resultSet5));
		}catch(Exception e1){
			e1.printStackTrace();
		}
	}
	
	
	JLabel Name = new JLabel("Name :");
	JLabel Id = new JLabel("ID: ");
	String ID;
	private final JButton Home = new JButton("Home");
	private final JButton Logout = new JButton("Logout");
	private JTable table;
	private JTable table1;
	private final JScrollPane scrollPane_1 = new JScrollPane();
	private JTextField sname;
	private JTextField sid;
	private JTable table3;
	private JTextField subject;
	private JTextField code;
	private JTextField credit;
	
	public RegistSt() {
		
		con=DBConnector.ConnecrDb();
		con1=DBConnector.ConnecrDb();
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 641, 600);
		contentPane = new JPanel();
		contentPane.setForeground(Color.LIGHT_GRAY);
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		
		Name.setBounds(24, 25, 44, 14);
		contentPane.add(Name);
		
		Id.setBounds(24, 48, 18, 14);
		contentPane.add(Id);
		Home.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				 setVisible(false);
				 HomePageSt homePageSt=new HomePageSt();
				 String name=Name.getText();
				 ID=Id.getText();
					
				 homePageSt.user.setText(name);
				 homePageSt.std.setText(ID);
				 homePageSt.setVisible(true);
				
			}
		});
		Home.setBounds(415, 21, 89, 23);
		
		contentPane.add(Home);
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				Login login=new Login();
                login.setVisible(true);
			}
		});
		Logout.setBounds(514, 21, 89, 23);
		
		contentPane.add(Logout);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(10, 220, 605, 110);
		contentPane.add(scrollPane);
		
		table = new JTable();
		table.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent arg0) {
				
			//	String Complete=model.getValueAt(index, 3).toString();
				index=table.getSelectedRow();
				TableModel model=table.getModel();
				String Subject=model.getValueAt(index, 0).toString();
				String Code=model.getValueAt(index, 1).toString();
				String Credit=model.getValueAt(index, 2).toString();
				subject.setText(Subject);
				code.setText(Code);
				credit.setText(Credit);
				
				try{
                	String query3 = "insert into RegF(Subject,Code,Credit,Complete,StudentID,StudentName) values(?,?,?,?,?,?)";
                    PreparedStatement pst4 = con.prepareStatement(query3);
                    pst4.setString(1, subject.getText());
                    pst4.setString(2, code.getText());
                    pst4.setString(3, credit.getText());
                    pst4.setString(4, "Yes");
                    pst4.setString(5, sname.getText());
                    pst4.setString(6, sid.getText());
                    
                    
                    pst4.execute();
                    pst4.close();
                    ref();
                   
                } catch(Exception e1){
				
				e1.printStackTrace();
			}
				
		}
		});
		scrollPane.setViewportView(table);
		scrollPane_1.setBounds(10, 456, 605, 94);
		
		contentPane.add(scrollPane_1);
		
		table1 = new JTable();
		scrollPane_1.setViewportView(table1);
		
		JButton btnLoad = new JButton("LOAD");
		btnLoad.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try{
					refesh();
					String query2 = "select Subject,Code,Credit,Complete from StdReg where StudentID='"+sname.getText()+"'";
                    PreparedStatement pst2 = con.prepareStatement(query2);
                    ResultSet resultSet=pst2.executeQuery();
                    table1.setModel(DbUtils.resultSetToTableModel(resultSet));
				}catch(Exception e1){
					e1.printStackTrace();
				}
				
				try{
					try{
						String query2 = "select Sem from Login where username='"+sname.getText()+"'";
	                    PreparedStatement pst3 = con.prepareStatement(query2);
	                    ResultSet resultSet1=pst3.executeQuery();
	                 
	                    String Semis=resultSet1.getString("Sem");
	                    int sem=Integer.parseInt(Semis);
	                    sem++;
	                    Semis=String.valueOf(sem);
	                    System.out.println(Semis);
	                   
	                   	String query4 = "select Subject,Code,Credit from RegistAd where  Sem='"+Semis+"'";
			            PreparedStatement pst2 = con.prepareStatement(query4);
			            ResultSet resultSet=pst2.executeQuery();
			            table.setModel(DbUtils.resultSetToTableModel(resultSet));
	                   
	                     
	                    pst3.execute();
	                    pst3.close();
	                    
					}catch(Exception e1){
						e1.printStackTrace();
					}
                  
				}catch(Exception e1){
					e1.printStackTrace();
				}
				
				
				
				
			}
		});
		btnLoad.setBounds(415, 44, 75, 23);
		contentPane.add(btnLoad);
		
		sname = new JTextField();
		sname.setBounds(52, 45, 98, 20);
		contentPane.add(sname);
		sname.setColumns(10);
		
		sid = new JTextField();
		sid.setBounds(62, 22, 186, 20);
		contentPane.add(sid);
		sid.setColumns(10);
		
		JScrollPane scrollPane_2 = new JScrollPane();
		scrollPane_2.setBounds(10, 341, 605, 104);
		contentPane.add(scrollPane_2);
		
		table3 = new JTable();
		scrollPane_2.setViewportView(table3);
		
		subject = new JTextField();
		subject.setBounds(24, 81, 86, 20);
		contentPane.add(subject);
		subject.setColumns(10);
		
		code = new JTextField();
		code.setText("");
		code.setBounds(24, 107, 86, 20);
		contentPane.add(code);
		code.setColumns(10);
		
		credit = new JTextField();
		credit.setBounds(24, 138, 86, 20);
		contentPane.add(credit);
		credit.setColumns(10);
	}
}
