<?php
header('Access-Control-Allow-Origin: *');
require_once('./connect.class.php');
require_once('./users.class.php');
require_once('./posts.class.php');
require_once('./comments.class.php');


switch($_GET['api']) {
    case 'users':
        $users = new users();   
        echo json_encode($users->data);    
        break;
    case 'posts':
        $posts = new posts();
        echo json_encode($posts->data);    
        break;
    case 'comments':
        $comments = new comments();
        echo json_encode($comments->data);    
        break;
    default: break;
}


/* $users = new users();
echo json_encode($users->data); */

/* $comments = new comments();
echo json_encode($comments->data); */

/* $posts = new posts();
echo json_encode($posts->data); */

?>