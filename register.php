
<?php 

include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['SignUp'])){
    $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $Password = isset($_POST['password']) ? $_POST['password'] : '';
    $PasswordHash = md5($Password);

    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $Email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if($result->num_rows > 0){
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = $conn->prepare("INSERT INTO users (Name, email, password) VALUES (?, ?, ?)");
        $insertQuery->bind_param("sss", $Name, $Email, $PasswordHash);
        if($insertQuery->execute()){
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['SignIn'])){
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $Password = isset($_POST['password']) ? $_POST['password'] : '';
    $PasswordHash = md5($Password);

    $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $Email, $PasswordHash);
    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
