<?php
/**
 * EditableDropdown
 *
 * Represents a modifiable dropdown box on a form
 *
 * @package userforms
 */

class  EditableCountryDropDown extends EditableFormField  {
	
		static $singular_name = 'Country Field';
		
		static $plural_name = 'Country Fields';

	public function getFieldConfiguration() {
			$options = parent::getFieldConfiguration();
				$options->push(new TextField("Fields[$this->ID][CustomSettings][Default]", _t('EditableFormField.FIELDONDEFAULT', 'Default?'), $this->getSetting('Default')));
			return $options;
	}
	
	function getFormField() {
			$labelField = new DropdownField($this->Name, $this->Title, GetCountries::getCountryDropDownUS());
			$labelField->addExtraClass('FormState'); 
			return $labelField;
		}

	}