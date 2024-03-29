<?php
include("./conncection.php");

$searchQuery = $_GET['query'];

$select = "SELECT * FROM `users` WHERE `username` LIKE '%$searchQuery%'";
$userdetail = mysqli_query($con, $select);

$searchResultsHTML = '';
while ($data_user = mysqli_fetch_assoc($userdetail)) {
    $searchResultsHTML .= '
    <tr>
	<td>
		<div class="catalog__text">'.$data_user['id'].'</div>
	</td>
	<td>
		<div class="catalog__user">
			<div class="catalog__avatar">
				<img src="img/user.svg" alt="">
			</div>
			<div class="catalog__meta">
				<h3>'.$data_user['firstname'].' '.$data_user['lastname'].'</h3>
				<span>'.$data_user['email'].'</span>
			</div>
		</div>
	</td>
	<td>
		<div class="catalog__text">'.$data_user['username'].'</div>
	</td>
	<td>
		<div class="catalog__text">'.$data_user['password'].'</div>
	</td>
	
	
	<td>
		<div class="catalog__text">'.$data_user['datecreated'].'</div>
	</td>
	<td>
		<div class="catalog__btns">
			
			<a href="edit-user.php" class="catalog__btn catalog__btn--edit">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>
			</a>
			<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg>
			</button>
		</div>
	</td>
</tr>
    ';
}

echo $searchResultsHTML;
?>
