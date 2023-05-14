( function( api ) {

	// Extends our custom "home-automation" section.
	api.sectionConstructor['home-automation'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );