$( document ).ready(function() {
	// Collapse panel
    $(".panel-collapse").on("shown.bs.collapse", function () {
    	// Select the name of html and pdf
    	var name = $(this).children().attr('name');
    	// Load html into section
		$(this).children().load('articles/' + name + '.html');
		// Load pdf doc into selection
		$(this).children().append('<hr><p>Printable PDF</p>')
		$(this).children().append('<a href="articles/' + name + '.pdf" class="btn btn-primary" target="_blank"><i class="fa fa-file-pdf-o fa-3x"></i></a>');
	    // Fixes screen scrolling issue for big selections
	    var selected = $(this);
	    var collapseh = $(".collapse.in").height();
	    $.scrollTo(selected, 0, {
	        offset: -(collapseh)
	    });
	});
});