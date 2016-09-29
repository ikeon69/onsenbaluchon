<?php
	

	/*ma classe Model dans lequel j aurais mes requetes de vidéos*/
	class Video_model extends CI_Model{

	/******************************************PAGINATION sans ajax VIDEO front***************************************************/
/**************************************************************************************************************/

		/*fonction qui me permet de paginer mes videos sur le front*/
		public function videopaginerfront($limit, $offset){


				//$query= $this->db->query('SELECT *,DATE_FORMAT(date_created, "le %d/%m/%Y") AS videocreate, date_created AS datecree, video.synopsis ,video.views,
										//video.id, video.title AS videotitle, video.id AS vid, video.duree
										// FROM video 
										// LIMIT '.$offset.','.$limit.'');

				$query = $this->db->query('SELECT DATE_FORMAT(video.date_created, "le %d/%m/%Y") AS videocreate, 
				video.date_created AS date_created,
				video.categories_id AS categories_id,
				video.image AS image,
				video.id AS id, 
				video.title AS title, 
				video.synopsis AS synopsis,
				video.trailer AS trailer, 
				video.cover AS cover, 
				video.date_updated AS date_updated, 
				video.views AS views, 
				video.duree AS duree, 
				categories.title AS cat_title,
				categories.slug AS cat_slug
				FROM video 
				INNER JOIN categories
				ON video.categories_id = categories.id
				ORDER BY date_created DESC
				LIMIT '.$offset.','.$limit.'');

				return $query->result(); //retourne une liste de video

			}

			/*fonction qui me permet de compter le nombre de ligne de video soit le nbre total de videos*/
			public function count_items_front(){

					$query= $this->db->query('SELECT * FROM video');

					return $query->num_rows(); //retourne le comptage de video

			}




			
			//ajax pagination//
			   function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->join('categories','video.categories_id = categories.id','inner');
        $this->db->order_by('video.date_created','desc');
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }



}





?>
