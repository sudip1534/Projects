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

public class ResultSt extends JFrame {

	private JPanel contentPane;

	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					ResultSt frame = new ResultSt();
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
	private final JLabel Cgpa = new JLabel("CGPA :");
	private final JTable table = new JTable();
	private final JScrollPane tableResult = new JScrollPane();
	
	public ResultSt() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		
		Name.setBounds(22, 22, 154, 14);
		contentPane.add(Name);
		Id.setBounds(22, 43, 154, 14);
		
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
		Home.setBounds(268, 22, 73, 23);
		
		contentPane.add(Home);
		Logout.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				setVisible(false);
				Login login=new Login();
                login.setVisible(true);
			}
		});
		Logout.setBounds(351, 22, 73, 23);
		
		contentPane.add(Logout);
		Cgpa.setBounds(22, 68, 111, 14);
		
		contentPane.add(Cgpa);
		tableResult.setBounds(22, 103, 402, 147);
		
		contentPane.add(tableResult);
		tableResult.setViewportView(table);
	}

}
