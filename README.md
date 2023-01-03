<h1 align="center">OOP-Login-and-Sign-up-System</h1>
<h4 align="center">Object oriented Login and Sign up System</h4>

<p align="center"><img src="https://wakatime.com/badge/user/0ac30051-5698-4ae9-851e-7d4853d4aba7/project/895242d1-4ecf-4309-9073-6fcbdc71fac7.svg"></p>


<h1>Explain Functions</h1>

[function file](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/lib/function/function.php)


I develop this system using `Object oriented PHP` and `PDO` - `PHP Data Objects`

[more about OOP PHP and PDO](https://www.w3schools.com/php/php_mysql_intro.asp)


now i am going to create connection between php and Database

[config.php](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/lib/function/config.php)

    <?php
        define('HOST','localhost');
        define('USER','root');
        define('PASS','');
        define('DB_NAME','oop_login');

        try{
            $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
        }

        catch (PDOException $e){
            exit("ERROR: ". $e->getMessage());
        }
    ?>
    
firstly i define `HOST`, `USER`, `PASS`, `DB_NAME` and assign `localhost` as server, `root` as user, null or empty as password, and `oop_login` as database name

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
  - lib/function/config.php

<h1>Developers</h1>
  <h4>JehanKandy</h4>

  - Github [JehanKandy](https://github.com/JehanKandy)
  - Twitter [@JehanKandy](https://twitter.com/jehankandy)
  
<h1>Copyright and license</h1>

Copyright 2021–2023 [JehanKandy](https://github.com/JehanKandy). <b>Online Selection Examination System</b> released under the [MIT License](https://github.com/JehanKandy/OOP-Login-and-Sign-up-System/blob/main/LICENSE)
