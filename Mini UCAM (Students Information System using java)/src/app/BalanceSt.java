package app;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JTable;
import javax.swing.JScrollPane;

public class BalanceSt extends JFrame {

	private JPanel contentPane;

	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					BalanceSt frame = new BalanceSt();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
	JLabel Name = new JLabel("Name");
	JLabel Id = new JLabel("Id");
	private final JButton Home = new JButton("Home");
	private final JButton Logout = new JButton("Logout");
	
	public BalanceSt() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		
		Name.setBounds(10, 11, 157, 14);
		contentPane.add(Name);
		
		
		Id.setBounds(10, 36, 157, 14);
		contentPane.add(Id);
		Home.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				 setVisible(false);
				 HomePageSt homePageA=new HomePageSt();
				 String name=Name.getText();
				 String ID=Id.getText();
					
				 homePageA.user.setText(name);
				 homePageA.std.setText(ID);
                 homePageA.setVisible(true);
			}
		});
		Home.setBounds(253, 7, 71, 23);
		
		contentPane.add(Home);
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				 setVisible(false);
				 Login login=new Login();
				 login.setVisible(true);
			}
		});
		Logout.setBounds(334, 7, 79, 23);
		
		contentPane.add(Logout);
		
		JLabel TotalBalance = new JLabel("Total Balance :");
		TotalBalance.setBounds(10, 61, 114, 14);
		contentPane.add(TotalBalance);
		
		JScrollPane scrollPane_1 = new JScrollPane();
		scrollPane_1.setBounds(10, 101, 403, 137);
		contentPane.add(scrollPane_1);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane_1.setViewportView(scrollPane);
	}
}
