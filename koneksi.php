<?php
date_default_timezone_set('Asia/Jakarta');
//$host="10.0.0.174";
//$username="ditprogram";
//$password="Xou@RUnivV!6";
//$db_name="TM";
//$connInfo = array( "Database"=>$db_name, "UID"=>$username, "PWD"=>$password);
//$conn     = sqlsrv_connect( $host, $connInfo);
// function p($array,$exit=false)
//   {
//     echo "<pre>";
//     if(is_array($array) || is_object($array)){
//       print_r($array);
//     }
//     else{
//       if($array=="post"){
//         print_r($_POST);
//       }else if($array=="get"){
//         print_r($_GET);
//       }else {
//         echo $array;
//       }
//     }
//     echo "</pre>";
//     if($exit){
//       exit;
//     }
//   }


$hostname="10.0.0.21";
$database = "NOWPRD";
$user = "db2admin";
$passworddb2 = "Sunkam@24809";
$port="25000";
$conn_string = "DRIVER={IBM ODBC DB2 DRIVER}; HOSTNAME=$hostname; PORT=$port; PROTOCOL=TCPIP; UID=$user; PWD=$passworddb2; DATABASE=$database;";
$conn1 = db2_connect($conn_string,'', '');

if($conn1) {
}
else{
    exit("DB2 Connection failed");
    }

        $server = "10.0.0.221"; 
        $database = "db_qc";
        $username = "sa";
        $password = "Ind@taichen2024";

        $connectionInfo = [
            "Database" => $database,
            "UID" => $username,
            "PWD" => $password,
            "CharacterSet" => "UTF-8",
        ];

        $con = sqlsrv_connect($server, $connectionInfo);

        if ($con === false) {
            // tampilkan alasan gagal konek (penting buat debugging)
            die("SQL Server connection failed: " . print_r(sqlsrv_errors(), true));
        }

        //finishing
        $connectionInfoFinishing = [
            "Database" => 'db_finishing',
            "UID" => $username,
            "PWD" => $password,
            "CharacterSet" => "UTF-8",
        ];
        $con1 = sqlsrv_connect($server, $connectionInfoFinishing);

        if ($con1 === false) {
            // tampilkan alasan gagal konek (penting buat debugging)
            die("SQL Server connection failed: " . print_r(sqlsrv_errors(), true));
        }

        //Dying
        $connectionInfoDying = [
            "Database" => 'db_dying',
            "UID" => $username,
            "PWD" => $password,
            "CharacterSet" => "UTF-8",
        ];
        $con2 = sqlsrv_connect($server, $connectionInfoDying);

        if ($con2 === false) {
            // tampilkan alasan gagal konek (penting buat debugging)
            die("SQL Server connection failed: " . print_r(sqlsrv_errors(), true));
        }
 	
?>