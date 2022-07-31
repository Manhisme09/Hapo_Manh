$(document).ready(function() {
    if (localStorage.getItem("filterState") == "swap")
    {
      $('.filter').toggleClass('active');
    }

    $('.btn-filter').click(function() {
      if (localStorage.getItem("filterState") == "swap") {
        localStorage.removeItem("filterState");
      }
      else {
        localStorage.setItem("filterState", "swap");
      }
      $('.filter').toggleClass('active');

    });
});
