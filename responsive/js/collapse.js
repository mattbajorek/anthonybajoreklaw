$( document ).ready(function() {
	// Collapse panel
    $(".panel-collapse").one("shown.bs.collapse", function () {
    	// Select the name of html and pdf
    	var panelBody = $(this).children();
    	var name = panelBody.attr('name');
    	// Load html into section
		panelBody.load('articles/' + name + '.html', function(responseTxt, statusTxt, xhr){
	        if(statusTxt == "success")
	            // Load pdf doc into selection after content is loaded
				var text = $('<hr><p>Printable PDF</p>');
				var link = $('<a href="articles/' + name + '.pdf" class="btn" target="_blank">\
					<i class="fa fa-file-pdf-o fa-3x"></i>\
					</a>');
				panelBody.append(text);
				panelBody.append(link);
	        if(statusTxt == "error")
	            console.log("Error: " + xhr.status + ": " + xhr.statusText);
	    });
	    // Fixes screen scrolling issue for big selections
	    var selected = $(this);
	    var collapseh = $(".collapse.in").height();
	    $.scrollTo(selected, 0, {
	        offset: -(collapseh)
	    });
	});
});