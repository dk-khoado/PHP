<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title"><?php echo $header ?> </h2>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<button class="btn">
	<div class=""></div>
</button>
<div class="row">
	<div class="col-12">
		<table class="table">
			<thead>
				<th>Tên </th>
				<th>Số điện thoại</th>
				<th>Email</th>
				<th>#</th>
			</thead>
			<tbody>
				<?php
				foreach ($data as $key => $value) {
					echo "<tr>";
					echo "<td>" . $value->username . "</td>";
					echo "<td>" . $value->numberphone . "</td>";
					echo "<td>" . $value->email . "</td>";
					echo '<td><button class="btn"><div class="fas fa-edit"></div></button>';
					echo '<button class="btn"><div class="fas fa-edit"></div></button>';
					echo '</td>';
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>

</div>
<script>
	function confirmDelete() {
		if (confirm("Are you sure?")) {
			return true;
		} else
			return false;
	}
</script>