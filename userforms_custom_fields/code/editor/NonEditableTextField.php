<?php
/**
 * EditableDropdown
 *
 * Represents a modifiable dropdown box on a form
 *
 * @package userforms
 */

class  NonEditableTextField extends EditableTextField  {
	
		static $singular_name = 'Non Editable Text Field';
		
		static $plural_name = 'Non Editable Text Fields';
		
		public function getFieldConfiguration() {
				$options = parent::getFieldConfiguration();
				$options->push(new TextField("Fields[$this->ID][CustomSettings][Default]", _t('EditableFormField.FIELDONDEFAULT', 'Default?'), $this->getSetting('Default')));
				return $options;
			}
		
		function getFormField() {
				$labelfield = new ReadonlyField($this->Name, $this->Title, $this->getSetting('Default'));
				$labelfield->addExtraClass('disabled'); 

				return $labelfield;
		}
		
		/**
		 * call an image for the field
		 * 
		 */	
		function getIcon() {
				return 'userforms_custom_fields/images/' . strtolower($this->class) . '.png';
			}

	}
	
