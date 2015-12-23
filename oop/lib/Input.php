<?php
	namespace Tilibra\Lib;

	class Input {

		public static function get($key) {
			if (!isset($_REQUEST[$key])) {
				return null;
			}

			return $_REQUEST[$key];
		}

	}
