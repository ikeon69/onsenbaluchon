<?php



		/*controlleur Movie*/
		class Video extends CI_Controller {

			/*fonction lister qui va lister mes videos*/
			public function lister(){

			//paramètre pagination//	
			$config['base_url'] = base_url().'index.php/video/lister'; //url que va prendre ma pagination 
			$config['first_url'] = '1';//ma premiere pagination qui commencera a 1
			$config['total_rows'] =  $this->video_model->count_items();//nombre de total de film que l on aura 
			$config['per_page'] = 4;//nombre de resulta par page//
			$config['num_links'] = '1';//numerotation des liens //
			$config['use_page_numbers'] = TRUE; //utiliser la syntaxe ds pages 1,2,3,4

			//intégration des class de pagination pour bootstrap//
			$config['next_link'] = 'Page suivante';
			$config['prev_link'] =  'Page précédente';
			$config['last_link'] = 'Fin';
			$config['first_link'] = 'Début';
			$config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
			$config['full_tag_close'] =  "</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] =  "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = '<li>';
			$config['next_tagl_close'] =  "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = '</li>';

			$config['first_tag_open'] =  "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = '<li>';
			$config['last_tagl_close'] = '</li>';

			$this->pagination->initialize($config);


			$page = $this->uri->segment(3); //recupere le numéro de ma page
			//video/lister/2



			if(empty($page)){

				$current = 1;
				//si jarrive sur vidéo lister numero page null donc si page null prend moi la page une 
			}else{
				//sinon prend moi la page courante
				$current = $page;
			}

				//$data['allvideos'] = $this->video_model->allvideos();
				//$data['allvideos'] = $this->video_model->allvideos();

				//j appelle ma vue lister et je lui transmet mon transporteur $data//
				// ds le transporteur on stocke le resultat de la requete allvideo


				//jappel mon modele et sa fonction filmpaginer puis je fixe la limite et le début//
				$data['allvideos'] = $this->video_model->filmpaginer($config['per_page'], ($current-1) * $config['per_page']);


				$this->load->view('Video/lister',$data);
				//charge la vue de toute la liste de toutes mes videos
				//et on envoi le transporteur a la vue//

			}


/**********************************************************************************************/
/*								FONCTION VOIR												*/
/***********************************************************************************************/



			/*fonction voir qui va lister mes vidéos*/
			public function voir($id){
				//on a une fonction voir qui récupere l id de l url cliquer//
				//le transporteur data charge l id qui est = a l id//
				$data['id'] = $id;

				

				//je transmet au model mon argument $id récupérer depuis  l url
				$video = $this->video_model->voir($id);//je lui transmets au model l argument $id//

				//on charge ma variable ds le transporteur $data//
				$data['video'] = $video;



				//on charge la vue  avec le transporteur data//
				$this->load->view('Video/voir', $data);


			}

/***********************************************************************************************/



/***********************************************************************************************/

		/*action supprimer ds la page video du detail de la video */

		public function supprimervideo($vid){

			$this->video_model->supprimervideopageliste($vid);

			$this->session->set_flashdata('success', 'votre video a bien été supprimé');
			//ecriture du message flash avec session, success est ma clef de messaage et le message est ma valeur d affichage
			//le message flash a besoin de session et d etre charger ds autoload et mettre l encryption key ds application config ligne 309//

			return true;

			//on return true lorsque la confirmation est ok//


		}
/**************************************************************************************************/
/*									FONCTION ACTIVER												*/
/***************************************************************************************************/

		/*action activer*/

		public function coveron($id){

			$this->video_model->coveron($id);

			$this->session->set_flashdata('success', 'votre video a bien été mis en avant');

			redirect('video/lister');



		}

/**************************************************************************************************/
/*									FONCTION DESACTIVER												*/
/***************************************************************************************************/

		/*action activer*/

		public function coveroff($id){

			$this->video_model->coveroff($id);

			$this->session->set_flashdata('success', "votre video a bien été retirer de l'avant");

			redirect('video/lister');



		}


/**********************************************************************************************/
/*								CREER	UN FORMULAIRE											*/
/***********************************************************************************************/



			/*fonction creer qui va lister mes films*/
			public function creer(){
				//$data est mon transporteur de donnée//

						//initialisation de la configuration de l upload d image je peux restreindre le poid la taille largeur et hauteur//
				$config['upload_path'] = './uploads/video';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_heigt'] = '1960';
				$config['max_width'] = '4048';
				$config['max_size'] = '5000';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

						//validation des champs je peux poser des regles de validation//
				$this->form_validation->set_rules('title','Titre','required|max_length[50]');
				//
				$this->form_validation->set_rules('cover','couverture');
				$this->form_validation->set_rules('synopsis','Synopsis','required|min_length[10]|max_length[1000]');
				$this->form_validation->set_rules('trailer','trailer', 'required');
				$this->form_validation->set_rules('duree','duree','required');
				$this->form_validation->set_rules('categorie','categorie','required');

				//personnalisation des messages par set_message par loi de validation//
				$this->form_validation->set_message('required','le %s est obligatoire');
				$this->form_validation->set_message('min_length','le %s doit avoir un minimum de %s caractères');
				$this->form_validation->set_message('max_length','le %s doit avoir un maximum de %s caractères');

				
				$data['categories'] = $this->categorie_model->allCategories();


			//si mon formulaire contient des erreurs//
			//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//
			if ($this->form_validation->run() == FALSE){//va verifier ds mes champs les lois de validation//
				
					$this->load->view('Video/creer', $data);//si jai des erreurs il va mafficher la vue

			}else{//quand mon formulaire est valide

				//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//
				if(!$this->upload->do_upload('image')) //erreur sur l upload//


				{
					//je recupere les messages d erreur de mon fichier
					$data['error'] = $this->upload->display_errors();

					//je charge ma vue avec l erreur
					$this->load->view('Video/creer', $data);
				}else{//upload s est bien effectué et mon fichier est correct

					//recuperer le détail de mon fichier(nom, extension...)
					//$data = $this->upload->data();//pour rendre obligatoire sinon facultative on le déplace sur le haut 
					//en dessous du else// 

				//recuperer le détail de mon fichier(nom, extension...)
				$data = $this->upload->data();

				$this->video_model->inserer($data);//menregistre une nouvelle catégorie	

				redirect('video/lister');//redirection vers la video lister//
				}

			}

				//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//

		}
		


/***********************************************************************************************/
		
				/*fonction editer qui va lister mes films*/
			public function editer($id){

						//initialisation de la configuration de l upload d image je peux restreindre le poid la taille largeur et hauteur//
				$config['upload_path'] = './uploads/video';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_heigt'] = '1960';
				$config['max_width'] = '4048';
				$config['max_size'] = '5000';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
					//validation des champs je peux poser des regles de validation//
				$this->form_validation->set_rules('title','Titre','required|max_length[50]');
				//
				$this->form_validation->set_rules('cover','couverture');
				$this->form_validation->set_rules('synopsis','Synopsis','required|min_length[10]|max_length[1000]');
				$this->form_validation->set_rules('trailer','trailer', 'required');
				$this->form_validation->set_rules('duree','duree','required');
				$this->form_validation->set_rules('categorie','categorie','required');

				//personnalisation des messages par set_message par loi de validation//
				$this->form_validation->set_message('required','le %s est obligatoire');
				$this->form_validation->set_message('min_length','le %s doit avoir un minimum de %s caractères');
				$this->form_validation->set_message('max_length','le %s doit avoir un maximum de %s caractères');
			

			//charger la categorie, on cree une variable pour recuperer l id et les infos de voir ds le model 
			$editvideo = $this->video_model->voir($id);

			$data['categories'] = $this->categorie_model->allCategories();

			$data['editvideo'] = $editvideo;
			//on charge la categorie ds le transporteur data = $categorie






			//si mon formulaire contient des erreurs//
			//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//
			if ($this->form_validation->run() == FALSE){//va verifier ds mes champs les lois de validation//

					$this->load->view('Video/editer',$data); //si jai des erreurs il va mafficher la vue

			}else{//quand mon formulaire est valide

					//recuperer le détail de mon fichier(nom, extension...)
					$data = $this->upload->data();

				//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//
				if(!$this->upload->do_upload('image') && !empty($data['file_name']))//erreur sur l upload
				{
					//je recupere les messages d erreur de mon fichier
					$data['error'] = $this->upload->display_errors();

					//je charge ma vue avec l erreur
					$this->load->view('Video/editer', $data);
				}else{//upload s est bien effectué et mon fichier est correct

					//recuperer le détail de mon fichier(nom, extension...)
					$data = $this->upload->data();

				
				$this->video_model->editer($id,$data);//modifier une vidéo, on appelle l id de la
				//categorie et son transporteur //	

				redirect('video/lister','refresh');//redirection vers la vidéo lister
				//on la vue est rafraichie//

				}

			}




		

	}

/**********************************************************************************************/
/*********************************pagination video front****************************************/

				/*fonction lister qui va lister mes videos*/
			public function videopaginer(){

			//paramètre pagination//
			$config['base_url'] = base_url().'Video/videopaginer'; //url que va prendre ma pagination, index.php/controller/fonction
			$config['first_url'] = '1';//ma premiere pagination qui commencera a 1
			$config['total_rows'] =  $this->video_model->count_items_front();//nombre de total de video que l on aura 
			$config['per_page'] = 6;//nombre de resulta par page//
			$config['num_links'] = '1';//numerotation des liens //
			$config['use_page_numbers'] = TRUE; //utiliser la syntaxe ds pages 1,2,3,4

			//intégration des class de pagination pour bootstrap//
			$config['next_link'] = 'Page suivante';
			$config['prev_link'] =  'Page précédente';
			$config['last_link'] = 'Fin';
			$config['first_link'] = 'Début';
			$config['full_tag_open'] = "<div class='pagination pagination-small pagination-centered'><ul>";
			$config['full_tag_close'] =  "</ul></div>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] =  "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = '<li>';
			$config['next_tagl_close'] =  "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = '</li>';
			$config['first_tag_open'] =  "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = '<li>';
			$config['last_tagl_close'] = '</li>';

			$this->pagination->initialize($config);


			$page = $this->uri->segment(3); //recupere le numéro de ma page
			//video/lister/2



			if(empty($page)){

				$current = 1;
				//si jarrive sur vidéo lister numero page null donc si page null prend moi la page une 
			}else{
				//sinon prend moi la page courante
				$current = $page;
			}

			
				//jappel mon modele et sa fonction videopaginer puis je fixe la limite et le début//
				$data['allVideosFront'] = $this->video_model->videopaginerfront($config['per_page'], ($current-1) * $config['per_page']);


				$this->load->view('Frontend/index',$data);
				//charge la vue de toute la liste de toutes mes videos
				//et on envoi le transporteur a la vue//

			}




}







?>