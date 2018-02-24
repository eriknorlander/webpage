"# webpage an IT-case for Lunicore"

### PREREQUISITES 
This project was developed using Wampserver (http://www.wampserver.com/) as it includes PHP,MySQL and Apache. As long as all three of these programs are installed locally the program will work. 

### BUILD
- PHP/html-scripts
'get_employees.php' returns all the employees at the company
'get_all_sales.php' returns all the employees and their sales
'get_carmodels.php' returns the inventory of cars available
'add_carmodel.php' appends the 'carmodels' table with a new entry
'bodyshop.php' is the homepage with links to all of the above

- Database
bodyshop.db has two tables (taken from phpMyAdmin):

DESCRIBE carmodels; 
brand	varchar(30)	NO		NULL		
model	varchar(30)	NO		NULL		
country	varchar(30)	NO		NULL		
year	year(4)	NO		NULL		
price	float	NO		NULL		
used	enum('y','n')	NO		NULL		
car_id	int(11)	NO	PRI	NULL	auto_increment	

DESCRIBE employees;
first_name	varchar(30)	NO		NULL		
last_name	varchar(30)	NO		NULL		
employee_id	int(11)	NO	PRI	NULL	auto_increment	
birth_date	date	NO		NULL		
email	varchar(60)	NO		NULL		
sales	float	YES		NULL		
adress	varchar(100)	NO		NULL		
mobile_phone	varchar(10)	NO		NULL		
