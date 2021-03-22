# StartingDatabase

### Setup for first time
 - Create sql file in directory
 - To start use the following command: 
    - sudo service mysql start
    - sudo mysql secure installation
    - password validate - 1234 if Yes else No
    - Remove anonymous users? Y
 - Disallow root login remotely? n
 - Remove test database and access to it? n
 - Reload privilege tables now? Y

### Setup for Non first timers
 - Create sql file in directory
 - To start use the following command: 
    - sudo service mysql start
    - sudo mysql -uroot -p

### basic Commands
 - source database_name
 - show databases; - shows list of databases craeted
 - use **database_name**; - start using specified database_name
 - use tables; - command to see which tables are inside the database
 - describe table_name; command to see which tables are inside the database. List data
fields (i.e., columns) and keys of each table.
