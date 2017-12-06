(function ($) {

  // Ajax functions
  function ajaxGet(request) {
    $.ajax({
        method: 'get',
        // Go to the wordpress rest api and get the request
        url: api_vars.root_url + request,
      })
      .done(function (data) {

        var post = data[0];
        // var slug = post.slug;

        // Append slug to url
        // history.pushState({
        //   page: slug
        // }, null, url);
        $('body').append(post);
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
    var request = 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1';

    console.log(program);

    ajaxGet(request);
  });

})(jQuery);
