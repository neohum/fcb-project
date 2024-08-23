<?php
declare(strict_types = 1);                                           // Use strict types
//$data['articles']    = $cms->getArticle()->getAll(true, null, null, 6); // Get latest article summaries
$data = [];//$data['navigation']  = $cms->getCategory()->getAll();         // Get categories
$member['studentnumber'] = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {                          // If form is submitted
    if (empty($_POST['classname']) || empty($_POST['studentname'])) {     // If user id or password is empty
        $data['errors'] = '클래스 번호와 이름을 입력하세요.';        // Set error message
        echo "<script>alert('클래스 번호와 이름을 입력하세요.);</script>"; // Alert user
        redirect('/');                                       // Redirect to admin page
        exit();                                                     // Exit
                             // Create session
       // Get password
                                            // Redirect to dashboard
    } else {                                                        // If user id and password do not match
        if ($cms->getFcb()->login((int)$_POST['classname'],$_POST['studentname'] ) == true)
        {
            $member['studentname'] = $_POST['studentname'];
            $member['classname'] = $_POST['classname'];// G
            $member['studentnumber'] = $_POST['studentnumber'];
     
          
            $cms->getSession()->createStudent($member);// Create session
            redirect('s-dashboard');
        } else {
            $data['errors'] = '클래스 번호와 이름이 일치하지 않습니다.'; // Set error message
            echo "<script>alert('클래스 번호와 이름이 일치하지 않습니다.');</script>"; // Alert user
            redirect('/');                                   // Redirect to admin page
            exit();                                                 // Exit
      }                                       // Redirect to admin page
    }
}
                                     // Check if user is logged in


echo $twig->render('index.html', $data);                             // Render Twig template