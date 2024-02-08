@extends("layouts.main")
@section('content')

	<!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">

		<div class="row">
	  		<div class="col-md-12">
	  			<div class="ms-panel w-50">
		            <div class="ms-panel-header">
		              <h1>Add New Word</h1>
		            </div>
		            <div class="ms-panel-body">
		              <form method="post" action="/user/languages/admin/update_words">
		              	@csrf
		                <div class="form-group">
			                <label for="exampleSelect">New word</label>
			                <input type="text" name="new_word" class="form-control form-control-sm" value="">
		                </div>
		                <button class="btn btn-primary mt-4 d-block w-40" type="submit">Save</button>
		              </form>
		            </div>
		        </div>
	  		</div>
	  	</div>

        <div class="row">
      		<div class="col-md-12">
	      		<div class="ms-panel">
		            <div class="ms-panel-header">
		              <h6>All words for translation</h6>
		            </div>
		            <div class="ms-panel-body">
		              <div class="table-responsive">
		                <table id="words_table" class="table table-hover w-100"></table>
		              </div>
		            </div>
		        </div>
	    	</div>
        </div>
    </div>

<script>

var rows = @json($rows);
var dataSet = []
rows.forEach(function(row){
	var row = [
		"<input type='text' id='wipt_en_" + row.id + "' class='form-control form-control-sm' value='" + row.en + "'>",
		"<input type='text' id='wipt_de_" + row.id + "' class='form-control form-control-sm' value='" + row.de + "'>",
		"<input type='text' id='wipt_fr_" + row.id + "' class='form-control form-control-sm' value='" + row.fr + "'>",
		"<input type='text' id='wipt_IT_" + row.id + "' class='form-control form-control-sm' value='" + row.IT + "'>",
		"<input type='text' id='wipt_nl_" + row.id + "' class='form-control form-control-sm' value='" + row.nl + "'>",
		"<input type='text' id='wipt_DK_" + row.id + "' class='form-control form-control-sm' value='" + row.DK + "'>",
		"<input type='text' id='wipt_S_" + row.id + "' class='form-control form-control-sm' value='" + row.S + "'>",
		"<input type='text' id='wipt_PL_" + row.id + "' class='form-control form-control-sm' value='" + row.PL + "'>",
		"<input type='text' id='wipt_LT_" + row.id + "' class='form-control form-control-sm' value='" + row.LT + "'>",
		"<input type='text' id='wipt_N_" + row.id + "' class='form-control form-control-sm' value='" + row.N + "'>",
		"<div id='wbtn_save_" + row.id + "'  class='save_word_btn invisible' onclick='saveWord(" + row.id + ")'>Save</div>"
	];
	dataSet.push(row)
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function saveWord( id ){
	$.ajax({
	    url: '/user/languages/admin/update_words',
	    method: 'POST',
	    data: {
	    	id: id,
	    	en:  $('#wipt_en_' + id).val(),
	    	de:  $('#wipt_de_' + id).val(),
	    	fr:  $('#wipt_fr_' + id).val(),
	    	IT:  $('#wipt_IT_' + id).val(),
	    	nl:  $('#wipt_nl_' + id).val(),
	    	DK:  $('#wipt_DK_' + id).val(),
	    	S:   $('#wipt_S_' + id).val(),
	    	PL:  $('#wipt_PL_' + id).val(),
	    	LT:  $('#wipt_LT_' + id).val(),
	    	N:   $('#wipt_N_' + id).val(),
	    },
	    success: function(res){
	    	$("#wbtn_save_" + id).removeClass("visible");
	    	$("#wbtn_save_" + id).addClass("invisible");

	    },
	    error: function(err){
	    	console.log(err);
	    }
	});
}

(function($) {
 	'use strict';
	

	  var words_table = $('#words_table').DataTable( {
	    data: dataSet,
	    columns: [
	      { title: "English" },
	      { title: "Deutsch" },
	      { title: "French" },
	      { title: "Italy" },
	      { title: "Netherlands" },
	      { title: "Denmark" },
	      { title: "Svenska" },
	      { title: "Polski" },
	      { title: "Lithuana" },
	      { title: "Norska" },
	      { title: "Action"}
	    ],
	  });

	  rows.forEach(function(row){
		  	console.log(row.id);
		  	let en_ipt = $('#wipt_en_' + row.id);
		  	en_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let de_ipt = $('#wipt_de_' + row.id);
		  	de_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let fr_ipt = $('#wipt_fr_' + row.id);
		  	fr_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let IT_ipt = $('#wipt_IT_' + row.id);
		  	IT_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let nl_ipt = $('#wipt_nl_' + row.id);
		    nl_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let DK_ipt = $('#wipt_DK_' + row.id);
		  	DK_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let S_ipt = $('#wipt_S_' + row.id);
		  	S_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let PL_ipt = $('#wipt_PL_' + row.id);
		  	PL_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let LT_ipt = $('#wipt_LT_' + row.id);
		  	LT_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});
		  	let N_ipt = $('#wipt_N_' + row.id);
		  	N_ipt.on('input', function(){
		  		$("#wbtn_save_" + row.id).removeClass("invisible");
		  		$("#wbtn_save_" + row.id).addClass("visible");
		  	});

	  });

  	

})(jQuery);	

</script>

@endsection