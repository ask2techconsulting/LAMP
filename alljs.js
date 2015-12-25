  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '411837212359627',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use version 2.2
  });
  };

  function updateApplication() {
    FB.api('/me?fields=id,email,last_name,first_name', function(response) {
		$('#fname').val(response.first_name);
		$('#lname').val(response.last_name);
		$('#email').val(response.email);
		$('#fb_id').val(response.id);
    });
  }
  
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      updateApplication();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
    }
  }
  
  function myFacebookLogin() {
	  FB.login(function(response)
	  {
		statusChangeCallback(response);
	  }, 
	  {
	  scope: 'public_profile,email'
	  });	  
  }

    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
		$('#fname').val(data.firstName);
		$('#lname').val(data.lastName);
		$('#email').val(data.emailAddress);
		$('#in_id').val(data.id);
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~:(id,first-name,last-name,email-address)?format=json").result(onSuccess).error(onError);
    }
