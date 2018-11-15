INSERT INTO `admin_info` (`Admin_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Suffix`, `Email`, `phone_num`, `password`, `mobile`, `fax`, `other`, `website`) VALUES
(0, 'Abc', NULL, 'Def', NULL, '123@gmail.com', NULL, '123', NULL, NULL, NULL, NULL);


INSERT INTO `company_info` (`Company_ID`, `Company_name`, `Price_Plan`, `Owner_Title`, `Owner_First_Name`, `Owner_Middle_Name`, `Owner_Last_Name`, `Owner_Suffix`, `Company_type`, `Account_type`, `Email`, `Phone_number`, `Mobile`, `Fax`, `Others`, `Website`, `Status`) VALUES
(1, 'Bikroy', 'Standard', NULL, 'a', NULL, 'b', NULL, NULL, NULL, '1@gmail.com', NULL, '', NULL, NULL, NULL, 'Permanent'),
(2, 'GiftShop', 'Premeium', NULL, 'a', NULL, 'b', NULL, NULL, NULL, '2@gmail.com', NULL, '', NULL, NULL, NULL, 'Permanent'),
(3, 'Food Bank', 'Simple', NULL, 'a', NULL, 'b', NULL, NULL, NULL, '3@gmail.com', NULL, '123', NULL, NULL, NULL, 'Permanent');

INSERT INTO `company_address` (`Company_ID`, `Street`, `City_Town`, `State__Province`, `Postal_Code`, `Country`, `Status`) VALUES
(1, '', '', '', NULL, '', 'Temporary'),
(2, '', '', '', NULL, '', 'Temporary'),
(3, '', '', '', NULL, '', 'Temporary');

INSERT INTO `customer_info` (`Customer_id`, `Title`, `First_Name`, `Middle_Name`, `Last_Name`, `Suffix`, `Email`, `phone_num`, `password`, `mobile`, `fax`, `other`, `website`, `Preffered_payment`, `Shipping_Way`, `Status`) VALUES
(1, NULL, 'Asd', NULL, 'Def', NULL, 'a@gmail.com', NULL, 'a', '132', NULL, NULL, NULL, NULL, NULL, 'Temporary');


INSERT INTO `customer_address` (`Customer_id`, `Street`, `City_Town`, `State__Province`, `Postal_Code`, `Country`, `Status`) VALUES
(1, '', '', '', NULL, '', 'Temporary');

INSERT INTO `customer_company` (`Customer_id`, `Company_ID`) VALUES
(1, 2),
(1, 3);

INSERT INTO `inventory` (`Company_ID`, `Product_code`, `Product_name`, `Product_Des`, `SKU`, `Category`, `Quantity_in_hand`, `As_of_date`, `Inventory_Asset_ac`, `Sales_Rate`, `Sales_Des`, `Income_Ac`, `Purchasing_Cost`, `Purchasing_Des`, `Expense_AC`, `pic`) VALUES
(2, 'pr001', 'T-shirt', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.', 'x742a366', 'shirt', '40', '05.08.2017', '', '250.00', 'no', '', '19.39', 'no', '', ''),
(2, 'pr002', 'Pulsar', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.', 'dsa', 'bike', '65', '05.08.2017', 'null', '180000.00', '', 'null', '41.43', '', 'null', ''),
(2, 'pr003', 'iPhone X', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.', '22', 'mobile', '100', '05.08.2017', '', '90000.00', '2', '', '38.40', '', '', ''),
(3, 'pr005', 'Burger', 'hg', 'hg', 'food', '100', '05.08.2017', '', '120.00', 'fu', '', NULL, 'jf', '', '');