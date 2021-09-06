function cari_knn(){

	$.ajax({
		url:"cari_knn.php",
		type:"POST",
		dataType:"json",
		data:{
			id_user:$('#id_user').val()
		},
		success:function(hasil){

			$('#A01').val(hasil.A01);
			$('#A03').val(hasil.A03);
			$('#A06').val(hasil.A06);
			$('#A08').val(hasil.A08);
			$('#nama_lengkap').val(hasil.nama_lengkap);
			// $('#nilai_bing').val(hasil.bing);
			// $('#nilai_rrt').val(hasil.agama);


			
			



			

			
		}

	});
}
