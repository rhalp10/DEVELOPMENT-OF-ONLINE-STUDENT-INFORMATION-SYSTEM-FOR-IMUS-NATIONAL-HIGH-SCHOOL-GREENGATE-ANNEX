
 <!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">News Management</h5>

		</div>
		<button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#news_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
		 ADD NEWS</button>


		<table id="news_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th width="10%">Title</th>
                                                <th width="10%">Date</th>
                                                <th width="10%">Action</th>
                                              </tr>
                                            </thead>
                                          </table>
	</div>
	<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="news_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">ADD ACCOUNT</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="news_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body news">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Title</label>
													<input type="text" class="form-control" id="news_title" name="news_title" placeholder="">
												</div>
											</div>
										</div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12 " id="znews_content1">
                          <label>News</label>
                           <textarea class="form-control" name="news_content" id="news_content" style="min-height: 400px;"></textarea>
                           
                        </div>
                        <div class="col-sm-12 " id="znews_content"></div>
                      </div>
                    </div>
										
							
									<div class="modal-footer">
                      <input type="hidden" name="news_ID" id="news_ID" />
                      <input type="hidden" name="operation" id="operation" value="Add" />
                      <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->


 <script type="text/javascript" language="javascript" >
$(document).ready(function () {

	 var dataTable = $('#news_data').DataTable({

    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/news/fetch.php",
      type:"POST",
      data:{admin:1}
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#news_form', function(event){
    event.preventDefault();
    var news_title = $('#news_title').val();
    var news_content = $('#news_content').val();
    if(news_title != '' && news_content != '' )
    {
            $.ajax({
              url:"datatable/news/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#news_form')[0].reset();
                $('#news_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
       
    }
    else
    {
      alert("Fields are Required");
    }
  });
$(document).on('click', '.view', function(){
    var news_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/news/fetch_single.php",
      type:"POST",
      data:{news_ID:news_ID},
      dataType:"json",
      success:function(data)
      {
        $("#news_title").prop("disabled", true);
        $("#news_content").prop("disabled", true);
        $('#news_modal').modal('show');
        $('#news_title').val(data.news_Title);

        $('#znews_content1').hide();
        $('#znews_content').show();
        $('#znews_content').text(data.news_Content);
        $('#action').hide();
        $('#operation').hide();
        $('.modal-title').text("View News");
         $('#news_ID').val(news_ID);
       

   
      }
    });
  });
  $(document).on('click', '.update', function(){
    var news_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/news/fetch_single.php",
      type:"POST",
      data:{news_ID:news_ID},
      dataType:"json",
      success:function(data)
      {
        $("#news_title").prop("disabled", false);
        $("#news_content").prop("disabled", false);
        $('#news_modal').modal('show');
        $('#news_title').val(data.news_Title);
        $('#news_content').val(data.news_Content);
         $('#znews_content1').show();
         $('#znews_content').hide();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('#action').show();
        $('#operation').show();
        $('.modal-title').text("Update News");
            $('#news_ID').val(news_ID);

   
      }
    });
  });
  $(document).on('click', '.add', function(){
        $('.ztitle#news_title').val('');
        $('#news_content').text('');
        $('#action').val("Submit");
        $('#operation').val("Add");
        $('.modal-title').text("Add News");
           $('#znews_content1').show();
         $('#znews_content').hide();
        $("#news_title").prop("disabled", false);
        $("#news_content").prop("disabled", false);
        document.getElementById("news_form").reset();
        $('#news_form')[0].reset();
  });
  $(document).on('click', '.delete', function(){
    var news_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/news/delete.php",
        type:"POST",
        data:{news_ID:news_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});


</script>