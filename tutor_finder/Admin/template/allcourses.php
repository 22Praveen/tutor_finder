

<?php 

include 'sidebar.php'; 

include '../../vendor/autoload.php';
// MongoDB connection
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");
$courses = $mongoClient->tunetutor->coursedetails->find();

?>
<div class="main-panel">
    <div class="content-wrapper" style="background-color:white;">
        
        <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Courses List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Course Title</th>
                                        <th>Instrument</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($courses as $course): ?>
                                    <tr>
                                        <td><?php echo $course['_id']; ?></td>
                                        <td><?php echo $course['c_title']; ?></td>
                                        <td><?php echo $course['instrument']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>