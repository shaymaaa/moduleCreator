		return $this;
	}
	/**
	 * get the row url
	 * @access public
	 * @param {{Namespace}}_{{Module}}_Model_{{Entity}}
	 * @return string
	 * {{qwertyuiop}}
	 */
	public function getRowUrl($row){
		return $this->getUrl('*/*/edit', array('id' => $row->getId()));
	}
	/**
	 * get the grid url
	 * @access public
	 * @return string
	 * {{qwertyuiop}}
	 */
	public function getGridUrl(){
		return $this->getUrl('*/*/grid', array('_current'=>true));
	}
}