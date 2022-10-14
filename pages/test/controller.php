<?php

class Test extends Controller{

    public function __construct()
    {
        parent::__construct();
    }


    public function add_members(){

        echo "test";

        $data = [
                "fname" => "test",
                "lname" => "test",
                "username" => "test",
                "password" => "test",
                "remarks" => "test"

        ];

        $table = "members";

        $this->model->db->insert($table, $data);
      
        

    }



    public function hello()
	{
		echo "hello world!";
	}



}