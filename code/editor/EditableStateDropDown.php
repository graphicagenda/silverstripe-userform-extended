<?php
/**
 * EditableDropdown
 *
 * Represents a modifiable dropdown box on a form
 *
 * @package userforms
 */

class  EditableStateDropDown extends EditableFormField  {
	
		static $singular_name = 'State Field';
		
		static $plural_name = 'State Fields';

		
		function getFormField() {
			$labelField = new DropdownField($this->Name, $this->Title, GetStates::getStateDropDown());
			$labelField->addExtraClass('FormState'); 
			return $labelField;
		}

	}