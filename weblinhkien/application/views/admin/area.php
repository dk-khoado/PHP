<style>
	.list-group-item:hover {
		background: #62E381;
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	//ajax load tỉnh thành (thành công)
	function LoadDis( id ) {
		url = "<?php echo base_url() . 'ApiAjax/loadDistrist'; ?>"

		$.ajax( {
			url: url,
			method: 'POST',
			async: false,
			data: {
				'ID_city': id
			},
			dataType: 'json'
		} ).done( function ( kq ) {
			$( '#state' ).children().remove();
			if ( kq != "" ) {
				
				$.each( kq, function ( k, v ) {

					data = "<li class='list-group-item'>" + v.quan_huyen_name + "</li>";
					$( '#state' ).append( data );

				} );
			} else {
				
				data = "<li class='list-group-item'>Chưa thêm quận huyện</li>";
				$( '#state' ).append( data );
			}

		} );
		$( '#btnAddDis' ).attr( "onclick", "AddDistrist(" + id + ")" );
	};


	//ajax load thành phố (thành công)
	function LoadCity() {
		//phần load ajax city
		urlload = "<?php echo base_url() . 'ApiAjax/loadcity'; ?>"
		$.ajax( {
			url: urlload,
			method: 'POST',
			async: false,
			dataType: 'json'
		} ).done( function ( kq ) {

			$( '#city' ).children().remove();
			$.each( kq, function ( k, v ) {
				var a = v.city_name;

				data = '<li class="list-group-item"  onClick="LoadDis(' + v.ID_city + ')"> <div class="row"> <div class="col-10">' + v.city_name + '</div> <div class="col-1 fas fa-trash" onClick="DelCity(' + v.ID_city + ')"></div> <div class="col-1 fas fa-edit" data-toggle="modal" data-target="#ModalEdit" onClick="LoadCityNameModal(' + v.ID_city + ',`' + a + '`)"> </div> </li>';



				$( '#city' ).append( data );


			} );

		} );

	}

	//ajax thêm thành phố (thành công)
	function AddCity() {
		urladd = "<?php echo base_url() . 'ApiAjax/insertcity'; ?>"
		name = $( '#addcity' ).val();
		$.ajax( {
			url: urladd,
			method: 'POST',
			async: false,
			data: {
				'city_name': name
			},
			dataType: 'json'
		} );
		LoadCity();
		$( '#addcity' ).val( "" );

	}
	//ajax xóa thành phố (thành công)
	function DelCity( id ) {
		url = "<?php echo base_url() . 'ApiAjax/removeCity'; ?>"

		$.ajax( {
			url: url,
			async: false,
			method: 'POST',
			dataType: 'json',
			data: {
				'ID_city': id
			}
		} );

		LoadCity();
	}
	//ajax thêm tỉnh thành (chưa đươc)(do t ko biết cách lấy ID_city)
	function AddDistrist( id ) {
		url = "<?php echo base_url() . 'ApiAjax/AddDistrist'; ?>"
		name = $( '#distrist' ).val();
		$.ajax( {
			url: url,
			method: 'POST',
			async: false,
			data: {
				'ID_city': id,
				'quan_huyen_name': name
			},
			dataType: 'json'
		} );
		LoadDis( id );
		$( '#distrist' ).val( "" );

	}
	//thành công
	function UpdateCity( id, name ) {
		url = "<?php echo base_url() . 'ApiAjax/UpdateCity'; ?>"
		console.log( "aa" );
		$.ajax( {
			url: url,
			method: 'POST',
			async: false,
			data: {
				'city_name': name,
				'ID_city': id
			},
		} ).done( function ( callback ) {
			console.log( callback )
		} );

		LoadCity();
	}
	//thành công
	function LoadCityNameModal( ID_city, city_name ) {
		$( '#update_city' ).val( city_name );
		$( '#btnUpdate' ).attr( "onclick", "UpdateCity(" + ID_city + ",'" + city_name + "')" );
		$( "#update_city" ).on( "input", function () {
			// Print entered value in a div box
			$( '#btnUpdate' ).attr( "onclick", "UpdateCity(" + ID_city + ",'" + $( '#update_city' ).val() + "')" );
		} );
	}


	$( document ).ready( function () {
		LoadCity();

	} );
</script>


<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">
				<?php echo $header ?> </h2>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-6">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<input type="text" id="addcity">

					<button type="button" class="btn btn-success mb-3" onClick="AddCity()">Thêm thành phố</button>

					<div style="height: 500px; overflow-y: scroll; overflow-x: hidden">
						<ul class="list-group" id="city">



						</ul>
						<!-- The Modal -->
						<div class="modal fade" id="ModalEdit">
							<div class="modal-dialog">
								<div class="modal-content">


									<div class="modal-header">
										<h4 class="modal-title">Chỉnh sửa tên tỉnh thành</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>


									<div class="modal-body">
										<label for="update_city">Name:</label>
										<input type="text" class="p-1" value="" id="update_city" name="Edit_City">
									</div>


									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal" id="btnUpdate">Update</button>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
		<div class="col-6">
			<div class="row">
				<div class="col-10">

					<input type="text" id="distrist">

					<button type="button" id="btnAddDis" class="btn btn-success mb-3">Thêm quận huyện</button>

					<div style="height: 650px; overflow-y: scroll; overflow-x: hidden">
						<ul class="list-group" id="state">
							<!--
							<li class="list-group-item">Cras justo odio</li>
							
-->
						</ul>
					</div>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
	</div>
</div>