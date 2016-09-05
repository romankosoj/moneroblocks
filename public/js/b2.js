var mblocks = mblocks || {};

if (document.addEventListener) {

	document.addEventListener("DOMContentLoaded", function() {

		if(document.getElementById('inputs_panel')){
	   		document.getElementById('inputs_panel').addEventListener("click", mblocks.outputsListClickHandler, false);
		}

	    document.getElementById('frmSearch').addEventListener("submit", mblocks.searchSubmit, false);
	});
}

mblocks.outputsListClickHandler = function (event){
			event = event || window.event;
	    	event.target = event.target || event.srcElement;

	    	var element = event.target;

		    while (element) {
		        if (element.nodeName === "BUTTON" && /output-list/.test(element.className)) {
		            mblocks.toggleVisible(element);
		            break;
		        }

		        element = element.parentNode;
		    }    	
	    };

mblocks.toggleVisible = function(element){
		var id = element.getAttribute('data-vinid');
		var status = element.getAttribute('data-status');
		var elem = document.getElementById('output-list-'+id);

		if(status==="O"){
			mblocks.replaceClass(elem, "closed", "open");
			mblocks.replaceClass(element, "fa-plus", "fa-minus");
			element.setAttribute('data-status', "C");

		}else{
			mblocks.replaceClass(elem, "open", "closed");
			mblocks.replaceClass(element, "fa-minus", "fa-plus");
			element.setAttribute('data-status', "O");
		}
}

mblocks.replaceClass = function(element, oldClass, newClass){
		var re = new RegExp(oldClass,"g");
		element.className = element.className.replace
	      ( re, newClass );
}

mblocks.searchSubmit = function(e) {
		var form = e.target;
		var url = form.action;
		var text = document.getElementById('txt_search').value;

		window.location.href = url+text;
		e.preventDefault();
}