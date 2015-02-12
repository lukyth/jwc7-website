/**
 *	Class Instagram v1.0
 *	apichai_kub@hotmail.com Chai
 *	
 *  parameters client_info {clientId: 'CLIENT_ID', tagName: 'TAG_NAME'}
 */
function Instagram ( client_info ) {
	var self = this;
	var results = [];

	this.clientId = '';
	this.tagName = '';
	this.ended = false;

	this.init = function () {
		if( typeof client_info.clientId != 'undefined' && typeof client_info.tagName != 'undefined' ) {
			this.clientId = client_info.clientId;
			this.tagName = client_info.tagName;
			this.getResult(); // call getResult()
		}
	}
	this.getResult = function () {
		// feach data
		var url = 'https://api.instagram.com/v1/tags/'+ this.tagName +'/media/recent?client_id='+ this.clientId;
		feach(url);

	    function feach( url ) {
	    	$.ajax({
				url: url,
				dataType: 'jsonp',
			    async: false,
			    beforeSend: function () {

			    },
			    success: function(response) {
	    			if(response.meta.code == 200) {
			    		var data = response.data;
			    		for(var i=0; i<data.length; i++)
			    			results.push(data[i]); // push json obj to arr
			    		/**
			    		 *	feach data
			    		 */
			    		if( typeof response.pagination.next_url != 'undefined' ) {
			    			var url = response.pagination.next_url;
			    			feach(url);
			    		} else {
			    			// not found data.
			    			self.ended = true;
			    		}
			    	}
			    },
			    error: function() {

			    },
		    }); // end ajax
	    } // end feach func
	}
	this.feed = function (callback) {
		var timer;
		timer = setInterval(function(){
			if(self.ended) {
				callback(results);
				clearInterval(timer);
			}
		}, 500);
	}
	// init
	this.init();
}
