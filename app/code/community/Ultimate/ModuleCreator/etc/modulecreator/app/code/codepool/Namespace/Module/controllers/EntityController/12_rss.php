	/**
	 * {{entitiesLabel}} rss list action
	 * @access public
	 * @return void
	 * {{qwertyuiop}}
	 */
	public function rssAction(){
		if (Mage::helper('{{module}}/{{entity}}')->isRssEnabled()) {
			$this->getResponse()->setHeader('Content-type', 'text/xml; charset=UTF-8');
			$this->loadLayout(false);
			$this->renderLayout();
		}
		else {
			$this->getResponse()->setHeader('HTTP/1.1','404 Not Found');
			$this->getResponse()->setHeader('Status','404 File not found');
			$this->_forward('nofeed','index','rss');
		}
	} 
