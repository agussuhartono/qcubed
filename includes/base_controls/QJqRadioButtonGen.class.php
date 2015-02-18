<?php	
	/**
	 * Triggered when the button is created.
	 * 
	 * 	* event Type: Event 
	 * 	* ui Type: Object 
	 * 
	 * _Note: The ui object is empty but included for consistency with other
	 * events._	 */
	class QJqRadioButton_CreateEvent extends QJqUiEvent {
		const EventName = 'buttoncreate ';
	}

	/* Custom "property" event classes for this control */

	/**
	 * Generated QJqRadioButtonGen class.
	 * 
	 * This is the QJqRadioButtonGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QJqRadioButtonBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QJqRadioButtonBase
	 * @package Controls\Base
	 * @property boolean $Disabled 	 * Disables the button if set to true.
	 * @property mixed $Icons 	 * Icons to display, with or without text (see text option). By default,
	 * the primary icon is displayed on the left of the label text and the
	 * secondary is displayed on the right. The positioning can be controlled
	 * via CSS. 
	 * 
	 * The value for the primary and secondary properties must match an icon
	 * class name, e.g., "ui-icon-gear". For using only one icon: icons: {
	 * primary: "ui-icon-locked" }. For using two icons: icons: { primary:
	 * "ui-icon-gear", secondary: "ui-icon-triangle-1-s" }.
	 * @property string $Label 	 * Text to show in the button. When not specified (null), the elements
	 * HTML content is used, or its value attribute if the element is an
	 * input element of type submit or reset, or the HTML content of the
	 * associated label element if the element is an input of type radio or
	 * checkbox.
	 * @property boolean $JqText 	 * Whether to show the label. When set to false no text will be
	 * displayed, but the icons option must be enabled, otherwise the text
	 * option will be ignored.
	 */

	class QJqRadioButtonGen extends QRadioButton	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var mixed */
		protected $mixIcons = null;
		/** @var string */
		protected $strLabel = null;
		/** @var boolean */
		protected $blnJqText = null;

		/**
		 * Builds the option array to be sent to the widget consctructor.
		 *
		 * @return array key=>value array of options
		 */
		protected function MakeJqOptions() {
			$jqOptions = null;
			if (!is_null($val = $this->Disabled)) {$jqOptions['disabled'] = $val;}
			if (!is_null($val = $this->Icons)) {$jqOptions['icons'] = $val;}
			if (!is_null($val = $this->Label)) {$jqOptions['label'] = $val;}
			if (!is_null($val = $this->JqText)) {$jqOptions['text'] = $val;}
			return $jqOptions;
		}

		public function GetJqSetupFunction() {
			return 'button';
		}

		public function GetEndScript() {
			if ($this->getJqControlId() !== $this->ControlId) {
				// If events are not attached to the actual object being drawn, then the old events will not get
				// deleted. We delete the old events here. This code must happen before any other event processing code.
				QApplication::ExecuteControlCommand($this->getJqControlId(), "off", QJsPriority::High);
			}
			$jqOptions = $this->makeJqOptions();
			if (empty($jqOptions)) {
				QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction());
			}
			else {
				QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), $jqOptions);
			}

			return parent::GetEndScript();
		}

		/**
		 * Removes the button functionality completely. This will return the
		 * element back to its pre-init state.
		 * 
		 * 	* This method does not accept any arguments.		 */
		public function Destroy() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "destroy");
		}
		/**
		 * Disables the button.
		 * 
		 * 	* This method does not accept any arguments.		 */
		public function Disable() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "disable");
		}
		/**
		 * Enables the button.
		 * 
		 * 	* This method does not accept any arguments.		 */
		public function Enable() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "enable");
		}
		/**
		 * Retrieves the buttons instance object. If the element does not have an
		 * associated instance, undefined is returned. 
		 * 
		 * Unlike other widget methods, instance() is safe to call on any element
		 * after the button plugin has loaded.
		 * 
		 * 	* This method does not accept any arguments.		 */
		public function Instance() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "instance");
		}
		/**
		 * Gets the value currently associated with the specified optionName. 
		 * 
		 * Note: For options that have objects as their value, you can get the
		 * value of a specific key by using dot notation. For example, "foo.bar"
		 * would get the value of the bar property on the foo option.
		 * 
		 * 	* optionName Type: String The name of the option to get.		 * @param $optionName		 */
		public function Option($optionName) {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "option", $optionName);
		}
		/**
		 * Gets an object containing key/value pairs representing the current
		 * button options hash.
		 * 
		 * 	* This signature does not accept any arguments.		 */
		public function Option1() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "option");
		}
		/**
		 * Sets the value of the button option associated with the specified
		 * optionName. 
		 * 
		 * Note: For options that have objects as their value, you can set the
		 * value of just one property by using dot notation for optionName. For
		 * example, "foo.bar" would update only the bar property of the foo
		 * option.
		 * 
		 * 	* optionName Type: String The name of the option to set.
		 * 	* value Type: Object A value to set for the option.		 * @param $optionName		 * @param $value		 */
		public function Option2($optionName, $value) {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "option", $optionName, $value);
		}
		/**
		 * Sets one or more options for the button.
		 * 
		 * 	* options Type: Object A map of option-value pairs to set.		 * @param $options		 */
		public function Option3($options) {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "option", $options);
		}
		/**
		 * Refreshes the visual state of the button. Useful for updating button
		 * state after the native elements checked or disabled state is changed
		 * programmatically.
		 * 
		 * 	* This method does not accept any arguments.		 */
		public function Refresh() {
			QApplication::ExecuteControlCommand($this->getJqControlId(), $this->getJqSetupFunction(), "refresh");
		}


		public function __get($strName) {
			switch ($strName) {
				case 'Disabled': return $this->blnDisabled;
				case 'Icons': return $this->mixIcons;
				case 'Label': return $this->strLabel;
				case 'JqText': return $this->blnJqText;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'Disabled':
					try {
						$this->blnDisabled = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'disabled', $this->blnDisabled);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icons':
					$this->mixIcons = $mixValue;
					$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'icons', $mixValue);
					break;

				case 'Label':
					try {
						$this->strLabel = QType::Cast($mixValue, QType::String);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'label', $this->strLabel);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'JqText':
					try {
						$this->blnJqText = QType::Cast($mixValue, QType::Boolean);
						$this->AddAttributeScript($this->getJqSetupFunction(), 'option', 'text', $this->blnJqText);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				case 'Enabled':
					$this->Disabled = !$mixValue;	// Tie in standard QCubed functionality
					parent::__set($strName, $mixValue);
					break;
					
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		* If this control is attachable to a codegenerated control in a metacontrol, this function will be
		* used by the metacontrol designer dialog to display a list of options for the control.
		* @return QMetaParam[]
		**/
		public static function GetMetaParams() {
			return array_merge(parent::GetMetaParams(), array(
				new QMetaParam (get_called_class(), 'Disabled', 'Disables the button if set to true.', QType::Boolean),
				new QMetaParam (get_called_class(), 'Label', 'Text to show in the button. When not specified (null), the elementsHTML content is used, or its value attribute if the element is aninput element of type submit or reset, or the HTML content of theassociated label element if the element is an input of type radio orcheckbox.', QType::String),
				new QMetaParam (get_called_class(), 'JqText', 'Whether to show the label. When set to false no text will bedisplayed, but the icons option must be enabled, otherwise the textoption will be ignored.', QType::Boolean),
			));
		}
	}

?>
