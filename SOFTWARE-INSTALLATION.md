[Back to README](./README.md)
# Software Installation
This section will partly test, if you enjoy cleanly setting up software for the purposes of development. It's a task which all developers will have to do at some stage. If you don't enjoy putting together the tool set, coding may not be for you.

## Create a Directory
People not used to the more technical world will often refer to this as a "folder". In fact the more accurate name is a "directory". This is because it's not actually a container, though visually it may seem that way. It is actually a file which points to other files.

You can create a directory anywhere. I added a directory called "websites" to my "Documents" directory and I work with there.

Create your own directory before we move on.
## Visual Studio Code
Install Visual Studio Code from the site
https://code.visualstudio.com/download

In the world of code, this is known as an IDE (Integrated Development Environment). It's a piece of software where you'll spend a lot of time. It's a good idea to, not only familiarise yourself, but become proficient in.

IDE's commonly contain extentions, or plugins to help the process of coding easier, but also to do the jobs associated with the coding.

Try not to add any extensions at this stage, we will add a few later.

One tool which come packaged with Visual Code Studio is the "Terminal". If you wish to further understand the terminal before we move, see the website: 

https://towardsdatascience.com/a-quick-guide-to-using-command-line-terminal-96815b97b955

There are also lots of videos worth looking at, but there's no need to look at this in depth before moving on.

## Git & Github
You will need git installed on your computer to take part in this learning experience. There's no need at this stage to understand what it is, or how it works, but you will need it. Find out how to install it on your operating system from the site https://git-scm.com/downloads

You will also need to create an account on the website GitHub.

See https://github.com/

After creating your account, safely make a note of your username, and the e-mail address you used during the setup.

The next step we'll take will be within Visual Studio Code, so make sure that's open.

In Visual Studio Code, select "Terminal", and "New Terminal". This should bring up a terminal at the bottom of the screen.

The terminal window will probably have a final line which contains the current directory. The lines which you enter here are known as "commands".

You will use the GitHub username and email address to setup Git on your computer using the following commands:

```git config --global user.name "Your name"```

```git config --global user.email your-email-address@example.com```
## Docker
We will be using docker to create 3 different coding environments in this learning experience, so you will need to install it on your computer. Make sure at this stage, you get the free version from:

https://www.docker.com/get-started

You can always pay for full support if you become a professional.

In the next section, we'll be creating those environments, adding a database, and then we should be ready to code.

### Initital Docker Setup

It's time to use the directory you created, Visual Studio Code, and Git. Does this look like progress?

Now it's time to add our first, of very few extensions.

### The Docker Extension
On the lft navigation bar of Visual Studio Code, click on the "Extensions" icon. Here you will be provided with a list of extensions which can be installed, and a search box at the top. Type the word "Docker". You will then see a list of extensions which contain docker in the description. You want the extension simply called "Docker". It has a blue check mark and has been developed by Microsoft. To install, you simply click on the cog icon to the right, and choose "Install". You will need to restart Visual Studio Code to make it fully effective.

## Pull the Starter Files
Open Visual Studio Code and from the "File" menu choose "Open Folder". Now select the directory, you created.

Now, if there isn't already one open choose from the "Terminal" menu choose "New Terminal". The prompt should be pointing at the directory you created. If not, close down Visual Studio Code and start again. Or, if your feeling confident change the directory in the terminal to your directory. Either way, that's where we want to be.

Now we need to run the following command in the terminal:

```git clone https://github.com/guitarbeerchocolate/learn-to-code-environment.git```

This will bring down a copy of the files needed to create our environments for coding.
## Add Your Backend
You should now create a directory within the "data" directory called "backend". This should result in the following structure:
learn-to-code-environment
 * data
     * backend
     * middleware-API
     * frontend
 * docker-compose.yml
 * README.md

docker-compose down --volumes
docker system prune -a -f --volumes
docker network prune
docker-compose up -d --force-recreate --build

The backend is the first place we will look at coding.
## Kick Starting
### How to create the containers for the first time
```docker-compose up -d --force-recreate --build```
### How to stop the containers
```docker-compose stop```
### How to start the containers subsequently
```docker-compose start``` 

### How to add data to the database
It's time to add the MySQL extension by Jun Han. Let's see if you remember how to add an extension.

It's also time to start using the Docker extension. It should have an icon on the left-hand navigation of Visual Studio Code.
When you click on it, you should see different section, one of which should be titled, "Containers".

