<?php
   $Database = "inscription";
    $serverName = "localhost";
    $Password= "";
    $Username= "James";
    //$conn = sqlsrv_connect($serverName, $connectionsOptions); pour sql srv
    //$conn=mysqli_connect($serverName, $Username, $Password, $Database);
    $conn= new PDO("mysql : host = localhost ; dbname=" . $Database, $Username, $Password);
    //if ($conn->connect_errno) 
    if($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
        echo "Failed to connect to MySQL: " ;//. $conn->connect_error;
    } else {
        echo "Connected successfully";
    }
   /* //$_POST pour recuperer la valeur 
    if (isset($_POST["submit"])){
        $name=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $date=$_POST["date"];
        $sex=$_POST["sexe"];
        $nati=$_POST["nation"];
        $serie=$_POST["serie"];
        $filier=$_POST["filie"];
        $pseud=$_POST["pseudo"];
        $psswd=$_POST["motdepasse"];
    }
//insertion dans les tables (Tables 1 - Civilite)
    $tsql1= "INSERT INTO Civilite(Nom,Prenom,Date_naiss,Sexe,Nationnalite) VALUES(?,?,?,?,?)";
    $parmtre1= array($name, $prenom, $date, $sex, $nati);
    $getResults = mysqli_prepare($conn, $tsql1);
    mysqli_stmt_bind_param($getResults, "sssss" , $parmtre1);
    mysqli_stmt_execute($getResults);
//Table 2 - Cursus
    $tsql2="INSERT INTO Cursus(Serie, Filiere) VALUES(?,?)";
    $paramtre2= array($serie, $filier);
    $getResults2 = mysqli_prepare($conn, $tsql2);
    mysqli_stmt_bind_param($getResults2, "ss",  $paramtre2);
    mysqli_stmt_execute($getResults2);
// Table 3- Cursus
    $tsql3="INSERT INTO Info_compte(Pseudo, psswd) VALUES(?,?)";
    $paramtre3= array($pseud, $psswd);
    $getResults3 = mysqli_prepare($conn, $tsql3);
    mysqli_stmt_bind_param($getResults3,"ss", $paramtre3);    
    mysqli_stmt_execute($getResults3);
    /*$name=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $date=$_POST["date"];
    $sex=$_POST["sexe"];
    $nati=$_POST["nation"];
    $serie=$_POST["serie"];
    $filier=$_POST["filie"];
    $pseud=$_POST["pseudo"];
    $psswd=$_POST["motdepasse"];
    echo $name;
    echo "<br>";
    echo $prenom;
    echo "<br>";
    echo $date;
    echo "<br>";
    echo $sex;
    echo "<br>";
    echo $nati; 
    echo "<br>";
    echo $serie;
    echo "<br>";
    echo $filier;
    echo "<br>";   
    echo $pseud;
    echo "<br>";
    echo $psswd;
    echo "<br>";*/

?>
