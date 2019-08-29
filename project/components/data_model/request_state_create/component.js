if (typeof component_classes['data_model_request_state_create'] === "undefined") {
	class data_model_request_state_create extends DivbloxDomBaseComponent {
		constructor(inputs,supports_native,requires_native) {
			super(inputs,supports_native,requires_native);
			// Sub component config start
			this.sub_component_definitions = [];
			// Sub component config end
			this.data_validation_array = [];
			this.custom_validation_array = [];
			this.required_validation_array = ['StatusLabel',].concat(this.data_validation_array).concat(this.custom_validation_array);
			
		}
		reset(inputs) {
			this.setLoadingState();
			this.loadRequestStatus();
			super.reset(inputs);
		}
		registerDomEvents() {
			getComponentElementById(this,"btnSave").on("click", function() {
				this.saveRequestStatus();
			}.bind(this));
		}
		loadRequestStatus() {
			dxRequestInternal(getComponentControllerPath(this),{f:"getObjectData"}, function(data_obj) {
				this.removeLoadingState();
				this.component_obj = {
					"StatusLabel":"",
                    };
				this.element_mapping = {
					"StatusLabel":"#"+this.uid+"_StatusLabel",
                    };
				
				this.setValues();
			}.bind(this), function(data_obj) {
				this.handleComponentError(data_obj.Message);
			}.bind(this));
		}
		setValues() {
			getComponentElementById(this,"StatusLabel").val("");
            
			
		}
		updateValues() {
			let keys = Object.keys(this.element_mapping);
			keys.forEach(function(item) {
				if ($(this.element_mapping[item]).attr("type") == "checkbox") {
					this.component_obj[item] = $(this.element_mapping[item]).is(':checked') ? 1: 0;
				} else {
					this.component_obj[item] = $(this.element_mapping[item]).val();
				}
			}.bind(this));
			return this.component_obj;
		}
		saveRequestStatus() {
			let current_component_obj = this.updateValues();
			this.resetValidation();
			if (!this.validateRequestStatus()) {
				return;
			}
			dxRequestInternal(
				getComponentControllerPath(this),
				{f:"saveObjectData",
					ObjectData:JSON.stringify(current_component_obj)},
				function(data_obj) {
					showAlert("Created!");
					pageEventTriggered("request_status_created",{"request_status_id":data_obj.Id});
					this.loadRequestStatus();
					this.resetValidation();
				}.bind(this),
				function(data_obj) {
					showAlert("Error saving request_status: "+data_obj.Message,"error","OK",false);
				}.bind(this));
		}
		validateRequestStatus() {
			let validation_succeeded = true;
			this.required_validation_array.forEach(function(item) {
				if (getComponentElementById(this,item).attr("type") !== "checkbox") {
					if (getComponentElementById(this,item).val() == "") {
						validation_succeeded = false;
						toggleValidationState(this,item,"",false);
					} else {
						toggleValidationState(this,item,"",true);
					}
				}
			}.bind(this));
			this.data_validation_array.forEach(function(item) {
				if (!getComponentElementById(this,item).hasClass("is-invalid")) {
					if (getComponentElementById(this,item).hasClass("validate-number")) {
						if (isNaN(getComponentElementById(this,item).val())) {
							validation_succeeded = false;
							toggleValidationState(this,item,"",false);
						} else {
							toggleValidationState(this,item,"",true);
						}
					}
				}
			}.bind(this));
			this.custom_validation_array.forEach(function(item) {
				if (checkValidationState(this,item)) {
					validation_succeeded &= this.doCustomValidation(item);
				}
			}.bind(this));
			return validation_succeeded;
		}
		doCustomValidation(attribute) {
			switch (attribute) {
				
				default:
					break;
			}
		}
		resetValidation() {
			this.required_validation_array.forEach(function(item) {
				toggleValidationState(this,item,"",true,true);
			}.bind(this));
		}
	}
	component_classes['data_model_request_state_create'] = data_model_request_state_create;
}