First, right-click on the mysql Docker container and choose the "Attach Shell" option. In other words log into the mysql Docker container.

Now, log into the mysql environment using:

```mysql -u root -ppassword```
    
Now, paste the following SQL and press 'Enter' (carriage return).

CREATE DATABASE acme;
USE acme;
CREATE TABLE users(
id INT AUTO_INCREMENT,
   first_name VARCHAR(100),
   last_name VARCHAR(100),
   email VARCHAR(50),
   password VARCHAR(20),
   location VARCHAR(100),
   dept VARCHAR(100),
   is_admin TINYINT(1),
   register_date DATETIME,
   PRIMARY KEY(id)
);
INSERT INTO users (first_name, last_name, email, password, location, dept, is_admin, register_date) values ('Brad', 'Traversy', 'brad@gmail.com', '123456','Massachusetts', 'development', 1, now());
INSERT INTO users (first_name, last_name, email, password, location, dept,  is_admin, register_date) values ('Fred', 'Smith', 'fred@gmail.com', '123456', 'New York', 'design', 0, now()), ('Sara', 'Watson', 'sara@gmail.com', '123456', 'New York', 'design', 0, now()),('Will', 'Jackson', 'will@yahoo.com', '123456', 'Rhode Island', 'development', 1, now()),('Paula', 'Johnson', 'paula@yahoo.com', '123456', 'Massachusetts', 'sales', 0, now()),('Tom', 'Spears', 'tom@yahoo.com', '123456', 'Massachusetts', 'sales', 0, now());
CREATE TABLE posts(
id INT AUTO_INCREMENT,
   user_id INT,
   title VARCHAR(100),
   body TEXT,
   publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY(id),
   FOREIGN KEY (user_id) REFERENCES users(id)
);
INSERT INTO posts(user_id, title, body) VALUES (1, 'Post One', 'This is post one'),(3, 'Post Two', 'This is post two'),(1, 'Post Three', 'This is post three'),(2, 'Post Four', 'This is post four'),(5, 'Post Five', 'This is post five'),(4, 'Post Six', 'This is post six'),(2, 'Post Seven', 'This is post seven'),(1, 'Post Eight', 'This is post eight'),(3, 'Post Nine', 'This is post none'),(4, 'Post Ten', 'This is post ten');
CREATE TABLE comments(
	id INT AUTO_INCREMENT,
    post_id INT,
    user_id INT,
    body TEXT,
    publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) references users(id),
    FOREIGN KEY(post_id) references posts(id)
);
INSERT INTO comments(post_id, user_id, body) VALUES (1, 3, 'This is comment one'),(2, 1, 'This is comment two'),(5, 3, 'This is comment three'),(2, 4, 'This is comment four'),(1, 2, 'This is comment five'),(3, 1, 'This is comment six'),(3, 2, 'This is comment six'),(5, 4, 'This is comment seven'),(2, 3, 'This is comment seven');

Your 'acme' database is now created, and data has been added to it.

Now exit from the mysql environment.

```exit;```

Now exit from the Docker container shell.
    
```exit```
## Testing it all works
### Backend
Now we need to apply our connection to the MySQL Extension.
Click on the "Explorer" icon on the left-hand navigation of Visual Studio Code.

Now look at the bottom-left of Visual Studio Code. You should see a vertical tab for "MySQL". Open this up.

On the right hand side of this tab is a "+" symbol. When you click this a series of text entry boxes will appear at the top of Visual Studio Code. Below are the entries you need to enter.

 * host: 0.0.0.0
 * user: root
 * pass * word: password
 * port * : 3306
 * [Optional] SSL certificate path: Just press enter.

If everything has worked, you should be able to click on the connection for "0.0.0.0" and see a set of databases, including the acme one we created.
### Middleware/API
Open up your web browser and apply the following URLs:
 * http://localhost:8080/
 * http://localhost:8080/?api=users
 * http://localhost:8080/?api=posts
 * http://localhost:8080/?api=comments
### The Frontend
Open up your web browser and apply the following URLs:
 * http://localhost:8000/
 * http://localhost:8000/?api=users
 * http://localhost:8000/?api=posts
 * http://localhost:8000/?api=comments

If everything works, then we're ready to code.
## Start again
If it all goes wrong and you want to start again. First stop all containers and volumes:

```docker-compose stop```

```docker-compose down --volumes```

Now prune the system:

```docker system prune -a -f --volumes```

```docker network prune```

Now you're ready to start again with

```docker-compose up -d --force-recreate --build```