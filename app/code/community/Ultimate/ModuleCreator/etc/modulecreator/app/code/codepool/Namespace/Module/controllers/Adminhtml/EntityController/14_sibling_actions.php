	/**
	 * get {{siblings}} action
	 * @access public
	 * @return void
	 * {{qwertyuiop}}
	 */
	public function {{siblings}}Action(){
		$this->_init{{Entity}}();
		$this->loadLayout();
		$this->getLayout()->getBlock('{{entity}}.edit.tab.{{sibling}}')
			->set{{Entity}}{{Siblings}}($this->getRequest()->getPost('{{siblings}}', null));
		$this->renderLayout();
	}
	/**
	 * get {{siblings}} grid  action
	 * @access public
	 * @return void
	 * {{qwertyuiop}}
	 */
	public function {{siblings}}gridAction(){
		$this->_init{{Entity}}();
		$this->loadLayout();
		$this->getLayout()->getBlock('{{entity}}.edit.tab.{{sibling}}')
			->set{{Entity}}{{Siblings}}($this->getRequest()->getPost('{{siblings}}', null));
		$this->renderLayout();
	}