<?php
/**
 * Form Maker PHP
 * Gerador de campos para formulários em php com bootstrap
 * https://github.com/gmasson/form-maker-php/
 * Licença: MIT
*/

function frmk( 
	$type = 'text',
	$name = '',
	$placeholder = '',
	$value = '',
	$add = '',
	$id = '',
	$class = 'form-control'
) {
	switch ($type) {
		case 'textarea':
			echo "<textarea name=\"" . $name . "\" placeholder=\"" . $placeholder . "\" class=\"" . $class . "\" id=\"" . $id . "\" " . $add . ">" . $value . "</textarea> \n";
			break;

		case 'select':
			echo "<select name=\"" . $name . "\" class=\"" . $class . "\" id=\"" . $id . "\" " . $add . "> \n";
			for ( $i=0; $i < count($value); $i++ ) {
				echo "<option>" . $value[$i] . "</option> \n";
			}
			echo "</select> \n";
			break;
			
		case 'radio':
			echo "<input type=\"" . $type . "\" name=\"" . $name . "\" value=\"" . $value . "\" class=\"form-check-input\" id=\"" . $id . "\" " . $add . "> ";
			echo "<label class=\"form-check-label\" for=\"" . $id . "\">" . $placeholder . "</label> \n";
			break;

		case 'checkbox':
			echo "<input type=\"" . $type . "\" name=\"" . $name . "\" value=\"" . $value . "\" class=\"form-check-input\" id=\"" . $id . "\" " . $add . "> ";
			echo "<label class=\"form-check-label\" for=\"" . $id . "\">" . $placeholder . "</label> \n";
			break;

		default:
			echo "<input type=\"" . $type . "\" name=\"" . $name . "\" placeholder=\"" . $placeholder . "\" value=\"" . $value . "\" class=\"" . $class . "\" id=\"" . $id . "\" " . $add . "> \n";
			break;
	}
}
