<?php
	

	/*ma classe Model dans lequel j aurais mes requetes de vidéos*/
	class Video_model extends CI_Model{

	
/**********************************************************************************************/
/*									ALLVIDEO												*/
/***********************************************************************************************/



		/*fonction qui me retourne toute mes vidéos*/
		public function allVideos(){
			$query= $this->db->query ('SELECT DATE_FORMAT(video.date_created, "le %d/%m/%Y") AS videocreate, date_created AS datecree, video.synopsis ,video.views,
										video.id, video.title AS videotitle, video.id AS vid, video.duree, image
										 FROM video');

			return $query->result();
			//me retourne la liste de mes videos//


		}

	



	/**********************************************************************************************/

/**********************************************************************************************/
/*									VIDEO AFFICHE 												*/
/***********************************************************************************************/



		/*fonction qui me retourne toutes mes vidéos*/
		public function Videosaffiche(){

			$query= $this->db->query ('SELECT *,DATE_FORMAT(video.date_created, "le %d/%m/%Y") AS date_created
										FROM video
										ORDER BY date_created = "DESC"
										LIMIT 5');

			return $query->result();
			//me retourne la liste de mes videos a l affiche//


		}


/**********************************************************************************************/
/**********************************************************************************************/
/*								video ALEATOIRE													*/
/***********************************************************************************************/



		/*on cree les requetes avec une fonction, et on y retourne le resultat 
		au controler*/

		/*fonction qui me retourne retourne un film aleatoire*/
		public function videoaleatoire(){

			$query = $this->db->query("SELECT id,title,synopsis,trailer,duree,DATE_FORMAT(video.date_created, 'le %d/%m/%Y à %H : %i: %s') AS datecree
										FROM video
										ORDER BY RAND()
										LIMIT 1
								
								");

			return $query->result();
		}

/***********************************************************************************************/

/**********************************************************************************************/
/*									STAT VIDEOS												*/
/***********************************************************************************************/



		/*fonction qui me retourne toutes mes vidéos*/
		public function Statvideos(){

			$query= $this->db->query ("SELECT COUNT(id) AS nb1
										FROM video
										
										");

			return $query->row();
			//me retourne la liste de mes videos a l affiche//


		}


/**********************************************************************************************/

/*							FOnction supprimer video sur page liste													*/
/***********************************************************************************************/


	function supprimervideopageliste($vid){//on cree la fonction pour supprimer la video
		//selectionner avec son id renommer $vid//

		//lorsque l id = $ id//	//si on oublie le where on supprime toutes les videos//	
		$this->db->where('id',$vid);
		$this->db->delete('video');
		//suppression de la video selectionnee avec l id renommer vid ici ds la table videos//

	}


/**********************************************************************************************/
/*									FOnction activer													*/
/***********************************************************************************************/

	function coveron($id){

			$data = array( cover=>1);


		//lorsque l id = $ id//	//si on oublie le where on active tous les films//	
		$this->db->where('id',$id);
		$this->db->update('video',$data);
		//activation du film selectionner avec l id//

	}
/**********************************************************************************************/
/*									FOnction desactiver													*/
/***********************************************************************************************/

	function coveroff($id){

		$data = array(cover=> 0);

		//lorsque l id = $ id//	//si on oublie le where on active tous les films//	
		$this->db->where('id',$id);
		$this->db->update('video',$data);
		//activation du film selectionner avec l id//

	}

/**********************************************************************************************/
/*								FONCTION VOIR													*/
/***********************************************************************************************/
	

		/*fonction voir 
		@return mixed */
		function voir($id){
			//on a aussi une fonction voir qui relie le controler au model//
			//le controler recupere l id grace a la fonction voir
			$query = $this->db->query('SELECT DATE_FORMAT(video.date_created, "le %d/%m/%Y") AS videocreate, 
				video.date_created,
				video.categories_id AS categories_id, video.image AS image,
				video.id AS id, 
				video.title AS title, 
				video.synopsis AS synopsis,
				video.trailer AS trailer, 
				video.cover AS cover, 
				video.date_updated AS date_updated, 
				video.views AS views, 
				video.duree AS duree, 
				categories.title AS cat_title
				 						FROM video 
				 						INNER JOIN categories
				 						ON video.categories_id = categories.id
				 						WHERE video.id = ' .$id);
			//select * FROM video WHERE id
			return $query->row();//cela nous retourne un seul résultat avec toute les infos de nos videos//


		}

/***********************************************************************************************/
/***********************************************************************************************/



/**********************************************************************************************/
/*								inserer	UN FORMULAIRE											*/
/***********************************************************************************************/


//je prepare un tableau de donné avec les clefs qui sont mes champs de tables//
public function inserer($data){



	$data = array(	//$this->input->post me permet de récupérer mes valeurs du champ 'title' en post
					'title'=> $this->input->post('title'),

					'date_created'=> date('Y-m-d H:i:s'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'cover'=> $this->input->post('cover'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'synopsis'=> $this->input->post('synopsis'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'trailer'=> $this->input->post('trailer'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'duree'=> $this->input->post('duree'),
						//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'categories_id'=> $this->input->post('categorie'),

					'image' => base_url().'uploads/video/'.$data['file_name']
				);
		


	$this->db->insert('video',$data);//on insert une video ds la table video//
}



/***********************************************************************************************/
/***********************************************************************************************/



/***********************************************************************************************/

//je prepare un tableau de donné avec les clefs qui sont mes champs de tables//
public function editer($id,$image){//on appelle l id et le transporteur data 
//pour editer on appelle et l id que l on recupere et le data qui transporte l id//


	$data = array(	//$this->input->post me permet de récupérer mes valeurs du champ 'title' en post
					'title'=> $this->input->post('title'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'title' en post
					'categories_id'=> $this->input->post('categorie'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'title' en post
					'date_updated' => date('Y-m-d H:i:s'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'cover'=> $this->input->post('cover'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'synopsis'=> $this->input->post('synopsis'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'trailer'=> $this->input->post('trailer'),
					//$this->input->post me permet de récupérer mes valeurs du champ 'description' en post
					'duree'=> $this->input->post('duree'),

					'image' => base_url().'uploads/video/'.$image['file_name']

					);

					if(empty($image['file_name'])){//si mon fichier est vide
			
					unset($data['image']);//je retire l image de mon transporteur $data

				}

	//si on oublie le where on met a jour tous les films//				
	$this->db->where('id',$id);
	//base de donnee l id est egale a $id
	$this->db->update('video',$data);
	//mise a jour ds la tables vidéo d une vidéo 


}

/****************************************************************************************************************************/
/**   											PAGINATION   																*/
/****************************************************************************************************************************/


			function filmpaginer($limit, $offset){


				$query= $this->db->query('SELECT *,DATE_FORMAT(date_created, "le %d/%m/%Y") AS videocreate, date_created AS datecree, video.synopsis ,video.views,
										video.id, video.title AS videotitle, video.id AS vid, video.duree
										 FROM video 
										 LIMIT '.$offset.','.$limit.'');

				return $query->result(); //retourne une liste de video

			}


			function count_items(){

					$query= $this->db->query('SELECT * FROM video');

					return $query->num_rows(); //retourne le comptage de video

			}

/***********************************************************************************************/
/************************************FRONTEND VIDEO***********************************************/


	public function allVideosFront(){
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
				ORDER BY date_created
				DESC');
				 						
			//select * FROM video WHERE id
			return $query->result();//cela nous retourne un seul résultat avec toute les infos de nos videos//

		}




		public function derniereVideo() {

			$query = $this->db->query('SELECT trailer
				FROM video 
				ORDER BY date_created DESC
				LIMIT 1
				');
				 						
			//select * FROM video WHERE id
			return $query->row();//cela nous retourne un seul résultat avec toute les infos de nos videos//



		}

/******************************************PAGINATION VIDEO front***************************************************/
/**************************************************************************************************************/

		
			function videopaginerfront($limit, $offset){


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
				ORDER BY date_created
				DESC
				LIMIT '.$offset.','.$limit.'');

				return $query->result(); //retourne une liste de video

			}


			function count_items_front(){

					$query= $this->db->query('SELECT * FROM video');

					return $query->num_rows(); //retourne le comptage de video

			}


}





?>