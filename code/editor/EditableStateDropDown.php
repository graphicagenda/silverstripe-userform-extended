<?php
/**
 * EditableDropdown
 *
 * Represents a modifiable dropdown box on a form
 *
 * @package userforms
 */

class  EditableStateDropdown extends EditableFormField  {
	
		static $singular_name = 'State Field';
		
		static $plural_name = 'State Fields';

		
		function getFormField() {
				$labelField = new DropdownField($this->Name, $this->Title, USStatesList::USStatesDropdown());
				$labelField->addExtraClass('FormState'); 
				return $labelField;
			}
			
		/**
		 * call an image for the field
		 * 
		 */	
		function getIcon(){
				return 'userform_custom_fields/images/editablestatedropdown.png';
			}

	}