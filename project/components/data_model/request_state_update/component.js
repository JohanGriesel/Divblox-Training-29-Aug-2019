if (typeof component_classes['data_model_request_state_update'] === "undefined") {
	class data_model_request_state_update extends DivbloxDomBaseComponent {
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
			if (typeof inputs !== "undefined") {
				this.setRequestStatusId(inputs);
				this.loadRequestStatus();
			}
			super.reset(inputs);
		}
		registerDomEvents() {
			getComponentElementById(this,"btnSave").on("click", function() {
				this.saveRequestStatus();
			}.bind(this));
			getComponentElementById(this,"btnDelete").on("click", function() {
				showAlert("Are you sure?","warning",["Cancel","Delete"],false,0,this.deleteRequestStatus.bind(this),this.doNothing);
			}.bind(this));
		}
		setRequestStatusId(request_status_id) {
			this.arguments["request_status_id"] = request_status_id;
		}
		getRequestStatusId() {
			return this.arguments["request_status_id"];
		}
		loadRequestStatus() {
			dxRequestInternal(getComponentControllerPath(this),{f:"getObjectData",Id:this.getRequestStatusId()}, function(data_obj) {
				this.removeLoadingState();
				this.component_obj = data_obj.Object;
				this.element_mapping = {
					"StatusLabel":"#"+this.uid+"_StatusLabel",
                    };
				
				this.setValues();
			}.bind(this), function(data_obj) {
				this.handleComponentError(data_obj.Message);
			}.bind(this));
		}
		setValues() {
			let RequestStatusObj = this.component_obj;
			getComponentElementById(this,"StatusLabel").val(getDataModelAttributeValue(RequestStatusObj.StatusLabel));
            
			
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
					ObjectData:JSON.stringify(current_component_obj),
					Id:this.arguments["request_status_id"]}, function(data_obj) {
					showAlert("Updated!");
					pageEventTriggered("request_status_updated");
					this.resetValidation();
				}.bind(this), function(data_obj) {
					showAlert("Error saving request_status: "+data_obj.Message,"error","OK",false);
				}.bind(this));
		}
		deleteRequestStatus() {
			dxRequestInternal(getComponentControllerPath(this),{f:"deleteObjectData",Id:this.arguments["request_status_id"]}, function(data_obj) {
				showAlert("Deleted!");
				this.loadRequestStatus();
				pageEventTriggered("request_status_deleted");
			}.bind(this), function (data_obj) {
				showAlert("Error deleting request_status: "+data_obj.Message,"error","OK",false);
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
		doNothing() {
			// Just a helper function to reference on cancel of confirmation
		}
	}
	component_classes['data_model_request_state_update'] = data_model_request_state_update;
}