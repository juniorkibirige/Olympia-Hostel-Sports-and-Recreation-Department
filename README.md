# Olympia Hostel Sports and Recreation Department


SPORTS AND MANAGEMENT SYSTEM FOR OLYMPIA HOSTEL
Prepared by:
Name	Student ID	Registration Number
Kibirige Junior Lawrence	1800725567	18/U/25567/EVE
Semuyaba Samuel Remy		
		
		

 
1. Database Planning
  1.1 MISSION STATEMENT
	The sole purpose of the organisation is to provide accommodation services to university students on a semester-wise program, incognito with provision of sports and recreation to the premise users.
	The database will be used to smoothen all the existing processes and help speed up operation of the department.
  1.2 MISSION OBJECTIVES
2. System Definition
  Our system supports the following user views: -
 	Manager view
 	Cashier view
 	Trainer / Employee view
 	Clientele view
3. Requirements
  3.1 MAIN USER VIEWS
    3.1.1 Manager
      Manager does the overseeing of the entire online sports and Recreation Department. The Manager receives a day to day report of all activities and transactions that have taken place at the Department. Carries out authorization of all transactions that take place. He is the overall administrator, does registration and employment of staff.
    3.1.2 Cashier
      Manages the finances of the Department and reports daily only and only to the Manager. Takes payment for club membership, daily sports activity fees. Carries out salary payments to all staff.
    3.1.3 Trainers
      Are employed by the Manager, but report to the Cashier about their day-to-day activities and training stats. A trainer can view client records, deny appointment requests, make salary advancement requests and make complaint reports.
    3.1.4 Clients
      These are the sportsmen and women who sign up for the sports activities, they can view the different sports activities, request for a specific trainer, be able to apply for activities, do bookings and make complaints.

  3.2 TASKS PERFORMED BY EACH USER VIEW.  
    3.2.1 Manager
      -> Carries out all managerial issues and is the system administrator.
      -> Authorizes all transactions in the Department.
      -> Does all the employment and registration of staff.
    3.2.2 Cashier
      -> Files reports of daily activities to Manager.
      -> Receives all cash transactions from employees and Clients.
      -> Oversees all financial issues of the Department.
      -> Receives order requests for new equipment.
    3.2.3 Trainers
      -> Issue appropriate exercise schedules to all sportsmen.
      -> Selects specific exercise routines for the sportsmen the train.
      -> Requests equipment and materials from cashiers by order forms.
      -> Make complaints about the development, clientele or equipment.
    3.2.4 Clientele
      -> Books appointments.
      -> Register for activities.
      -> Perform payments via either print outs of invoices or mobile money.
      -> Perform rescheduling of appointments.
      -> Complain to the trainer or Cashier.
  3.3 TYPE OF DATA HELD ON ENTITIES IN THE SYSTEM.
    3.3.1 Clients
      -> First Name
      -> Last Name
      -> Date of Birth: (DD MM YYYY)
      -> National Identification Number
      -> Address: (City, Village)
      -> Tel. Number
      -> Email Address
      -> Type of services required (1:5)
    3.3.2 Transactions
      3.3.2.1 Orders
        -> Order Id
        -> Product Name
        -> Quantity
        -> Ordered by
        -> Asserted by
        -> Authorised by
        -> Order Status
      3.3.2.4 Club Membership
        -> First Name
        -> Last Name
        -> Date of Birth: (DD MM YYYY)
        -> National Identification Number
        -> Address: (City, Village)
        -> Tel. Number
        -> Email Address
        -> Member(s) passport photo(s)
        -> Membership type 
        -> Class (1:3)
   3.3.3 Employees
        -> First Name
        -> Last Name
        -> Date of Birth: (DD MM YYYY)
        -> National Identification Number
        -> Address: (City, Village)
        -> Tel. Number
        -> Email Address
        -> Type of service offered
        -> Employee Passport Photo

  3.4 PROCESSES CARRIED OUT ON DATA COLLECTED
   3.4.1 On Client Data
	Generation of number of clients per week.
	Calculation of expiration date for membership.
	Allocation of different trainers for different people.
	Generation of daily revenue reports.
   3.4.2 On Employee Data
	Number of employees are generated.
   3.4.3 On Transaction Data
	Number of items on stock.
	Authorisation by manager.
	Number of club members.
	Quantity of members in the different classes.
  3.5 FREQUENT TRANSACTIONS / REPORTS
	On order placing, the order is sent to the cashier for assertion (to make sure item is out of stock), after assertion the order is sent to the manager who Authorises it and later the order is closed off by the Cashier of provision of funds and later a report of expenditure is sent to the cashier by the person who made the order. (Critical to database running)
	On registration of a client, client data is sent to the manager and to the trainers after the system assigns a specific trainer to a client, querying the trainer for training periods and number of appearances per week. (Critical to database running)
	On a daily basis, the cashier sends typed reports to the Manager for filing purposes the day’s activities and complaints. (Critical to database running)
	On complaint filing by either entity i.e. Cashier, Trainer or Client, it is forwarded to the manager, for review and action is taken to resolve the complaint, if manager decides its meeting worthy if it’s against another entity then both entities are sent summons to his office.
 
4. Database Design
