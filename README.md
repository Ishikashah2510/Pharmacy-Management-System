# Pharmacy-Management-System
Pharmacy Management System made using Php and MySQL, with XAMPP

This is a project based on Pharmacy Management System, we are keeping records of
employees, medicines, patients, and the doctors who have treated them. We also 
have a bill making system, storing the data not just in the tables but also as 
a text file in the same folder as the webpage. 
The "Employees" table stores the details of the employees, which are of two types,
cashier and manager. The "doctors" table stores the details fo the doctors by whom,
the patients have been treated. The "patients" table stores the details of the
custoers/ patients, who have brought medicine from the pharmacy. The "history" table
is to store the history of patient, by the means, of storing the medicines they bought,
and the date they bought it. The "order" table is to store the data of the orders,
for future reference. The "login" table is to store the login credentials of the 
employees. The "treatment" table is for seeing which patient has been treated by which
doctor. The "Medicine" table is to store the data about the medicine.

When a bill is made, the bill is displayed for a few seconds before redirecting to
making a new bill, and the data is stored. If we are billing for a new patient, 
we take details of the patient and the doctor he was prescribed the medicines by. 
These details are stored in the patient, doctors, treatment table.

The images of tables, the er diagram, the list of tables are attached too, for reference. For demo video : https://drive.google.com/drive/folders/1TrHncVfPB7Q_Pdhjj842WZXSehrNmasX?usp=sharing

Steps to run the program:
1. Install XAMPP.
2. In the XAMPP control, start Apache, MySql.
3. open phpmyadmin on your web browser.
4. create a database "pharmacymanagement".
5. Download this repository, and eextract zip file contents.
6. copy inner folder pharmacymanagement in ...\xampp\mysql\data.
7. by localhost open pharmacy_main.php
8. you now have a running pharmacy management system.

The structure of database for Pharmacy Management System.
It consists of 'Doctor','Medicine','Patient' and 'Employee' as Strong entities whereas 'Login' and 'History' are weak entities.

'Doctor' entity consists of the following attributes:-

1>Doctor_id <as the primary key>
  
2>Doctor_name

3>Experience

4>Speciality

5>Workplace

'Patient' entity consists of the following attributes:-

1>Patient id <as the primary key>
  
2>Patient_name

3>Address

4>Phone_no


'Medicine' entity consists of the following attributes:-

1>Medicine_id <as the primary key>
  
2>Company

3>Price

4>Expiry_date

5>Treat

6>Stock

'Employee' entity consists of the following attributes:-

1>Employee_id

2>Employee_name

3>Address

4>Phone_no

5>Employee_type

The weak entity 'Login' is constituted by the attributes Employee_id and Password whereas 'History' is constituted by attributes
Patient_id,Medicine,Taken_for and Order_date.

The relationship set 'treated_by' joins 'Doctor' and 'Patient' with no attribute of its own.The relationship set 'buys' connects 'Patient'
and 'Medicine' and has attributes namely Order_date,Quantity and Total_amt.The relationship sets 'has' and 'of' maps weak entity set 'History' 
with 'Patient' and 'Medicine' respectively.'Employees' is joined with 'Login' by the set 'has credentials'.
