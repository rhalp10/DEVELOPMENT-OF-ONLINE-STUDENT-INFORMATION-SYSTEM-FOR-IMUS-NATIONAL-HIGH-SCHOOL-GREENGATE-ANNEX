<?php 
include('../session.php');


require_once("../class.user.php");

  
$auth_user = new USER();
// $page_level = 3;
// $auth_user->check_accesslevel($page_level);
$pageTitle = "Manage News";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php 
      include('x-meta.php');
    ?>


  <?php 
  include('x-css.php');
  ?>
 



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
<?php 
include('x-nav.php');
?>

<div class="container-fluid">
  <div class="row">
      <?php 
    include('x-sidenav.php');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage News</h1>
        
      </div>

      <div class="table-responsive">
         <button type="button" class="btn btn-sm btn-success add" >
            Add 
          </button>
         <br><br>
        <table class="table table-striped table-sm" id="news_data">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>


<div class="modal fade" id="news_modal" tabindex="-1" role="dialog" aria-labelledby="product_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="news_modal_title">Add Attendance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="product_modal_content">
    
      <form method="post" id="news_form" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="news_title">Title<span class="text-danger">*</span></label>
                  <input type="title" class="form-control" id="news_title" name="news_title" placeholder="" value="" required="">
                </div>
                <div class="form-group col-md-12">
                  <label for="news_content">Content<span class="text-danger">*</span></label>
                   <textarea class="form-control" id="news_content" name="news_content" placeholder="" value="" required=""></textarea>
                </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="news_ID" id="news_ID" />
        <input type="hidden" name="operation" id="operation" />
        <div class="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary submit" id="submit_input" value="submit_news">Submit</button>
        </div>
      </div>
       </form>
    </div>
  </div>
</div>


      </div>

<div class="modal fade" id="delnews_modal" tabindex="-1" role="dialog" aria-labelledby="product_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="news_modal_title">Delete this News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
        <div class="btn-group">
        <button type="submit" class="btn btn-danger" id="News_delform">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </main>
  </div>
</div>

<?php 
include('x-script.php');
?>
        <script type="text/javascript">
   


          $(document).ready(function() {
             
            var dataTable = $('#news_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
              url:"datatable/news/fetch.php?x=admin",
              type:"POST"
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

              $.ajax({
                url:"datatable/news/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                  alertify.alert(data).setHeader('News');
                  $('#news_form')[0].reset();
                  $('#news_modal').modal('hide');
                  dataTable.ajax.reload();
                }
              });
           
          });

          $(document).on('click', '.add', function(){
            $('#news_modal_title').text('Add News');
            $("#news_title").prop("disabled", false);
            $("#news_content").prop("disabled", false);
            $('#news_form')[0].reset();
            $('#news_modal').modal('show');
            $('#submit_input').show();
            $('#submit_input').text('Submit');
            $('#submit_input').val('submit_news');
            $('#operation').val("submit_news");
          });

          $(document).on('click', '.view', function(){
            var news_ID = $(this).attr("id");
            $('#news_modal_title').text('View News');
            $('#news_modal').modal('show');
            $("#submit_input").hide();
            
             $.ajax({
                url:"datatable/news/fetch_single.php",
                method:'POST',
                data:{action:"News_view",news_ID:news_ID},
                dataType    :   'json',
                success:function(data)
                {

                $("#news_title").prop("disabled", true);
                $("#news_content").prop("disabled", true);

                  $('#news_title').val(data.news_Title);
                  $('#news_content').val(data.news_Content);

                  $('#submit_input').hide();
                  $('#news_ID').val(news_ID);
                  $('#submit_input').text('View');
                  $('#submit_input').val('news_view');
                  $('#operation').val("news_view");
                  
                }
              });


            });
          $(document).on('click', '.edit', function(){
            var news_ID = $(this).attr("id");
            $('#news_modal_title').text('Edit News');
            $('#news_modal').modal('show');
            $("#submit_input").show();

            
             $.ajax({
                url:"datatable/news/fetch_single.php",
                method:'POST',
                data:{action:"News_view",news_ID:news_ID},
                dataType    :   'json',
                success:function(data)
                {

                  
                $("#news_title").prop("disabled", false);
                $("#news_content").prop("disabled", false);

                  $('#news_title').val(data.news_Title);
                  $('#news_content').val(data.news_Content);

                  $('#submit_input').show();
                  $('#news_ID').val(news_ID);
                  $('#submit_input').text('Update');
                  $('#submit_input').val('news_update');
                  $('#operation').val("news_edit");
                  
                }
              });


            });
            $(document).on('click', '.delete', function(){
            var news_ID = $(this).attr("id");
             $('#delnews_modal').modal('show');
             $('.submit').hide();
             
             $('#news_ID').val(news_ID);
            });

           


          $(document).on('click', '#News_delform', function(event){
             var news_ID =  $('#news_ID').val();
            $.ajax({
             type        :   'POST',
             url:"datatable/news/insert.php",
             data        :   {operation:"delete_News",news_ID:news_ID},
             dataType    :   'json',
             complete     :   function(data) {
               $('#delnews_modal').modal('hide');
               alertify.alert(data.responseText).setHeader('Delete this News');
               dataTable.ajax.reload();
               dataTable_product_data.ajax.reload();
                
             }
            })
           
          });
          
          } );


        </script>
        </body>

</html>
