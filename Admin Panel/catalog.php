

<?php
include("./conncection.php");
include("nav.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalog</title>


</head>

<body>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Catalog</h2>
						<?php 
						$sql = "SELECT COUNT(*) as row_count FROM `movies`";
						$result = $con->query($sql);	
$row = $result->fetch_assoc();
$rowCount = $row['row_count'];
?>
						<span class="main__title-stat"><?php echo $rowCount ?> Total</span>

						<div class="main__title-wrap">
					
							<!-- search -->
							<form action="#" class="main__title-form">
  <input type="text" id="searchInput" placeholder="Find movie / tv series..">
  <button type="button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg>
  </button>
</form>

							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- items -->
				<div class="col-12">
					<div class="catalog catalog--1">
						<table class="catalog__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>RATING</th>
									<th>RELEASE</th>
									<th>RUNTIME</th>
									<th>RATED</th>
									<th>POSTER</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
						

							
							
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- end items -->

				<!-- paginator -->
				<div class="col-12">
					
			
					<div class="main__paginator">
			

						



					</div>
				</div>
				<!-- end paginator -->

				
			</div>
		</div>
	</main>
	<!-- end main content -->



	<!-- delete modal -->
	<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Item delete</h4>

						<p class="modal__text">Are you sure to permanently delete this item?</p>

						<div class="modal__btns">
    <a class="modal__btn modal__btn--apply" type="button" href="#" id="deleteItem"><span>Delete</span></a>
    <button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
</div>


					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end delete modal -->

<!-- JS -->
<!-- Move the <script> tag for jQuery to the top -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/smooth-scrollbar.js"></script>
<script src="js/slimselect.min.js"></script>
<script src="js/admin.js"></script>


<script>
  $(document).ready(function() {
    // ... Your existing code ...
	function fetchSearchResults(pageNo) {
      var searchText = $("#searchInput").val().toLowerCase();
      $.ajax({
        url: "search.php",
        method: "GET",
        data: { query: searchText, page_no: pageNo },
        dataType: "json",
        success: function(response) {
          var searchResultsHtml = "";
          $.each(response, function(index, movie) {
            searchResultsHtml += '<tr>';
            searchResultsHtml += '<td><div class="catalog__text">' + movie.id + '</div></td>';
            searchResultsHtml += '<td><div class="catalog__text"><a href="#">' + movie.name + '</a></div></td>';
            searchResultsHtml += '<td><div class="catalog__text catalog__text--rate">' + movie.imdb + '</div></td>';
            searchResultsHtml += '<td><div class="catalog__text">' + movie.release_date + '</div></td>';
            searchResultsHtml += '<td><div class="catalog__text">' + movie.runtime + 'm</div></td>';
            searchResultsHtml += '<td><div class="catalog__text">' + movie.rated + '</div></td>';
            searchResultsHtml += '<td><img class="catalog__text" src="../Main Assests/images/movies/' + movie.image + '" alt="' + movie.name + '" height="100px" width="80px"></td>';
            searchResultsHtml += '<td><div class="catalog__btns">';
            searchResultsHtml += '<a href="update.php?updateid=' + movie.id + '" class="catalog__btn catalog__btn--edit">';
            searchResultsHtml += '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg></a>';
			searchResultsHtml += '<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete" data-itemid="' + movie.id + '">';
            searchResultsHtml += '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg></button>';
            searchResultsHtml += '</div></td></tr>';
          });

          $("table.catalog__table tbody").html(searchResultsHtml);
          updatePaginationLinks(pageNo); // Update pagination links after fetching results
        },
        error: function() {
          // Handle error if search fails
        }
      });
    }



    function updatePaginationLinks(currentPage, totalPages) {
      var paginationHtml = '<ul class="paginator">';
      var disabledClass = currentPage === 1 ? ' disabled' : '';


	  
      // Previous page link
      paginationHtml += '<li class="paginator__item paginator__item--prev' + disabledClass + '">';
      paginationHtml += '<a href="#" data-page="' + (currentPage - 1) + '">';
      paginationHtml += '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z"/></svg>';
      paginationHtml += '</a></li>';

      // Page number links
      var maxPagesToShow = 3; // You can adjust this value based on how many page numbers you want to display
      var startPage, endPage;

      if (totalPages <= maxPagesToShow) {
        // If total pages are less than or equal to maxPagesToShow, show all pages
        startPage = 1;
        endPage = totalPages;
      } else {
        // Calculate the start and end page numbers to show around the current page
        var halfMaxPages = Math.floor(maxPagesToShow / 2);
        startPage = currentPage - halfMaxPages;
        endPage = currentPage + halfMaxPages;

        if (startPage < 1) {
          // If the start page is less than 1, reset the start and end pages
          startPage = 1;
          endPage = maxPagesToShow;
        }

        if (endPage > totalPages) {
          // If the end page is greater than the total pages, reset the start and end pages
          endPage = totalPages;
          startPage = totalPages - maxPagesToShow + 1;
        }
      }

      for (var i = startPage; i <= endPage; i++) {
        var activeClass = currentPage === i ? ' paginator__item--active' : '';
        paginationHtml += '<li class="paginator__item' + activeClass + '">';
        paginationHtml += '<a href="#" data-page="' + i + '">' + i + '</a>';
        paginationHtml += '</li>';
      }

	  

      // Next page link
      disabledClass = currentPage === totalPages ? ' disabled' : '';
      paginationHtml += '<li class="paginator__item paginator__item--next' + disabledClass + '">';
      paginationHtml += '<a href="#" data-page="' + (currentPage + 1) + '">';
      paginationHtml += '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z"/></svg>';
      paginationHtml += '</a></li>';

      paginationHtml += '</ul>';

      $(".main__paginator").html(paginationHtml);

      // Attach event listeners to the pagination links
      $(".paginator__item a").on("click", function(event) {
        event.preventDefault();
        var pageNo = parseInt($(this).data("page"));
        fetchSearchResults(pageNo);
      });
    }

	function handleSearchInput() {
      fetchSearchResults(1); // Start with the first page when searching
    }

    $("#searchInput").on("input", handleSearchInput);

    // Call fetchSearchResults on page load to show all rows initially
    fetchSearchResults(1);


	$("#modal-delete").on("show.bs.modal", function(event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var itemIdToDelete = button.data("itemid"); // Extract item ID from data-itemid attribute

    // Attach the delete URL to the "Delete" button in the modal
    var deleteButton = $(this).find("#deleteItem");
    deleteButton.attr("href", "./delete.php?deleteid=" + itemIdToDelete);
});

});

    // ... Your existing code ...
  
</script>





</body>
</html>