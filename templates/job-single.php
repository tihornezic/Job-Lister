<?php include 'inc/header.php'; ?>
<br>
<br>
<br>
<main role="main">
    <div class="container">
        <div clas="row">
            <div class="col-md-10">
                <h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
                <small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date ?></small>
                <hr>
                <p class="lead description-font-size"><?php echo $job->description ?></p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Company: </strong><?php echo $job->company; ?></li>
                    <li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary; ?></li>
                    <li class="list-group-item"><strong>Contact E-mail: </strong><?php echo $job->contact_email; ?></li>
                </ul>
                <br><br>
                <a href="index.php">&laquo; Back</a>
                <br><br>
            </div>
        </div>
        <?php include 'inc/footer.php'; ?>