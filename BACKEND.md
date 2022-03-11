[Back to README](./README.md)
# Backend
There are 2 areas you need to understand to be a backend developer:

 1. Server operating system functionality
 2. Database functionality

I'm not going to teach you how to do either of the features within the areas above. We all have different learning styles, and we respond to different teachers. Within this document however, I will tell you what you will need to know, so that you can go off and learn them your way. I would encourage you to complete your learning here to fully appreciate if this is something you may enjoy.
## Server Operating System Functionality
Operating system (OS) commands and features will vary depending on the OS you are using. However, most webservers on the Internet use GNU/Linux (often just termed Linux). The reasons for this include that:

 * It is open-source, which usually means it's also free to use.
 * It is secure.
 * It is scalable.

Despite being free to use, you can get support contracts.

The Learn to Code environment offers a chance to get to know GNU/Linux. Here you will delve into the world of the command line, or shell. Here's how to begin.

### Access the Backend Shell
Make sure your Visual Studio Code terminal is open at the Learn to Code environment directory. Use the command:
```
docker-compose start
```
Now click the icon of the Visual Studio Code left hand navigation for Docker. At the top are a list of containers. YOu want to right-click on the container for "lslio/nginx-php-fpm", and choose "Attach Shell". This will give you shell (command-line) access to the "lslio/nginx-php-fpm" (middleware) server. When you've finished there, just type

```exit```

Now you need to learn about GNU/Linux.
For this you will need to understand 3 things:
 1. The commands (begin with the command ls). I find this a good place to start https://www.w3schools.com/whatis/whatis_cli.asp
 2. An editor (vi is character building here).
 3. Writing Shell Scripts.

Once you're comfortable with these, it's time to move on.
## Database Functionality
You should already have a database and it's extension setup from the software installation stage. Click on the "Explorer" icon on the left-hand navigation of Visual Studio Code.

Now look at the bottom-left of Visual Studio Code. You should see a vertical tab for "MySQL". Open this up. The database connection should be setup as "0.0.0.0". Click that connection. Inside that connection should be a database listed as "acme".

You can write click on the "acme" database and choose "New Query". This will bring up a window into which you can add SQL statements. Let's try adding our first statement:
```
SELECT * FROM users;
```

Now you can right click in that window and select "Run MySQL Query". You should now see a window displaying the results of the query.

Now it's time to learn all about SQL. I've listed the keywords you should learn. I recommend this website for learning them, but just find your own way.

https://www.w3schools.com/mysql/default.asp
 * SELECT
 * WHERE
 * AND, OR, NOT
 * ORDER BY
 * INSERT INTO
 * NULL Values
 * UPDATE
 * DELETE
 * LIMIT
 * MIN and MAX
 * COUNT, AVG, SUM
 * LIKE
 * Wildcards
 * IN
 * BETWEEN
 * Aliases
 * Joins
 * INNER JOIN
 * LEFT JOIN
 * RIGHT JOIN
 * CROSS JOIN
 * Self Join
 * UNION
 * GROUP BY
 * HAVING
 * EXISTS
 * ANY, ALL
 * INSERT SELECT
 * CASE
 * Null Functions
 * Comments
 * Operators
 * Database
 * Create DB
 * Drop DB
 * Create Table
 * Drop Table
 * Alter Table
 * Constraints
 * Not Null
 * Unique
 * Primary Key
 * Foreign Key
 * Check
 * Default
 * Create Index
 * Auto Increment
 * Dates
 * Views
 * Stored procedures
