<?php

App::import('Vendor', 'tcpdf/tcpdf');

// Extend the TCPDF class to create custom Header and Footer
class ReciboPdf extends TCPDF {

	public $background_color = array(255, 255, 255);
	public $header_text = '';
	public $footer_text = '';

	// Page header
	public function Header() {
		// Color de fondo
		/*$this -> Rect(0, 0, 210, 297, 'F', '', $fill_color = $this -> background_color);
		
		$this -> Rect(10, 10, 5, 5, 'F', '', $fill_color = array(0, 0, 0));
		$this -> Rect(196, 10, 5, 5, 'F', '', $fill_color = array(0, 0, 0));

		$this -> SetFont('helvetica', '', 8);
		$this -> Text(20, 12, $this -> header_text);
		*/
	}

	// Page footer
	public function Footer() {
		/*$this -> Rect(10, 282, 5, 5, 'F', '', $fill_color = array(0, 0, 0));

		$this -> SetFont('helvetica', '', 8);
		$this -> Text(18, -13, $this -> footer_text);
		$this -> Text(196, -13, $this -> getAliasNumPage() . '/' . $this -> getAliasNbPages());*/
	}
	
	public function Body() {
		
	}

}