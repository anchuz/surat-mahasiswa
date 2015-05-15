<?php
class GuestController extends BaseController {
	/**
	* Layout yang akan digunakan untuk controller ini
	*/
	protected $layout = 'layouts.login';
	public function login()
	{
		$this->layout->content = View::make('guest.login');
	}
}
?>
