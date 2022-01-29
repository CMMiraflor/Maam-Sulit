#Real-Time-Parking-Reservation-System
Web Based Parking Reservation System.

## Guid Lines before accessing the website
	1. Install Xampp. (for local hosting)
	2. Copy the whole folder of "Real-Time-Parking-Reservation-System" in htdocs folder in Xampp.
	3. Start Xampp server, make sure to start Apache Module and MySQL Module in Xampp Control Panel.
	3. Setup your Database using "testing.sql" file. (Refer to this site: http://www.cs.virginia.edu/~up3f/cs4750/supplement/DB-setup-xampp.html or you may folow the following instructions)
		3.1. Open a web browser and enter the url: http://localhost
		3.2. Select phpMyAdmin tab
		3.3. Add a user account
			3.3.1. On the  phpMyAdmin  screen, select  User accounts  tab.
			3.3.2. Select  Add user account  link.
			3.3.3. Enter user name and password of your choice. Note: do not use any of your official accounts such as UVA account.
			3.3.4. Select  Local  for  Host name
			3.3.5. Check  Create database with same name and grant all privileges
			3.3.6. Check  Grant all privileges on wildcard name (username\_%)
			3.3.7. Check  Check all  for  Global privileges
			3.3.8. At the bottom-right of the screen. click the  Go  button
		3.4. Create a database
			3.4.1. On the  phpMyAdmin  screen, select the  Databases  tab. Alternatively, you may click the  New  link on the left panel.
			3.4.2. Under the  Create database,  enter a Database name (use "testing" as your database name)
			3.4.3. Click the  Create  button
		3.5. Import the "testing.sql" from "Real-Time-Parking-Reservation-System" folder
			3.5.1. On the  phpMyAdmin  screen, select the  "testing"  database
			3.5.2. Select the  Import  tab
			3.5.3. Click the "Browse" option
			3.5.4. Choose the "testing.sql" from "Real-Time-Parking-Reservation-System" folder
			3.5.5. Click the  Go  button.
	4. Once the database has already been set-up, you may now check the website
	
## Guid Lines for accessing the website
	1. Go to this url: http://localhost/Real-Time-Parking-Reservation-System/index.html
		1.1. For new user, you may register an account
		1.2. For Admin (System Administrator), use the following credentials:
				Username: admin
				Password: admin
			
			
		
	
	
			
	
