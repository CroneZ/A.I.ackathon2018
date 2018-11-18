 <?php
	class Job{
		private $db;

		public function __construct(){
      $this->db = new Database;
    }

    // Get All Jobs
    public function getAllJobs(){
      $this->db->query("SELECT crime.*, categories.VehicleType AS cname 
            FROM crime 
            INNER JOIN categories
            ON crime.Category_ID = categories.id 
            ORDER BY post_date DESC 
            ");
      // Assign Result Set
      $results = $this->db->resultSet();

      return $results;
    }

    // Get Categories
    public function getCategories(){
      $this->db->query("SELECT * FROM categories");
      // Assign Result Set
      $results = $this->db->resultSet();

      return $results;
    }

    // Get Jobs By Category
    public function getByCategory($category){
      $this->db->query("SELECT crime.*, categories.VehicleType AS cname 
            FROM crime 
            INNER JOIN categories
            ON crime.Category_ID = categories.id 
            WHERE crime.category_id = $category
            ORDER BY post_date DESC 
            ");
      // Assign Result Set
      $results = $this->db->resultSet();

      return $results;
    }

    // Get category
    public function getCategory($category_id){
      $this->db->query("SELECT * FROM categories WHERE id = :category_id");

      $this->db->bind(':Category_ID', $category_id);

      // Assign Row
      $row = $this->db->single();

      return $row;
    }

    // Get Job
    public function getJob($id){
      $this->db->query("SELECT * FROM crime WHERE ID = :ID");

      $this->db->bind(':ID', $id);

      // Assign Row
      $row = $this->db->single();

      return $row;
    }

    // Create Job
    public function create($data){
      //Insert Query
      $this->db->query("INSERT INTO crime ( Vehicle_NoPlate, Vehicle_Model, Vehicle_Paint, Category_ID )
      VALUES (:Vehicle_NoPlate, :Vehicle_Model, :Vehicle_Paint, :Category_ID)");
      // Bind Data
 
      $this->db->bind(':Vehicle_NoPlate', $data['Vehicle_NoPlate']);
      $this->db->bind(':Vehicle_Model', $data['Vehicle_Model']);
      $this->db->bind(':Vehicle_Paint', $data['Vehicle_Paint']);
      $this->db->bind(':category_id', $data['category_id']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    
	}
