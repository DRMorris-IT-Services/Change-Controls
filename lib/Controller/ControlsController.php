<?php
 namespace OCA\ChangeControls\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Http\TemplateResponse;
 use OCP\AppFramework\Http\DataResponse;
 use OCP\AppFramework\Controller;

 class ControlsController extends Controller {

    public function __construct($AppName, IRequest $request, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
	}


     /**
      * @NoAdminRequired
	  * @NoCSRFRequired
      */
     public function index() {
         // empty for now
		 return new TemplateResponse('changecontrols', 'index');  // templates/index.php
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
     public function show(int $id) {
         // empty for now
     }

	  /**
      * @NoAdminRequired
	  * @NoCSRFRequired
      */
	 public function new(){
		return new TemplateResponse('changecontrols', 'new_change');  // templates/new.php
	 }

     /**
      * @NoAdminRequired
	  * @NoCSRFRequired
      *
      * @param string $title
      * @param string $content
      */
     public function create(string $title, string $content) {
         // empty for now
		
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      * @param string $title
      * @param string $content
      */
     public function update(int $id, string $title, string $content) {
         // empty for now
     }

     /**
      * @NoAdminRequired
      *
      * @param int $id
      */
     public function destroy(int $id) {
         // empty for now
     }

 }