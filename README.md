# Create, Read, Update, Delete aka CRUD
### exercise in week 11 (06/12/2021 - 10/12/2021) of our BeCode training
## Challenge
Set up a system to store student, teacher and class information in a database.  
No login is required for now, everyone can view and edit the entries.  
We're using [this MVC boilerplate](https://github.com/becodeorg/php-mvc-boilerplate) written by former BeCode coach [Koen](https://github.com/grubolsch)  
Make sure we can view, add, edit and delete entries in the database.

## The objective of this exercise

* Connect to a database through PHP
* Code a simple CRUD app
* Use a provided MVC structure
* Work in a small group (3 people) and divide the work in a way that everyone has done at least one view, one model and one controller.

## The group

[Katya Heylen](https://github.com/KatyaHeylen)  
[Xiaoqi Li](https://github.com/830503)  
[Sven Vander Mierde](https://github.com/Sven-I-Am)

## Tools and languages used

| | Who? | |
| ----------- | ----------- | ----------- |
| ![windows10](Assets/images/windows10-logo.png) | ![php-storm](Assets/images/phpstorm-logo.png) | Sven & Katya |
| ![macos](Assets/images/macOS-logo.png) | ![VSCode](Assets/images/vscode-logo.png) | Xiaoqi |
| ![html](Assets/images/html-logo.png) | ![css](Assets/images/css-logo.png) | ![php](Assets/images/php-logo.jpg) |
| ![mySQL](Assets/images/mysql-logo.png) | ![git](Assets/images/git-logo.png) |  ![github](Assets/images/github-logo.png) |

## Timeline
* Day 1 (:date: 06/12/2021)
  * After the exercise briefing and team assignments by [coach Tim](https://github.com/Timmeahj) we split off into separate voice calls
  * After reading through the mission briefing it was time to get started on this exercise:
    * Sven created the repository and added the MVC boilerplate
    * we decided to take one hour to figure out how to create our database without using the MySQL admin panel
      * We all figured it out at about the same time and decided to use Sven's import.sql file to create the tables for students, teachers and classes
      * Each of us wrote a couple of entries into the database as well, that way we have some entries to test our code on along the way
  * Once our database was created and populated with some test cases we started looking at how to divide the workload
  * The first page we tackled was the students
  * By :clock5: 5PM each of us had written their part and pushed the code to our own branches
  * Sven merged all the branches down to the main branch without conflict
  * Since Katya and Xiaoqi are required to attend a day long meeting on day 2, the plan for tuesday 07/12/2021 is as follows:
    * Sven will write this readme,
    * He'll try to get the student page to work completely using the code provided by Katya and Xiaoqi
    * If there's time he'll also add some styling to it all
  * The work division is as follows:

|            | Model  |  View  | Controller |
| ---------- | ------ | ------ | ---------- |
|**Students**| Sven   | Xiaoqi |   Katya    |
|**Teachers**| Katya  | Sven   |   Xiaoqi   |
|**Classes** | Xiaoqi | katya  |   Sven     |

* Day 2 (:date: 07/12/2021)
  * First task of the day is to start writing this readme
    * Done at :clock11: 11am
  * Next up is getting the studentView to display the entries from the student table
  * Style was added on the go
  * Students can now be added, viewed, edited and deleted
    * basic email validation by setting the input type to email in html
    * basic form validation by setting all input fields to required
  * Class names are shown instead of class ID in the overview and detailed view
    * still have to make the connection for the add and edit student select dropdowns
  * commit and push after today's tasks at :clock3: 3pm

## To Do
This to do list is for personal use, the full to do list is added at the start of the challenge and as we complete
objectives they will be moved up into the timeline section and ticked off using emotes such as :heavy_check_mark:

### must-haves
* Students :heavy_check_mark:
  * A general overview of all records of that entity in a table :heavy_check_mark:
    * Each row should have a button to edit or delete the entity :heavy_check_mark:
    * This page should have a "create new" button :heavy_check_mark:
  * A detailed overview of the selected entity :heavy_check_mark:
    * This should include a button to delete this entity :heavy_check_mark:
  * A page to edit an existing entity :heavy_check_mark:
  * A page to create a new entity :heavy_check_mark:
* Teachers
  * A general overview of all records of that entity in a table
    * Each row should have a button to edit or delete the entity
    * This page should have a "create new" button
  * A detailed overview of the selected entity
    * This should include a button to delete this entity
    * Edge case: A teacher cannot be removed if he is still assigned to a class
    * Edge case: If you remove a class, make sure to remove the link between the students and the class.
  * A page to edit an existing entity
  * A page to create a new entity
* Classes
  * A general overview of all records of that entity in a table
    * Each row should have a button to edit or delete the entity
    * This page should have a "create new" button
  * A detailed overview of the selected entity
    * This should include a button to delete this entity
    * Edge case: A teacher cannot be removed if he is still assigned to a class
    * Edge case: If you remove a class, make sure to remove the link between the students and the class.
  * A page to edit an existing entity
  * A page to create a new entity

#### Fields:
On the general overview table you can yourself decide what would be useful information to show.

On the detailed overview you have to provide the following information:

* Student 
  * Name :heavy_check_mark:
  * Email :heavy_check_mark:
  * Class (with clickable link)
  * Assigned teacher (clickable link - relation via class) 
* Teacher
  * Name
  * Email
  * List of all students currently assigned to him (clickable link)
* Class
  * Name class (Giertz, Lamarr, ...)
  * Location (Antwerp, Gent, Genk, Brussels, Liege)
  * Assigned teacher (clickable link)
  * List of assigned students (clickable link)

### Nice to have

* Add a search bar at the top of each page to search for the names of teachers or students
* Make an address entity. An address can be assigned to a student or teacher (where he lives) or to a class (where are the lessons given).
* Add Basic HTTP Authentication with a .htaccess file.