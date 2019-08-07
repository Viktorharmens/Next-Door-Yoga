jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.vm_faq_button', {
		init: function( editor, url ) {
			
			// Add button that inserts shortcode into the current position of the editor
			editor.addButton( 'vm_faq_button', {
				title: 'Veelgestelde vragen sectie invoegen',
				image: url + '/faq-button-icon.svg',
				onclick: function() {
					
					$.ajax({
			            type: 'POST',
			            url: ajaxurl,
			            data: { action: 'get_faq_list' },
			            success: function (response) {
			                
			                var data = JSON.parse(response);
			                console.log(data);
			                
			                // Open a TinyMCE modal
							editor.windowManager.open({
								title: 'FAQ invoegen',
								body: [{
									type   : 'listbox',
				                    name   : 'id',
				                    label  : 'FAQ',
				                    values : data
								}],
								onsubmit: function( e ) {
									editor.insertContent( '[faq id="' + e.data.id + '"]' );
								}
							});
			
			            },
			            error: function (xhr, status, error) {
			                alert("Error! " + xhr.status + "\n" + error);
			            }
			        });
				}
			});
		},
		
		createControl: function( n, cm ) {
			return null;
		}
	});
    

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('vm_faq_button', tinymce.plugins.vm_faq_button);
    
    
    
});



function buildListItems(inputList, itemCallback, startItems) {
    function appendItems(values, output) {
        output = output || [];

        tinymce.each(values, function(item) {
            var menuItem = {text: item.text || item.title, value: ""};
            itemCallback(menuItem, item);
            output.push(menuItem);
        });

        return output;
    }

    return appendItems(inputList, startItems || []);
}