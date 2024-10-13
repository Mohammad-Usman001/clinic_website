
<?php
include 'layout_dashboard.php';
?>
    <div id="content" class="content">
        <div class="container-fluid">
            <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
            <!-- Add more dashboard content here -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Activity</h5>
                            <p class="card-text">Here you can display recent user activities or notifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quick Stats</h5>
                            <p class="card-text">Display some quick statistics or important numbers here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php
require_once 'layout_footer.php';
?>
