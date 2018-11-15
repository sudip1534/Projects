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

public class RoutineSt extends JFrame {

	private JPanel contentPane;

	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					RoutineSt frame = new RoutineSt();
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
	
	public RoutineSt() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		
		Name.setBounds(21, 23, 144, 14);
		contentPane.add(Name);
		
		
		Id.setBounds(21, 48, 144, 14);
		contentPane.add(Id);
		Home.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				 setVisible(false);
				 HomePageSt homePageSt=new HomePageSt();
				 String name=Name.getText();
				 String ID=Id.getText();
					
				 homePageSt.user.setText(name);
				 homePageSt.std.setText(ID);
                 homePageSt.setVisible(true);
			}
		});
		Home.setBounds(260, 19, 70, 23);
		
		contentPane.add(Home);
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setVisible(false);
				Login login=new Login();
                login.setVisible(true);
				
			}
		});
		Logout.setBounds(340, 19, 78, 23);
		
		contentPane.add(Logout);
		
		JScrollPane scrollPane_1 = new JScrollPane();
		scrollPane_1.setBounds(10, 83, 408, 137);
		contentPane.add(scrollPane_1);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane_1.setViewportView(scrollPane);
	}
}
