<?php
declare(strict_types = 1);                               // Use strict types                           // Import Validate class
namespace PhpBook\CMS;                                   // Namespace declaration
                                               // Import PDO class
                                         // Initialize: fro                                         // Message

//학교 검색 관련 변수
$schoolSearch  = '';
$SCHUL_NM      = '';
$SD_SCHUL_CODE      = '';
$service_name  = 'check';
$data['year'] = date("Y");




//school search

$SCHUL_NM      = $_POST['SCHUL_NM'];
$SD_SCHUL_CODE = $_POST['SD_SCHUL_CODE'];

$data['$SD_SCHUL_CODE'] = $SD_SCHUL_CODE;;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



  $table_name = "l" . $SD_SCHUL_CODE . $data['year'];
  

  $q["one"] = "CREATE TABLE $table_name (
                      id INT(255) NOT NULL AUTO_INCREMENT,
                      grade VARCHAR(15) NULL,
                      class VARCHAR(15) NULL,
                      memory VARCHAR(15) NULL,
                      ipv4 VARCHAR(15) NULL,
                      com_name VARCHAR(15) NULL,
                      year VARCHAR(15) NULL,
                      service_id VARCHAR(15) NULL,
                      PRIMARY KEY (id))";
  $q["two"] = "INSERT INTO school (SCHUL_NM, SD_SCHUL_CODE, service_id, year)
                        VALUES ('$SCHUL_NM', '$SD_SCHUL_CODE', '$table_name', '$data[year]')";




  if (!$link = mysqli_connect("localhost", "neohum779", "min9610012@@", "neohum779")) {
    echo "Failed to connect to MySQL: ", mysqli_connect_error();
  } elseif (mysqli_multi_query($link, implode(';', $q))) {
    do {
      $q_key = key($q);                                 // current query's key name (Orders or Inventory)
      if ($result = mysqli_store_result($link)) {       // if a result set... SELECTs do
        while ($row = mysqli_fetch_assoc($result)) {  // if one or more rows, iterate all
          $rows[$q_key][] = $row;
        }
        mysqli_free_result($result);
        echo "<div><pre>" . var_export($rows[$q_key], true) . "</pre></div>";
      }
    } while (next($q) && mysqli_more_results($link) && mysqli_next_result($link));
  }
  if ($mysqli_error = mysqli_error($link)) {                // check & declare variable in same step to avoid duplicate func call
    echo "<div style=\"color:red;\">Query Key = ", key($q), ", Query = ", current($q), ", Syntax Error = $mysqli_error</div>";
  } 

}





                          
$data['SCHUL_NM']       = $SCHUL_NM;                          
$data['SD_SCHUL_CODE']  = $SD_SCHUL_CODE;   



echo $twig->render('check_edit.html', $data);               // Redirect to their page                                                 // Stop code running            