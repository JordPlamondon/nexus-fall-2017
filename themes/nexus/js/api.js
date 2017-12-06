(function ($) {

  // Ajax functions
  function ajaxGet(request) {
    console.log(api_vars.root_url + request);
    $.ajax({
        method: 'get',
        // Go to the wordpress rest api and get the request
        url: api_vars.root_url + request,
      })
      .done(function (data) {
        console.log(data);
        var post = data[0];
        // var slug = post.slug;

        // Append slug to url
        // history.pushState({
        //   page: slug
        // }, null, url);
        $('article').append(post);
      });
  }

  // Enable the back button to cycle through quote history
  window.onpopstate = function (e) {
    var url = api_vars.home_url;
    var state = e.state.page;
    if (state !== null) {
      window.location.href = url + '/' + state;
    }
  }

  $('.program-filter-submit').on('click', function (event){
    event.preventDefault();
    var program = $('select[name*="programfilter"').val(); 
    var request = 'wp/v2/nexus_program/?filter[program_type]=' + program;

    console.log(program);

    ajaxGet(request);
  });

})(jQuery);
