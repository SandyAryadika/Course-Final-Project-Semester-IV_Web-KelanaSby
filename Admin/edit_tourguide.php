<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}

include 'connectDB.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tourguide WHERE idTourGuide = $id";
$result = mysqli_query($koneksi, $sql);
$tourguide = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $language = $_POST['language'];
    $rating = $_POST['rating'];
    $price = $_POST['price'];

    $sql = "UPDATE tourguide SET 
            name = '$name', 
            gender = '$gender', 
            age = '$age', 
            experience = '$experience', 
            language = '$language', 
            rating = '$rating', 
            price = '$price'
            WHERE idTourGuide = $id";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: tourguide.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<?php include("adminHeader.php")?>
<style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 500px;
            margin: 10px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        h1 {
            text-align: center; 
            color: #333;
            font-weight: 600;
        }

        form.addTourGuide {
            display: flex;
            flex-direction: column;
        }

        form.addTourGuide label {
            margin-top: 15px;
            font-weight: 600;
            color: #555;
        }

        form.addTourGuide input,
        form.addTourGuide select,
        form.addTourGuide button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        form.addTourGuide input[type="number"]::-webkit-outer-spin-button,
        form.addTourGuide input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none; /* Remove number input arrows for Webkit */
            margin: 0;
        }

        form.addTourGuide input[type="number"] {
            -moz-appearance: textfield; /* Remove number input arrows for Firefox */
            appearance: textfield; /* Standard property to remove number input arrows */
        }

        form.addTourGuide button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        form.addTourGuide button:hover {
            background-color: #0056b3;
        }
    </style>
<main>
    <h1>Edit Tour Guide</h1>
    <form method="POST" action="" class="addTourGuide">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $tourguide['name'] ?>" required><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male" <?= $tourguide['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $tourguide['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?= $tourguide['age'] ?>" required><br>
        
        <label for="experience">Experience (Years):</label>
        <input type="number" id="experience" name="experience" value="<?= $tourguide['experience'] ?>" required><br>
        
        <label for="language">Language:</label>
        <input type="text" id="language" name="language" value="<?= $tourguide['language'] ?>" required><br>
        
        <label for="rating">Rating:</label>
        <input type="number" step="0.01" id="rating" name="rating" value="<?= $tourguide['rating'] ?>" required><br>
        
        <label for="price">Price (per day):</label>
        <input type="number" step="0.01" id="price" name="price" value="<?= $tourguide['price'] ?>" required><br>
        
        <button type="submit">Update Tour Guide</button>
    </form>
</main>
<?php include("adminFooter.php")?>