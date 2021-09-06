function cari_absen(){

	$.ajax({
		url:"cari_absen.php",
		type:"POST",
		dataType:"json",
		data:{
			id_user:$('#id_user').val()
		},
		success:function(hasil){

			$('#nilai_ips').val(hasil.ips);
			$('#nilai_ipa').val(hasil.ipa);
			$('#nilai_pkn').val(hasil.pkn);
			$('#nilai_bind').val(hasil.bindo);
			$('#nilai_mtk').val(hasil.mtk);
			$('#nilai_bing').val(hasil.bing);
			$('#nilai_rrt').val(hasil.agama);


			
			



			

			
		}

	});
}
