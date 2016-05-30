<?php
/**
 * Holding a instance of CAsdf to enable use of $this in subclasses and provide some helpers.
 *
 * @package AsdfCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $asf;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $asf reference.
	 */
	protected function __construct($asf=null) {
	  if(!$asf) {
	    $asf = CAsdf::Instance();
	  }
	  $this->ly       = &$asf;
    $this->config   = &$asf->config;
    $this->request  = &$asf->request;
    $this->data     = &$asf->data;
    $this->db       = &$asf->db;
    $this->views    = &$asf->views;
    $this->session  = &$asf->session;
    $this->user     = &$asf->user;
	}


	/**
	 * Wrapper for same method in CAsdf. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->ly->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CAsdf. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->ly->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in CAsdf. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->ly->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in CAsdf. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->ly->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in CAsdf. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->ly->CreateUrl($urlOrController, $method, $arguments);
  }


}
  