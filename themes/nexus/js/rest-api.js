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
        var slug = post.slug;
        var title = post.title.rendered;
        var content = post.content.rendered;
        var source = post._qod_quote_source;
        var sourceUrl = post._qod_quote_source_url;
        var url = api_vars.home_url + '/' + slug;

        // Append slug to url
        history.pushState({
          page: slug
        }, null, url);
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

})(jQuery);
