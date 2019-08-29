if (typeof component_classes['pages_request_view'] === "undefined") {
	class pages_request_view extends DivbloxDomBaseComponent {
		constructor(inputs,supports_native,requires_native) {
			super(inputs,supports_native,requires_native);
			// Sub component config start
            this.sub_component_definitions = 
                [{"component_load_path":"navigation/side_navbar","parent_element":"s8gjT","arguments":{"uid":"navigation_side_navbar_1"}},
            {"component_load_path":"system/submission_upload","parent_element":"hZ1CJ","arguments":{}}];
            // Sub component config end
		}
		reset(inputs) {
			setActivePage("request_view","Stock Photo Request");
			super.reset(inputs);
		}
	}
	component_classes['pages_request_view'] = pages_request_view;
}