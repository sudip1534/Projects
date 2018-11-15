package app;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import org.omg.PortableInterceptor.USER_EXCEPTION;

import javax.swing.JLabel;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.PreparedStatement;
import java.awt.event.ActionEvent;
import javax.swing.AbstractAction;
import javax.swing.Action;
import java.awt.Color;

public class HomePageSt extends JFrame {

	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					HomePageSt frame = new HomePageSt();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
	public String namest;
	
	public String idst;
	
	JLabel user = new JLabel("Name:");
	JLabel std = new JLabel("ID:");
	Login login=new Login();
	
	
	
	public HomePageSt(String Name,String Id) {
		this.namest=Name;
		
		this.idst=Id;
		
	}
	
	public HomePageSt() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBackground(Color.LIGHT_GRAY);
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		
		user.setBounds(10, 11, 211, 14);
		contentPane.add(user);
		
		
		std.setBounds(10, 47, 196, 14);
		contentPane.add(std);
		
		JButton Registration = new JButton("Registration");
		Registration.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setVisible(false);
				RegistSt registA=new RegistSt();
				String name=user.getText();
				String ID=std.getText();
				
				registA.Name.setText(name);
				registA.Id.setText(ID);
				registA.setVisible(true);
				
				
				
			}
		});
		Registration.setBounds(156, 120, 116, 23);
		contentPane.add(Registration);
		
		JButton Result = new JButton("Result");
		Result.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				ResultSt resultSt=new ResultSt();
				String name=user.getText();
				String ID=std.getText();
				
				resultSt.Name.setText(name);
				resultSt.Id.setText(ID);
				resultSt.setVisible(true);
				
				}
		});
		Result.setBounds(156, 153, 116, 23);
		contentPane.add(Result);
		
		JButton Balance = new JButton("Account Balance");
		Balance.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				BalanceSt balanceSt=new BalanceSt();
				String name=user.getText();
				String ID=std.getText();
				
				balanceSt.Name.setText(name);
				balanceSt.Id.setText(ID);
				balanceSt.setVisible(true);
				
			}
		});
		Balance.setBounds(156, 187, 116, 23);
		contentPane.add(Balance);
		
		JButton Routine = new JButton("Routine");
		Routine.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				setVisible(false);
				BalanceSt balanceSt=new BalanceSt();
				String name=user.getText();
				String ID=std.getText();
				
				balanceSt.Name.setText(name);
				balanceSt.Id.setText(ID);
				balanceSt.setVisible(true);
				
				
			}
		});
		Routine.setBounds(156, 221, 116, 23);
		contentPane.add(Routine);
		
		JButton Logout = new JButton("Logout");
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				Login login=new Login();
                login.setVisible(true);
			}
		});
		Logout.setBounds(299, 11, 89, 28);
		contentPane.add(Logout);
	}
}
