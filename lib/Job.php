<?php

class Job {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // get all jobs
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname
                        FROM jobs 
                        INNER JOIN categories 
                        ON jobs.category_id = categories.id 
                        ORDER BY post_date DESC
                        ");

        // assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    // get categories
    public function getCategories(){
        $this->db->query("SELECT * FROM categories");

        // assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    // get jobs by category
    public function getByCategory($category){
        $this->db->query("SELECT jobs.*, categories.name AS cname
                        FROM jobs 
                        INNER JOIN categories 
                        ON jobs.category_id = categories.id 
                        WHERE jobs.category_id = $category
                        ORDER BY post_date DESC
                        ");

        $results = $this->db->resultSet();

        return $results;
    }

}

?>