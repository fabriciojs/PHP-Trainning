<?php
	namespace Tilibra\Lib;

	class HtmlElement {
		private $tag;

		private $attrs = [];

		private $children = [];

		public function __construct($tag) {
			$this->tag = $tag;
		}

		public function setAttr($attr, $value) {
			$this->attrs[$attr] = $value;

			return $this;
		}

		public function append(HtmlElement $el) {
			$this->children[] = $el;

			return $this;
		}

		public function __toString() {
			// vou gerar o HTML (string) que representa
			// este elemento
			
			$str = "<{$this->tag}";

			if (!empty($this->attrs)) {
				foreach ($this->attrs as $attr => $value) {
					$str .= " {$attr}=\"{$value}\"";
				}
			}


			if (empty($this->children)) {
				$str .= ' />';
				return $str;
			}

			$str .= '>';

			foreach ($this->children as $child) {
				$str .= $child;
			}

			$str .= "</{$this->tag}>";

			return $str;
		}
	}
