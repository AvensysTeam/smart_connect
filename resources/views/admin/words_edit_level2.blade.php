@extends("layouts.main")
@section('content')

	<!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">
      		<div class="col-md-9">
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
var language_code = @json($language_code);
var language_name = @json($language_name);
var dataSet = []
rows.forEach(function(row){
	var row = [
		"<input type='text' id='wipt_en_" + row.id + "' class='form-control form-control-sm' value='" + row['en'] + "'>",
		"<input type='text' id='wipt_de_" + row.id + "' class='form-control form-control-sm' value='" + row[language_code] + "'>",
		
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
	    url: '/user/languages/level2/update_words',
	    method: 'POST',
	    data: {
	    	id: id,
	    	en:  $('#wipt_en_' + id).val(),
	    	de:  $('#wipt_de_' + id).val(),
	    	language_code : language_code,
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
	      { title: language_name },
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
	  });

})(jQuery);	

</script>

@endsection