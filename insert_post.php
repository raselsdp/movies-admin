<?php
if (!defined('app_dir')) {
    echo 'No access';
    exit();
}

global $conn;

$supput = ['jpg', 'png', 'webp', 'jpeg'];

if (isset($_FILES['img'])) {
    $name = $_FILES['img']['name'];
    $tam_dir = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];

    $ext_arry = explode('.', $name);
    $ext = end($ext_arry);

    if (in_array($ext, $supput) == false) {
        echo 'only Js support';
        exit();
    }

    $new_dir = 'des/img/'.$name;
    if (file_exists($new_dir)) {
        $new_dir = 'des/img/copy-'.$name;
        echo'Image Olredey ';
    }
    move_uploaded_file($tam_dir, $new_dir);
}

$title = isset($_POST['title']) && !empty($_POST['title']) ? mysqli_escape_string($conn, $_POST['title']) : '';
$content = isset($_POST['content']) && !empty($_POST['content']) ? mysqli_escape_string($conn, $_POST['content']) : '';
$category = isset($_POST['category']) && !empty($_POST['category']) ? mysqli_escape_string($conn, $_POST['category']) : '';

// $img= isset($_POST['image']) && !empty($_POST['image']) ? mysqli_escape_string($conn,$_POST['image']) : '';

$slug = make_slug($title); // Make sure make_slug function is defined

$user_id = $_SESSION['user_data']['id'];

$sql = "INSERT INTO `post_data`(`title`,`content`, `slug`,`author`,`img`,`post_category`)
    VALUES('$title','$content','$slug','$user_id','$new_dir','$category')";
$result = mysqli_query($conn, $sql);

// Perform error handling here if needed

header('Location: /admin/allpost');
exit();
?>
