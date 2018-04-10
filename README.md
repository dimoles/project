#PHP test project

=======
#Assignment
----
There are is a tree of start folder,it's subfolders, their subfolders, etc..
In each folder, subfolder, etc.. there are same structured XML files stored. A sort of:

<book>
    <author>Isak Azimov</author>
    <name>End of spirit</name>
</book>
<book>
    <author>Ivan Ivanov</author>
    <name>Start of spirit</name>
</book>

1.Read XML parsed content a data base table:
    1.1.PHP script should read XML files information and add it to PostgreSQL 
    database single table.The date of insertion should also be added.XML files content shoul be displayed as a result.
    1.2. If a record from specified file and subfolder already exist PHP script has to update 
    the date of the record and not to insert it as a new one.

    2.XML files should contain Cyrilic, Korean and Japanese symbols as well

    3.Create simple page with a search form(should search by author only from data base).
     Result should be printed right after search form.

    4.Requirements:
        -Use object oriented way of programming
        -Write short description of test project
        -Testing an unpredicted situations
        -Use PostgreSQL for the database

#TESTING
--------
1 -> download files 
2 -> Save it in XAMPP folder -> htdocs
3 -> Open Xampp -> start Apache
4 - > Enter in browser localhost
5 - > choose folder project -> folder ParseXML from browser
6 -> write in form author and title of book and click insert
7 - > result you displayed at catalog page like a table
8 - > to delete record - > write the exist title in 'name' field from the form and click button delete
9 - > To search record - > write in field 'search by author'
10 - > To see tree of folders with xml's files click 'Directories'

##In this example is made only with php and xml files without connection with PostgreSQL