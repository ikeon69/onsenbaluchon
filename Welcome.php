<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		/*on cree une fonction pour pouvoir stocker les infos des requetes
		on envoire le resultat des requetes dans le transporteur $data*/
			/*on cree une fonction pour pouvoir stocker les infos des requetes
		on envoire le resultat des requetes dans le transporteur $data*/

		/************************************************************************/
		/*					recuperation utilisateur										*/
		/**************************************************************************/
		//je recupere en session l utilisateur
		$user = $this->session->userdata('user');

		//si mon utilisateur est en session 
		if(empty($user)){

			redirect('welcome/login');
		}


		/**************************************************************************/


		/*video_model*/
		$data['videosaffiche'] = $this->video_model->videosaffiche();

		$data['statvideos'] = $this->video_model->statvideos();

		$data['videoaleatoire'] = $this->video_model->videoaleatoire();

		/*categorie_model*/
		$data['statcategories'] = $this->categorie_model->statcategories();


		/*equipe_model*/
		$data['statequipes'] = $this->equipe_model->statequipes();


		// Ordre de charger la vue welcome message//	
		$this->load->view('welcome_message',$data);/*ne pas oublier de mettre data*/
	
	}


	public function homepage(){
		
		// Récupère la liste des catégories//
		$data['categories'] = $this->categorie_model->allCategories();

		// Récupère la liste des vidéos//
		$data['videos'] = $this->video_model->allVideosFront();


		// Récupère la liste des équipes//
		$data['equipes'] = $this->equipe_model->allEquipesFront();	

		// Récupère la liste des commentaires//
		$data['comments'] = $this->comments_model->allCommentsFront();	
		//récupère la dernière vidéo mise en ligne//
		$data['dernierevideo'] = $this->video_model->derniereVideo();	


		//charge la vue index//
		$this->load->view('Frontend/index', $data);
	}


		//on crée une fonction login pour creer une session de connexion on commence par créeer cette fonction ds le
		//controller welcome qui est la page d accueuil, on crée les regles de validation et les messages de validation
		//ds le controller welcome on ne crée pas de controller login//

		public function login(){

			//validation des champs du formulaire de login, minimum 2 caractères
			$this->form_validation->set_rules('username','username','required');
			//validation des champs du formulaire de mot de passe, minimum 6 caractères
			$this->form_validation->set_rules('password','password','required');


			//message de validation pour le login
			$this->form_validation->set_message('required','le %s doit etre de minimum 2 caractères');
			//message de validation pour le login
			$this->form_validation->set_message('required','le %s doit etre de minimum 6 caractères');


				//si mon formulaire contient des erreurs//
				//action pour fairre l upload de mon fichier image et verification si mon fichier est incorrect//
				if ($this->form_validation->run() == FALSE){//va verifier ds mes champs les lois de validation//
						
							$this->load->view('login');

				}
				else {//quand mon formulaire est valide
						//je recupere l utilisateur grace a ma requete stocker ds le model user_model
						$user = $this->user_model->recupereUser();

						//si il ya bien un utilisateur en base de données
						if(!empty($user)){
							
/*****************************************************************************************************************************************************************/
							$this->user_model->updateLastLogin($user->id);//on place cette ligne ici pour mettre a jour le lastlogin avant la mise en session//
/******************************************************************************************************************************************************************/

							//ecris en session mon utilisateur 
							$this->session->set_userdata(array('user'=>$user));

							//j ecris un message flashs pour dire bonjour à mon utilisateur 
							$this->session->set_flashdata('success','<div class="alert alert-success"> bonjour' .$user->username.',vous êtes bien connecté</div>');
							

							redirect('welcome/index');
						}
						else{
							$data['error'] = "Mauvais login/Mauvais mot de passe. veillez recommencer.";
							$this->load->view('login',$data);

						}

						
			

					}


				}

/**********************************************************************************************/
/*									fonction deconnexion													*/
/***********************************************************************************************/
	public function logout(){

			$this->session->unset_userdata('user');//je detruis mon utilisateur

			$this->session->sess_destroy;//je detruis ma session

			redirect('welcome/login');
	}


/************************************************************************************************************************/
}


?>