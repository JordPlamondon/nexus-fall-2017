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
        for (var i = 0; i < data.length; i++){
          var post = data[i];
          var school = post["_nexus_program_school"];
          var title = post["_nexus_program_title"];
          // var slug = post.slug;
          
          // Append slug to url
          // history.pushState({
          //   page: slug
          // }, null, url);
          $('article').append(school, title);
        }
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
    var province = $('select[name*="provincefilter"').val(); 
    var request = '';
    if (program === 'program' && province === 'province'){
      return;
    }
    else if (program === 'program'){
      request = 'wp/v2/nexus_program/?filter[provinces]=' + province;
    }
    else if (province === 'province'){
       request = 'wp/v2/nexus_program/?filter[program_type]=' + program;
    }
    else {
      request = 'wp/v2/nexus_program/?filter[program_type]=' + program + '&filter[provinces]=' + province;
    }
    console.log(program);

    ajaxGet(request);
  });

})(jQuery);
