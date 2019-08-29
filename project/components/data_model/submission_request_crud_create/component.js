if (typeof component_classes['data_model_submission_request_crud_create'] === "undefined") {
	class data_model_submission_request_crud_create extends DivbloxDomBaseComponent {
		constructor(inputs,supports_native,requires_native) {
			super(inputs,supports_native,requires_native);
			// Sub component config start
			this.sub_component_definitions = [];
			// Sub component config end
			this.data_validation_array = [];
			this.custom_validation_array = [];
			this.required_validation_array = [].concat(this.data_validation_array).concat(this.custom_validation_array);
			this.account_list = {};
        this.stock_photo_request_list = {};
        this.file_document_list = {};
        
		}
		reset(inputs) {
			this.setLoadingState();
			this.loadPhotoSubmission();
			super.reset(inputs);
		}
		registerDomEvents() {
			getComponentElementById(this,"btnSave").on("click", function() {
				this.savePhotoSubmission();
			}.bind(this));
		}
		loadPhotoSubmission() {
			dxRequestInternal(getComponentControllerPath(this),{f:"getObjectData"}, function(data_obj) {
				this.removeLoadingState();
				this.component_obj = {
					"IsAccepted":"",
                    "CreatedDateTime":"",
                    "PhotoFilePath":"",
                    "Account":"",
                    "StockPhotoRequest":"",
                    "FileDocument":"",
                    };
				this.element_mapping = {
					"IsAccepted":"#"+this.uid+"_IsAccepted",
                    "CreatedDateTime":"#"+this.uid+"_CreatedDateTime",
                    "PhotoFilePath":"#"+this.uid+"_PhotoFilePath",
                    "Account":"#"+this.uid+"_Account",
                    "StockPhotoRequest":"#"+this.uid+"_StockPhotoRequest",
                    "FileDocument":"#"+this.uid+"_FileDocument",
                    };
				this.account_list = data_obj.AccountList;
                this.stock_photo_request_list = data_obj.StockPhotoRequestList;
                this.file_document_list = data_obj.FileDocumentList;
                
				this.setValues();
			}.bind(this), function(data_obj) {
				this.handleComponentError(data_obj.Message);
			}.bind(this));
		}
		setValues() {
			getComponentElementById(this,"IsAccepted").prop("checked",true);
            getComponentElementById(this,"CreatedDateTime").val("");
            getComponentElementById(this,"PhotoFilePath").val("");
            
			getComponentElementById(this,"Account").html('<option value="">-Please Select-</option>');
            let object_keys_account_list = Object.keys(this.account_list);
            if (object_keys_account_list.length > 0) {
                this.account_list.forEach(function (AccountItem) {
                    if (AccountItem['Id'] == "DATASET TOO LARGE") {
                        dxLog("Data set too large for Account. Consider using another option to link the object");
                    } else {
                        getComponentElementById(this,"Account").append('<option value="'+AccountItem['Id']+'">'+AccountItem['FullName']+'</option>');
                    }
                }.bind(this));
            }
            getComponentElementById(this,"StockPhotoRequest").html('<option value="">-Please Select-</option>');
            let object_keys_stock_photo_request_list = Object.keys(this.stock_photo_request_list);
            if (object_keys_stock_photo_request_list.length > 0) {
                this.stock_photo_request_list.forEach(function (StockPhotoRequestItem) {
                    if (StockPhotoRequestItem['Id'] == "DATASET TOO LARGE") {
                        dxLog("Data set too large for StockPhotoRequest. Consider using another option to link the object");
                    } else {
                        getComponentElementById(this,"StockPhotoRequest").append('<option value="'+StockPhotoRequestItem['Id']+'">'+StockPhotoRequestItem['RequestText']+'</option>');
                    }
                }.bind(this));
            }
            getComponentElementById(this,"FileDocument").html('<option value="">-Please Select-</option>');
            let object_keys_file_document_list = Object.keys(this.file_document_list);
            if (object_keys_file_document_list.length > 0) {
                this.file_document_list.forEach(function (FileDocumentItem) {
                    if (FileDocumentItem['Id'] == "DATASET TOO LARGE") {
                        dxLog("Data set too large for FileDocument. Consider using another option to link the object");
                    } else {
                        getComponentElementById(this,"FileDocument").append('<option value="'+FileDocumentItem['Id']+'">'+FileDocumentItem['Path']+'</option>');
                    }
                }.bind(this));
            }
            
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
		savePhotoSubmission() {
			let current_component_obj = this.updateValues();
			this.resetValidation();
			if (!this.validatePhotoSubmission()) {
				return;
			}
			dxRequestInternal(
				getComponentControllerPath(this),
				{f:"saveObjectData",
					ObjectData:JSON.stringify(current_component_obj)},
				function(data_obj) {
					showAlert("Created!");
					pageEventTriggered("photo_submission_created",{"photo_submission_id":data_obj.Id});
					this.loadPhotoSubmission();
					this.resetValidation();
				}.bind(this),
				function(data_obj) {
					showAlert("Error saving photo_submission: "+data_obj.Message,"error","OK",false);
				}.bind(this));
		}
		validatePhotoSubmission() {
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
	component_classes['data_model_submission_request_crud_create'] = data_model_submission_request_crud_create;
}