# Installation and Running
The latest version can be found here:  https://github.com/tjcim/acorn.

## Windows
* Click on the ZIP button to download the repository as a zip file.
* Extract the contents
* Go into acorn-master/bin
* Double Click on the 'Start-Acorn.bat'
  * This should open a command prompt window, and start a local development php webserver.
* Browse to http://localhost:8000

## Linux
Use php --version to check your current version of php.  This application has been tested on PHP 5.4.  Use your package manager to install php if needed.  Edit php.ini to include the sqlite libraries.  Go to the src directory and run php -S localhost:8000.  You go to http://localhost:8000/phpinfo to check that the sqlite libraries have been loaded.

# About
A small php and sqlite3 application with the goal of teaching the basics of web application security.

Written by Trevor Christiansen
Found at https://github.com/tjcim/acorn

## Purpose
I feel it is important to understand how to secure applications and to identify situations that could make an application vulnerable to common exploits.

## Why php/sqlite/bad code/etc...
The goal was to make an application that could teach the fundamentals without requiring the installation of any additional applications.  This makes the project very portable and can be experienced in more environments.

PHP: is one of the most common web application languages in use today.  Source:  http://www.tiobe.com/index.php/content/paperinfo/tpci/index.html.  PHP does not need to be compiled and therefore can be edited/modified with a simple text editor.  Also, cross-platform compatible.  I am a linux user, but I understand that Windows is much more popular.  The same PHP code can run in both environments without change.

SQLite:  This is simply a decision based on the use of the app.  SQLite can be run without installing or starting a server, but maintains much of the same functionality of an installed DB (MySQL, MSSQL, etc.)

Bad Coding:  Quite simply, I am not a developer.  Feel free to fix up the code and send me a pull request on github (https://github.com/tjcim/acorn)

## Why acorn?
I think that it is a cool visual to think of such a small seed can grow into a large tree.  I think that in a lot of ways a vulnerability is similar in that it starts small, but can quickly get out of control.
