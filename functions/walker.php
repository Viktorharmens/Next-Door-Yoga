<?php
	
	// Walker to add subnavigation toggles to the menu items
	class Mobile_Walker extends Walker_Nav_Menu {
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= '<span class="menu-item-sub-menu js-toggle-subnav"><i></i></span>';
			$output .= "\n$indent<ul class=\"sub-menu\">\n";
   		}
	}
	
?>