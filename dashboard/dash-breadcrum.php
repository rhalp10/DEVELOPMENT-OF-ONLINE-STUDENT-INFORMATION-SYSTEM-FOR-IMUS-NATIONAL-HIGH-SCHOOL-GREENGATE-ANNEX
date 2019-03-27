<?php 
function bread_dashboard(){
	?>
	<div class="breadcrumb-line breadcrumb-line-component">
		<ul class="breadcrumb">
			<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
		</ul>
	</div>
	<?php
}
function bread_account(){
	?>
	<div class="breadcrumb-line breadcrumb-line-component">
		<ul class="breadcrumb">
			<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
			<li><a href="datatable_basic.html">Datatables</a></li>
			<li class="active">Basic</li>
		</ul>
	</div>
	<?php
}

if (empty($page)) {
	bread_dashboard();
} 
else {
}

?>