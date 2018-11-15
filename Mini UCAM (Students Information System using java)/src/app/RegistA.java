package app;

import java.awt.BorderLayout;
import java.sql.Connection;

import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import net.proteanit.sql.DbUtils;

import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.JTable;
import javax.swing.JScrollPane;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

public class RegistA extends JFrame {
	Connection con = null;
	private JPanel contentPane;
	private JTextField STID;
	private JTable table;
	private JTextField assign;
	private JTable table1;
	private JTextField sbname;
	private JTextField code;
	private JTextField credit;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					RegistA frame = new RegistA();
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
	void refresh(){
		try{
			String query2 = "select Subject,Code,Credit,Complete from StdReg where StudentID='"+STID.getText()+"'";
            PreparedStatement pst2 = con.prepareStatement(query2);
            ResultSet resultSet=pst2.executeQuery();
            table1.setModel(DbUtils.resultSetToTableModel(resultSet));
            
		}catch(Exception e1){
			e1.printStackTrace();
		}
		sbname.setText("");
		code.setText("");
		credit.setText("");
		assign.setText("");
	}
	
	public RegistA() {
		con=DBConnector.ConnecrDb();
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 737, 496);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblId = new JLabel("ID:");
		lblId.setBounds(10, 11, 46, 14);
		contentPane.add(lblId);
		
		STID = new JTextField();
		STID.setBounds(39, 8, 86, 20);
		contentPane.add(STID);
		STID.setColumns(10);
		
		JButton btnLoad = new JButton("Load");
		btnLoad.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				try{
					String query2 = "select Subject,Code,Credit,Complete from StdReg where StudentID='"+STID.getText()+"'";
                    PreparedStatement pst2 = con.prepareStatement(query2);
                    ResultSet resultSet=pst2.executeQuery();
                    table1.setModel(DbUtils.resultSetToTableModel(resultSet));
                    
                    
                    
					
					
					
					
					
				}catch(Exception e1){
					e1.printStackTrace();
				}
				
				
				
				
				
			}
		});
		btnLoad.setBounds(131, 7, 62, 23);
		contentPane.add(btnLoad);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(10, 123, 701, 176);
		contentPane.add(scrollPane);
		
		table = new JTable();
		table.setEnabled(false);
		scrollPane.setViewportView(table);
		
		JLabel lblReAssign = new JLabel("Re-assign:");
		lblReAssign.setBounds(203, 11, 67, 14);
		contentPane.add(lblReAssign);
		
		assign = new JTextField();
		assign.addKeyListener(new KeyAdapter() {
			@Override
			public void keyPressed(KeyEvent arg0) {
				
			}
		});
		assign.setBounds(260, 8, 67, 20);
		contentPane.add(assign);
		assign.setColumns(10);
		
		JButton btnOk = new JButton("OK");
		btnOk.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try{
					String query2 = "select Subject,Code,Credit from RegistAd";
                    PreparedStatement pst2 = con.prepareStatement(query2);
                    ResultSet resultSet=pst2.executeQuery();
                    table.setModel(DbUtils.resultSetToTableModel(resultSet));
                    resultSet.close();
				}catch(Exception e1){
					e1.printStackTrace();
				}
				
				
			}
		});
		btnOk.setBounds(335, 7, 46, 23);
		contentPane.add(btnOk);
		
		JScrollPane scrollPane_1 = new JScrollPane();
		scrollPane_1.setBounds(10, 310, 701, 136);
		contentPane.add(scrollPane_1);
		
		table1 = new JTable();
		scrollPane_1.setViewportView(table1);
		
		JButton btnAssign = new JButton("Assign");
		btnAssign.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			if(assign.getText().equals("")){
				JOptionPane.showMessageDialog(null, "Taken");
			}
			else{
	                    try{
	                    	String query3 = "INSERT INTO StdReg(StudentName,StudentID,StudentDept,Subject, Code, Credit, Complete) VALUES(?,?,?,?,?,?,?)";
	                        PreparedStatement pst4 = con.prepareStatement(query3);
	                        pst4.setString(1, "2");
	                        pst4.setString(2, STID.getText());
	                        pst4.setString(3, "CSE");
	                        pst4.setString(4, sbname.getText());
	                        pst4.setString(5, code.getText());
	                       
	                        pst4.setString(6, credit.getText());
	                        pst4.setString(7, "No");
	                        
	                        pst4.execute();
	                        pst4.close();
	                        refresh();
	                        
	                    	
	                    	
	                    }
	                    
	                    
					catch(Exception e1){
						e1.printStackTrace();
					}
			}
				
					
					
			}
		});
		btnAssign.setBounds(391, 7, 89, 23);
		contentPane.add(btnAssign);
		
		JButton Logout = new JButton("Logout");
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				Login login=new Login();
                login.setVisible(true);
			}
		});
		Logout.setBounds(646, 8, 65, 21);
		contentPane.add(Logout);
		
		JButton show = new JButton("show");
		show.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try{
					String query2 = "select Subject,Code,Credit from RegistAd where Code='"+assign.getText()+"'";
                    PreparedStatement pst3 = con.prepareStatement(query2);
                    ResultSet resultSet1=pst3.executeQuery();
                 
                    String add=resultSet1.getString("Subject");
                    String add1=resultSet1.getString("Code");
                    String add2=resultSet1.getString("Credit");
                   sbname.setText(add);
                   code.setText(add1);
                   credit.setText(add2);
                     System.out.println(add+add1+add2);
                    pst3.execute();
                    pst3.close();
                    
				}catch(Exception e1){
					e1.printStackTrace();
				}
			}
		});
		show.setBounds(490, 7, 86, 23);
		contentPane.add(show);
		
		sbname = new JTextField();
		sbname.setBounds(39, 51, 217, 20);
		contentPane.add(sbname);
		sbname.setColumns(10);
		
		code = new JTextField();
		code.setBounds(39, 82, 108, 20);
		contentPane.add(code);
		code.setColumns(10);
		
		credit = new JTextField();
		credit.setBounds(157, 82, 99, 20);
		contentPane.add(credit);
		credit.setColumns(10);
	}
}
