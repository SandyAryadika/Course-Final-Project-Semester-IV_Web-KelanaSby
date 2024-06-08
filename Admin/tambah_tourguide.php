<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}

include 'connectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $language = $_POST['language'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];

    $sql = "INSERT INTO tourguide (name, gender, age, experience, language, rating, price) 
            VALUES ('$name', '$gender', '$age', '$experience', '$language', '$rating', '$price')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: tourguide.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<?php include("adminHeader.php")?>
<main>
    <h1>Add New Tour Guide</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        
        <label for="experience">Experience (Years):</label>
        <input type="number" id="experience" name="experience" required><br>
        
        <label for="language">Language:</label>
        <input type="text" id="language" name="language" required><br>
        
        <label for="rating">Rating:</label>
        <input type="number" step="0.01" id="rating" name="rating" required><br>
        
        <label for="price">Price (per day):</label>
        <input type="number" step="0.01" id="price" name="price" required><br>
        
        <button type="submit">Add Tour Guide</button>
    </form>
</main>
<?php include("adminFooter.php")?>