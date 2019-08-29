if (typeof component_classes['pages_feed'] === "undefined") {
	class pages_feed extends DivbloxDomBaseComponent {
		constructor(inputs,supports_native,requires_native) {
			super(inputs,supports_native,requires_native);
			// Sub component config start
            this.sub_component_definitions = 
                [{"component_load_path":"navigation/side_navbar","parent_element":"s8gjT","arguments":{"uid":"navigation_side_navbar_1"}},
            {"component_load_path":"data_model/open_stock_request_feed","parent_element":"yyBrJ","arguments":{}}];
            // Sub component config end
		}
		reset(inputs) {
			setActivePage("feed","Feed");
			super.reset(inputs);
		}
	    initCustomFunctions() {
                
            // U72Wy_button Related functionality
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            getComponentElementById(this,"U72Wy_btn").on("click", function() {
                createStockPhotoRequest(getComponentElementById(this,'JBmKf_FormControlTextArea').val(),function(result) {
                    dxLog("Request result: "+result);
                });
            }.bind(this));
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
        }
        eventTriggered(event_name,parameters_obj) {
            switch(event_name) {
                case 'stock_photo_request_clicked': 
                    setGlobalConstrainById("StockPhotoRequest",parameters_obj.id);
                    loadPageComponent("request_view");
                    break;
                default:
                    dxLog("Event triggered: "+event_name+": "+JSON.stringify(parameters_obj));
            }
            // Let's pass the event to all sub components
            this.propagateEventTriggered(event_name,parameters_obj);
        }
   	}
	component_classes['pages_feed'] = pages_feed;
}