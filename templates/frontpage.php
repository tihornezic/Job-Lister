<?php include 'inc/header.php'; ?>


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <!-- <h1 class="display-3"><?php echo SITE_TITLE ?></h1> -->
            <h1 class="display-3">Find a Job</h1>
            <form action="">
                <select name="category" class="form-control">
                    <option value="0">Choose a Category</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->

        <?php foreach ($jobs as $job) : ?>
            <div class="row">
                <div class="col-md-10">
                    <h3><?php echo $job->job_title; ?></h3>
                    <p><?php echo $job->description; ?></p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
            <br><br>
        <?php endforeach; ?>

        <hr>

        <?php include 'inc/footer.php'; ?>