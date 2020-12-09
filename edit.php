<?php

include_once 'config/init.php';
$job = new Job;

// if there is an id in the url, set this variable to it, if not then null
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

// checking if new job list has been submitted
if(isset($_POST['submit'])) {
    // grab all the data from the form and put it into an array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_email'] =  $_POST['contact_email'];
    $data['contact_user'] =  $_POST['contact_user'];

    if($job->update($job_id, $data)){
        redirect('index.php', 'Your job has been updated!', 'success');
    } else {
        redirect('index.php', ' Something went wrong!', 'error');
    }
}

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id);
// categories dropdown
$template->categories = $job->getCategories();

echo $template



?>