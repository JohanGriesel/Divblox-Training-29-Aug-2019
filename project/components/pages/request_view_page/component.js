if (typeof component_classes['pages_request_view_page'] === "undefined") {
	class pages_request_view_page extends DivbloxDomBaseComponent {
		constructor(inputs,supports_native,requires_native) {
			super(inputs,supports_native,requires_native);
			// Sub component config start
			this.sub_component_definitions = [{"component_load_path":"navigation/side_navbar","parent_element":"s8gjT","arguments":{}}];
			// Sub component config end
		}
		reset(inputs) {
			setActivePage("","Stock Photo Request");
			super.reset(inputs);
		}
	}
	component_classes['pages_request_view_page'] = pages_request_view_page;
}