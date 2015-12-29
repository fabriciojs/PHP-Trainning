<?php
	namespace Tilibra\Lib;

	class TextNode extends HtmlElement {
		private $text;

		public function __construct($text) {
			$this->text = $text;
		}

		public function __toString() {
			return htmlentities($this->text);
		}
	}
