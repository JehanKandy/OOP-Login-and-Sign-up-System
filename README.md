<h1 align="center">OOP-Login-and-Sign-up-System</h1>
<h4 align="center">Object oriented Login and Sign up System</h4>

<p align="center"><img src="https://wakatime.com/badge/user/0ac30051-5698-4ae9-851e-7d4853d4aba7/project/895242d1-4ecf-4309-9073-6fcbdc71fac7.svg"></p>


<h1>Explain Functions</h1>

[function file](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/lib/function/function.php)


I develop this system using `Object oriented PHP` and `PDO` - `PHP Data Objects`

[more about OOP PHP and PDO](https://www.w3schools.com/php/php_mysql_intro.asp)

in here i am not going to create a config.php file so connection functionalties in [function.php](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/lib/function/function.php) file

first lines of file 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "oop_login";
    
in here i create 4 php variables and assign some values such as following <br>
`$server` for server - default - `localhost`<br>
`$user` for xampp username - default - `root`<br>
`$pass` for password - default - `null`<br>
`db_name` for database that you want to add data<br>


    try {
        $con = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $con->beginTransaction();

        function reg_user($usernmae,$email,$pass,$cpass){
            
        }

    }
    
in above code i check the connection between php file and database, so in here i user `PDO` - `PHP Data Objects` or you can user `mysqli`
[for connection](https://www.w3schools.com/php/php_mysql_connect.asp)


# Development Timeline

  <h4> 03 January 2023</h4>
  
  - start Project
  - index.php
  - css/style.css
  - lib/layouts/header.php
  - lib/layouts/footer.php
  - lib/views/login.php
  - lib/views/reg.php
  - lib/function/function.php

<h1>Developers</h1>
  <h4>JehanKandy</h4>

  - Github [JehanKandy](https://github.com/JehanKandy)
  - Twitter [@JehanKandy](https://twitter.com/jehankandy)
  
<h1>Copyright and license</h1>

Copyright 2021–2023 [JehanKandy](https://github.com/JehanKandy). <b>Online Selection Examination System</b> released under the [MIT License](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/LICENSE)
