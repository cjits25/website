<?php
$pageTitle = "Dashboard";
require_once 'frontend/header.php';
require_once 'frontend/auth.php';
require_once 'frontend/config.php';

redirectIfNotLoggedIn();
?>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Your Account Information</h5>
                
                <?php
                $stmt = $conn->prepare("SELECT username, email, created_at FROM users WHERE id = ?");
                $stmt->bind_param("i", $_SESSION['user_id']);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();
                $stmt->close();
                ?>
                
                <ul class="list-group mb-3">
                    <li class="list-group-item">
                        <strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Member Since:</strong> <?php echo date('F j, Y', strtotime($user['created_at'])); ?>
                    </li>
                </ul>
                
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>