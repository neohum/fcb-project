<?php 
declare(strict_types = 1);
$data              = [];
$con;

try {

//추가되는 테이블의 경우 앞쪽에 위치하도록하면, 기존 테이블은 생성되지 않는다.
  $sql = "
        CREATE TABLE user (
        id INT(255) NOT NULL AUTO_INCREMENT,
        userid VARCHAR(15) NULL UNIQUE,
        password TEXT NULL,
        classname INT(255) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id));";

  $sql .= "
        CREATE TABLE subject (
        id INT(255) NOT NULL AUTO_INCREMENT,
        subjectname VARCHAR(255) NULL,
        studentnumber VARCHAR(15) NULL,
        subjectnumber VARCHAR(15) NULL,
        classname INT(255) NULL,
        score VARCHAR(15) NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id));";
  $sql .= "
        CREATE TABLE student (
        id INT(255) NOT NULL AUTO_INCREMENT,
        classname VARCHAR(255) NULL,
        subjectname TEXT NULL,
        studentnumber VARCHAR(15) NULL,
        studentname TEXT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id));";

  $con = mysqli_connect("localhost", "neohum801", "min9610012@@", "neohum801");
  if( mysqli_multi_query($con, $sql) ){
  do {
    // store first result set
    if ($result = mysqli_store_result($con)) {
      // fetch one and one row
      while ($row = mysqli_fetch_row($result)) {
     	//printf("%s\n",$row[0]);
      }

      // free result set
      mysqli_free_result($result);
    }
  } while (mysqli_more_results($con) && mysqli_next_result($con));
}

  mysqli_close($con);


} catch (Exception $e) {
  $data['errors'] = $e->getMessage();
}



echo $twig->render('auto_install_table.html', $data);