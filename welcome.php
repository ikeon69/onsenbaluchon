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


	function __construct() {
        parent::__construct();
        $this->load->model('video_model');
        $this->load->library('Ajax_pagination');
        $this->perPage = 12;
    }

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
		$data['Videos'] = $this->video_model->allVideosFront();

		// Récupère la liste des équipes//
		$data['equipes'] = $this->equipe_model->allEquipesFront();	

		// Récupère la liste des commentaires//
		$data['comments'] = $this->comments_model->allCommentsFront();	

		//récupère la dernière vidéo mise en ligne//
		$data['dernierevideo'] = $this->video_model->derniereVideo();	


	
		/***********************************************************************************************/
/*********************************pagination video front sans ajax****************************************/
			

				/*fonction videopaginer qui va paginer mes videos pour le front*/

			/*file_put_contents('coucou.txt', 'videopaginer', FILE_APPEND);

			//paramètre pagination//
			$config['base_url'] = base_url().'index.php/welcome/homepage'; //url que va prendre ma pagination, index.php/controller/fonction
			$config['first_url'] = '1';//ma premiere pagination qui commencera a 1
			$config['total_rows'] = $this->db->get('video')->num_rows();//$this->video_model->count_items_front();//nombre de total de video que l on aura 
			
			//file_put_contents('coucou.txt', $this->video_model->count_items_front(), FILE_APPEND);

			$config['per_page'] = 12;//nombre de resulta par page//
			$config['num_links'] = '1';//numerotation des liens //
			$config['use_page_numbers'] = TRUE; //utiliser la syntaxe ds pages 1,2,3,4

			//intégration des class de pagination pour bootstrap//
			$config['next_link'] = 'Page suivante';
			$config['prev_link'] =  'Page précédente';
			$config['last_link'] = 'Fin';
			$config['first_link'] = 'Début';
			$config['full_tag_open'] = "<ul class='pagination pagination-sm pagination-centered'>";
			$config['full_tag_close'] =  "</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] =  "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li></li>";
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
			//charge la vue index//*/ 

		
		//charge la vue index//
		/*$this->load->view('Frontend/index', $data);*/

		//pagination avec ajax//
		 $data = array();
        
        //total rows count
        $totalRec = count($this->video_model->getRows());
        
        //pagination configuration
        $config['target']      = '#portfoliolist';
        $config['base_url']    = base_url().'index.php/welcome/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['allVideosFront'] = $this->video_model->getRows(array('limit'=>$this->perPage));
        
        //load the view
        $this->load->view('Frontend/index', $data);

	}

			
		function ajaxPaginationData(){
        $page = $this->input->video_model('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->video_model->getRows());
        
        //pagination configuration
        $config['target']      = '#portfoliolist';
        $config['base_url']    = base_url().'index.php/welcome/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['allVideosFront'] = $this->video_model->getRows(array('start'=>$offset,'limit'=>$this->perPage));
        
        //load the view
        $this->load->view('Frontend/ajax-pagination-data', $data, false);

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
/*									fonction deconnexion										*/
/***********************************************************************************************/
	public function logout(){

			$this->session->unset_userdata('user');//je detruis mon utilisateur

			$this->session->sess_destroy;//je detruis ma session

			redirect('welcome/login');
	}


/************************************************************************************************************************/















}


?>
