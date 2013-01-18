<?php

class Macro extends HTML {

	public static function test( $link, $title ) {
		return ( $link == strtolower($title) )? true : false;
	}
}

{{ Macro::test( $link, $title ) }}