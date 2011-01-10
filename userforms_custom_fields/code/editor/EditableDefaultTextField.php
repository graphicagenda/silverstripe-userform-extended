<?php
/**
 * EditableTextField
 *
 * This control represents a user-defined text field in a user defined form
 *
 * @package userforms
 */

class EditableDefaultTextField extends EditableFormField {

	static $singular_name = 'Text field with Default';
	
	static $plural_name = 'Text field with Defaults';
	
	function getFieldConfiguration() {
		$fields = parent::getFieldConfiguration();
		
		// eventually replace hard-coded "Fields"?
		$baseName = "Fields[$this->ID]";
		
		$minLength = ($this->getSetting('MinLength')) ? $this->getSetting('MinLength') : '';
		$maxLength = ($this->getSetting('MaxLength')) ? $this->getSetting('MaxLength') : '';
		$extraClass = ($this->getSetting('ExtraClass')) ? $this->getSetting('ExtraClass') : '';
		$rows = ($this->getSetting('Rows')) ? $this->getSetting('Rows') : '1';
		
		$extraFields = new FieldSet(
			new FieldGroup(_t('EditableTextField.TEXTLENGTH', 'Text length'),
				new TextField($baseName . "[CustomSettings][MinLength]", "", $minLength),
				new TextField($baseName . "[CustomSettings][MaxLength]", " - ", $maxLength)
			),
			new TextField($baseName . "[CustomSettings][Rows]", _t('EditableTextField.NUMBERROWS', 'Number of rows'), $rows), 
			new TextField("Fields[$this->ID][CustomSettings][ExtraClass]", _t('EditableFormField.EXTRACLASS', 'Extra Class'), $this->getSetting('ExtraClass'))
		);
		$fields->push(new TextField("Fields[$this->ID][CustomSettings][Default]", _t('EditableFormField.DEFAULT', 'Default'), $this->getSetting('Default')));
		$fields->merge($extraFields);
		return $fields;		
	}

	function getFormField() {
		if($this->getSetting('Rows') && $this->getSetting('Rows') > 1) {
			$fields = new TextareaField($this->Name, $this->Title, $this->getSetting('Rows'),null,$this->getSetting('Default'));
			$fields->addExtraClass($this->getSetting('ExtraClass')); 
			return $fields;
		}
		else {
			$fields =  new TextField($this->Name, $this->Title, $this->getSetting('Default'), $this->getSetting('MaxLength'));
			$fields->addExtraClass($this->getSetting('ExtraClass')); 
			return $fields;
		}
	}
		/**
		 * call an image for the field
		 * 
		 */	
		function getIcon() {
				return 'userforms_custom_fields/images/' . strtolower($this->class) . '.png';
			}
			
	/**
	 * Return the validation information related to this field. This is 
	 * interrupted as a JSON object for validate plugin and used in the 
	 * PHP. 
	 *
	 * @see http://docs.jquery.com/Plugins/Validation/Methods
	 * @return Array
	 */
	public function getValidation() {
		$options = array();
		if($this->getSetting('MinLength')) $options['minlength'] = $this->getSetting('MinLength');
		if($this->getSetting('MaxLength')) $options['maxlength'] = $this->getSetting('MaxLength');
		
		return $options;
	}
}