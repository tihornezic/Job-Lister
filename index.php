<?php

include_once 'config/init.php';
$job = new Job;

$template = new Template('templates/frontpage.php');

// if there is a category in the url, set this variable to it, if not then null
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    // 
    $template->title = 'Jobs in ' . $job->getCategory($category)->name;
    // for displaying selected jobs by category
    $template->jobs = $job->getByCategory($category);
} else {
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}

// categories dropdown
$template->categories = $job->getCategories();

echo $template



?>