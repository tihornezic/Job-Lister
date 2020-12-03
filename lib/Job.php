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

    // get category
    public function getCategory($category_id){
        // :category_id is a placeholder
        // we have to bind the value
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");

        $this->db->bind(':category_id', $category_id);

        // assign row
        $row = $this->db->single();

        return $row;
    }



    // get job
    public function getJob($id) {
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(':id', $id);

        // assign row
        $row = $this->db->single();

        return $row;
    }

}
