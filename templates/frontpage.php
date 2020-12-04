<?php include 'inc/header.php'; ?>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Find a Job</h1>
            <form action="index.php" method="GET">
                <select name="category" class="form-control">
                    <option value="0">Choose a Category</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success custom-btn-width" value="Find">
            </form>
        </div>
    </div>

    <div class="container">
        <h3><?php echo $title ?></h3>
        <br>
        <?php foreach ($jobs as $job) : ?>
            <div class="row">
                <div class="col-md-10">
                    <h5><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h5>
                    <p><?php echo $job->description; ?></p>
                    <p class="cname"><?php echo $job->cname; ?></p>
                    <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details &raquo;</a></p>
                </div>
            </div>
            <br><br>
        <?php endforeach; ?>

        <hr>

        <?php include 'inc/footer.php'; ?>