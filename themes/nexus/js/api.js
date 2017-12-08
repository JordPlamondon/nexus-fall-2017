(function ($) {
  console.log('whatever');
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
          console.log(data);
          var post = data[i];
          var image = '';
          var school = post['_nexus_program_school'];
          var title = post['_nexus_program_title'];
          var link = api_vars.home_url + '/' + post['slug'];

          if (post['featured_media']){
            image = post['_embedded']['wp:featuredmedia'][0]['source_url'];
          }
          var article = '<article class="program">';
          article += '<div class="program-link"><a href="' + link + '">'
          article += '<div class="program-image"><img src="' + image + '"></div>'
          article += '<div class="program-school">' + school + '</div>'; 
          article += '<div class="program-title">' + title + '</div>';
          article += '</a></div></article>'
          console.log(link);
          // var slug = post.slug;

          // Append slug to url
          // history.pushState({
          //   page: slug
          // }, null, url);
          $('.search-results').append(article);

        } // for loop
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
    $('.search-results').empty();
    var program = $('select[name*="programfilter"').val(); 
    var province = $('select[name*="provincefilter"').val(); 
    var request = 'wp/v2/nexus_program/?_embed&filter';
    if (program === 'program' && province === 'province'){
      return;
    }
    else if (program === 'program'){
      request += '[provinces]=' + province;
    }
    else if (province === 'province'){
       request += '[program_type]=' + program;
    }
    else {
      request += '[program_type]=' + program + '&filter[provinces]=' + province;
    }
    console.log(program);

    ajaxGet(request);
  });




$(document).ready(function() {
  $('.homestay-button').click(function() {

    $('#dropdown').toggleClass('visible');
  });
});


})(jQuery);

