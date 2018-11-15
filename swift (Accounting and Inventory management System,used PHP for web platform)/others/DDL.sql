
    create table Company_info(
    Company_ID			int(6) AUTO_INCREMENT,
    Company_name		varchar(50),
    Price_Plan          varchar(20) check(Price_Plan='Simple' or Price_Plan='Standard' or Price_Plan='Premeium'),
    Owner_Title			varchar(10),
    Owner_First_Name	varchar(20),
    Owner_Middle_Name	varchar(20), 
    Owner_Last_Name		varchar(20), 
    Owner_Suffix		varchar(20),
    Company_type		varchar(50), 
    Account_type		varchar(40), 
    Email				varchar(40) UNIQUE,
    Phone_number		varchar(15),
    Mobile				varchar(11),
    Fax				    varchar(15),
    Others				varchar(40),
    Website				varchar(40),
    Status              varchar(20) check(Status='Temporary' or Status='Permanent'),
    primary key(Company_ID)
    );


    create table Company_address(
    Company_ID			int(6),
    Street				varchar(20),
    City_Town			varchar(20),
    State__Province		varchar(20),
    Postal_Code			varchar(20),
    Country				varchar(20),
    Status				varchar(20),
    primary key(Company_ID,Street, City_Town,State__Province,Country,Status),
    foreign key(Company_ID) references Company_info(Company_ID) on delete cascade on update cascade
    );	

    create table Customer_info(
    Customer_id			int(6) AUTO_INCREMENT,
    Title             	varchar(20),
    First_Name			varchar(20),
    Middle_Name			varchar(20),
    Last_Name       	varchar(20),  
    Suffix				varchar(20),
    Email				varchar(20) UNIQUE,
    phone_num 			varchar(20),
    password 			varchar(20),
    mobile				varchar(16),
    fax				    varchar(20),
    other				varchar(20),
    website				varchar(30),
    Preffered_payment   varchar(20),
    Shipping_Way		varchar(40),
    Status              varchar(20) check(Status='Temporary' or Status='Permanent'),
    primary key(Customer_id)
    );
    
    create table Customer_company(
    Customer_id			int(6),
    Company_ID			int(6),
    primary key(Customer_id, Company_ID),
    foreign key(Company_ID) references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table Customer_address(
    Customer_id			int(6),
    Street				varchar(10),
    City_Town			varchar(10),
    State__Province		varchar(10),
    Postal_Code			varchar(10),
    Country				varchar(15),
    Status				varchar(10),
    primary key(Customer_id,Street, City_Town,State__Province,Country,Status),
    foreign key(Customer_id) references Customer_info(Customer_id)
    on delete cascade
    on UPDATE cascade
    );

    create table Employee_info(
    Company_ID			    int(6),
    Employee_Id			    int(6) AUTO_INCREMENT,
    Employee_Title		    varchar(20),
    Employee_First_Name	    varchar(20),
    Employee_Middle_Name	varchar(20),
    Employee_Last_Name		varchar(20),
    Employee_Suffix			varchar(20),
    Email				    varchar(32) UNIQUE,
    Phone_Number			varchar(15),
    Mobile 				    varchar(11),
    Designation			    varchar(20),
    Gender				    varchar(6),
    Salary		        	numeric(12,2),
    Date_of_Birth			datetime,
    Active_date			    varchar(15),
    Release_date			varchar(15),
    primary key(Employee_Id,Company_ID),
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table Employee_address(
    Company_ID			int(6),
    Employee_Id			int(6),
    Street				varchar(20),
    City_Town			varchar(20),
    State__Province		varchar(20),
    Postal_Code			varchar(20),
    Country				varchar(20),
    Status				varchar(20),
    primary key(Employee_Id,Street, City_Town,State__Province,Country,Status),
    foreign key(Employee_Id) references employee_info(Employee_Id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table Supplier_info(
    Company_ID			int(6),
    Supplier_id			int(5) AUTO_INCREMENT,
    Title				varchar(20),
    First_Name			varchar(20),
    Middle_Name			varchar(20),
    Last_Name			varchar(20),         
    Suffix				varchar(20),
    Email				varchar(32) UNIQUE,
    phone_num 			varchar(15),
    password 			varchar(32),
    mobile				varchar(16),
    fax				    varchar(16),
    other				varchar(15),
    website				varchar(40),
    Preffered_payment	varchar(20),
    primary key(Supplier_id),
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );   

    create table Supplier_address(
    Company_ID			int(6),
    Supplier_id			int(5),
    Street			    varchar(20),
    City_Town			varchar(20),
    State__Province		varchar(20),
    Postal_Code		    varchar(20),
    Country			    varchar(20),
    Status			    varchar(20),
    primary key(Supplier_id,Street,City_Town,State__Province,Postal_Code,Country,Status),
    foreign key(Supplier_id) references supplier_info(Supplier_id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table  Supplier_Order(
    Company_ID		int(6),
    S_Order_id		decimal(10,0),
    Supplier_id		int(5),
    Date 			varchar(15),
    Bill_no			varchar(10),
    Amount			decimal(8,2),
    Status			varchar(15),
    primary key(S_Order_id, Supplier_id),
    foreign key (Supplier_id) references supplier_info(Supplier_id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );



    create table Inventory(
    Product_id          int(6) AUTO_INCREMENT,
    Company_ID			int(6),
    Product_code		char(5) UNIQUE,
    Product_name		varchar(40),
    Product_Des		    varchar(100),
    SKU			        varchar(15),
    Category			varchar(20),
    Quantity_in_hand 	decimal(8,0) check (Quantity_in_hand>=0),
    As_of_date			varchar(15),
    Inventory_Asset_ac	varchar(20),
    Sales_Rate			decimal(8,2),
    Sales_Des			varchar(40),
    Income_Ac			varchar(20),
    Purchasing_Cost		decimal(8,2) check (Quantity>0),
    Purchasing_Des		varchar(100),
    Expense_AC			varchar(40),
    pic                 longblob,
    primary key(Product_id),
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );



    create table Retail_Details(
    Company_ID			int(6),
    Ref_ID			    decimal(8,0),
    Product_Code		char(5),
    Quantity			decimal(8,0) check (Quantity>0),
    Unit_price			decimal(8,2),
    Date			    varchar(15),
    Employee_Id			int(6),
    Customer_name		varchar(30),
    Email			    varchar(30),
    Mobile			    varchar(15),
    primary key( Ref_ID, Product_Code, Employee_Id),
    foreign key (Product_Code) references  Inventory (Product_Code),
    foreign key (Employee_Id) references  Employee_info (Employee_Id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table Orders(
    Order_id			int(6),
    Customer_id		    int(5),
    Product_Code		char(5),
    Date			    datetime,
    Unit_price			decimal(8,2),
    Quantity			decimal(8,0) check (Quantity>0),
    Status			    varchar(20) check(Status='cart' or Status='pending' or Status='completed'),
    primary key(Order_id,Customer_id, Product_Code),
    foreign key( Customer_id) references customer_info(Customer_id) on delete cascade on update cascade,
    foreign key (Product_Code) references Inventory( Product_Code) on delete cascade on update cascade
    );


    create table Order_Status( 
    Company_ID			int(6),
    Invoice_no			varchar(10),
    Order_id 			varchar(10),
    Employee_Id			int(6),
    Status			    varchar(15),
    Sales_Status		varchar(15),
    Date		 	    varchar(15),
    primary key( Invoice_no,Order_id ,Employee_Id , Status),
    foreign key (Employee_Id) references  Employee_info (Employee_Id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table Transactions(
    Company_ID		     int(6),
    Payment_id		     decimal(8,0),
    Customer_id		     int(5),
    Supplier_id		     int(5),
    Ref_id			     decimal(8,0),
    Employee_Id		     int(6),
    Date			     varchar(15),
    Type			     varchar(20),
    Amount			     decimal(8,2) check (Amount>0),
    Transaction_type	 varchar(20),
    Invoice_no		     decimal(8,0),
    Payment_date         datetime,
    primary key( Payment_id),
    foreign key( Customer_id) references customer_info(Customer_id) on delete cascade on update cascade,
    foreign key( Supplier_id) references supplier_info(Supplier_id) on delete cascade on update cascade,
    foreign key( Ref_id) references Retail_Details(Ref_id) on delete cascade on update cascade,
    foreign key( Employee_id) references employee_info(Employee_id) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade

    );   

    create table Return_inventory(
    Company_ID			int(6),
    Return_id			decimal(8,0),
    Customer_id		    int(5),
    Product_Code		char(5),
    Date			    varchar(15),
    Unit_price			decimal(8,2),
    Quantity			decimal(8,0) check (Quantity>0),
    Status			    varchar(20),
    primary key(Return_id,Customer_id, Product_Code),
    foreign key(Customer_id) references customer_info(Customer_id) on delete cascade on update cascade,
    foreign key (Product_Code) references Inventory( Product_Code) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade

    );

    create table Login(
    Employee_Id			int(6),
    Company_ID			int(6),
    Passward			varchar(32),
    primary key(Employee_id,Company_ID),
    foreign key(Employee_Id) references employee_info(Employee_Id) on delete cascade on update cascade,
    foreign key(Company_ID) references company_info(Company_ID) on delete cascade on update cascade
    );

    create table  Cost(
    Company_ID			    int(6),
    Product_code		    char(5),
    Date 			        varchar(15),
    Fixed_rent			    decimal(8,2),
    Fixed_utilites		    decimal(8,2),
    Fixed_equipment		    decimal(8,2),
    Variable_direct_labor	decimal(8,2),
    Variable_utilites		decimal(8,2),
    Variable_materiales	    decimal(8,2),
    Status			        varchar(15),
    primary key(Product_code),
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

    create table  Inventory_adjust(
    Company_ID			int(6),
    Adjust_no 		    decimal(8,0),
    Product_code		char(5),
    SKU 			    varchar(15),
    Product_name		varchar(40),
    Date 			    varchar(15),
    Quantity_in_hand	decimal(8,0),
    New_quantity		decimal(8,0),
    Change_quantity		decimal(8,0),
    Status			    varchar(15),
    primary key(Adjust_no,Product_code),
    foreign key (Product_code) references Inventory(Product_code) on delete cascade on update cascade,
    foreign key(Company_ID)references Company_info(Company_ID) on delete cascade on update cascade
    );

create table Admin_info(
    Admin_Id            int(6),
    First_Name          varchar(20),
    Middle_Name         varchar(20),
    Last_Name           varchar(20),  
    Suffix              varchar(20),
    Email               varchar(20) UNIQUE,
    phone_num           varchar(20),
    password            varchar(20),
    mobile              varchar(16),
    fax                 varchar(20),
    other               varchar(20),
    website             varchar(30),
    primary key(Admin_Id)
    );
