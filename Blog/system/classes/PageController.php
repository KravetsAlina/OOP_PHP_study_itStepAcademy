<?php

	class PageController {

		public $id;
		public $user;
		public $title;
		public $style;
		public $script;
		public $content;
		public $template;

		private function defId() {
			$this->id = 'main';
			if (isset($_GET['id'])) {
				$this->id = $_GET['id'];
			}
		} 

		private function defUser() {
			$this->user = 'Guest';
		}

		private function defTitle() {
			$this->title = 'MyBlog';
		}

		private function defParams() {
			$this->style = 'resource/styles/'.$this->id.'.css';
			$this->script = 'resource/scripts/'.$this->id.'.js';
			$this->content = 'application/pages/'.$this->id.'.php';
			$this->template = 'system/templates/base.php';
		}

		public function __construct() {
			$this->defId();
			$this->defUser();
			$this->defTitle();
			$this->defParams();
		}

		public function load() {			
			include($this->template);
		}

	}