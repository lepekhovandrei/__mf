require('./bootstrap');
setTimeout(function(){
  $(document).ready(function(){
      $("#filter").keyup(function(){
          var filter = $(this).val(), count = 0;
          $(".search nav ul li").each(function(){
              if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                  $(this).fadeOut();
              } else {
                  $(this).show();
                  count++;
              }
          });
          var numberItems = count;
          $("#filter-count").text("Number of Filter = "+count);
      });
  });
}, 5000);
