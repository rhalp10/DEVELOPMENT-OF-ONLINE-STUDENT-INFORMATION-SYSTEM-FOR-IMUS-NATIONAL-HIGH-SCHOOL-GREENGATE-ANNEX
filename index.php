<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    GNU General Public License version 2 or later; see licensing/GPL LICENSE.txt
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Basic PHP Modal+Ajax</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
   
    body{
      padding-top: 5em;
      min-height: 600px;
    }
    .fadein  {
      -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
         -moz-animation: fadein 2s; /* Firefox < 16 */
          -ms-animation: fadein 2s; /* Internet Explorer */
           -o-animation: fadein 2s; /* Opera < 12.1 */
              animation: fadein 2s;
    }
    @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
   footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
    .loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

  @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
  }
  .navbar-inverse .navbar-nav>li>a {
      color: white;
  }
  .navbar-inverse .navbar-brand {
    color: white;
  }
  .navbar-inverse {
      background-color: #4CAF50;
      border-color: #080808;
  }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav" >
            <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Page 1-1</a></li>
                  <li><a href="#">Page 1-2</a></li>
                  <li><a href="#">Page 1-3</a></li>
                </ul>
              </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#ActionModal" data-id="L-1" id="action"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1>INDEX</h1>
        </div>
      </div>
    </div>
<!-- Modal -->
<div id="ActionModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" id="modal_header" style="border-radius:  5px 5px 0px 0px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div id="modal-loading"  style="display: none; text-align: center;">
          <center>
          <div class="loader"></div>
          </center>
        </div>
        <div id="modal-content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- /Modal -->
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- <script src="js/jquery-2.1.3.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
     <script type="text/javascript">

    $(document).ready(function(){
    
    $(document).on('click', '#action', function(e)
    {
      e.preventDefault();
      // get the value of data-id of each clicked elements
      var data_id = $(this).data('id');
      // removing all content of selected id
      var  action = data_id.slice(0,1);
      var  id = data_id.slice(2);
      console.log(data_id);

      if (action == 'A') {
        var mh = document.getElementById("modal_header");
        mh.className = mh.className.replace(/\bbg-info\b/g, "");
        mh.className = mh.className.replace(/\bbg-danger\b/g, "");
        mh.classList.add("modal-header");
        mh.classList.add("bg-success");
        $('#modal-title').html('Add New Data');
        $('#modal-loading').show();
      }
      else if (action == 'E'){
        var mh = document.getElementById("modal_header");
        mh.className = mh.className.replace(/\bbg-success\b/g, "");
        mh.className = mh.className.replace(/\bbg-danger\b/g, "");
        mh.classList.add("modal-header");
        mh.classList.add("bg-info");
        $('#modal-title').html('Edit This Data');
        $('#modal-loading').show();
      }
      else if (action == 'D'){

        var mh = document.getElementById("modal_header");
        mh.className = mh.className.replace(/\bbg-success\b/g, "");
        mh.className = mh.className.replace(/\bbg-info\b/g, "");
        mh.classList.add("bg-danger");
        $('#modal-title').html('Delete This Data');
        $('#modal-loading').show();
      }
      else if (action == 'S'){
        var x = document.getElementById("add-fName").innerHTML;
         console.log(x);

      }
      else{
        $('#modal-title').html('Error');
        $('#modal-loading').show();
      }
      $.ajax({
        url: 'data.php',
        type: 'POST',
        data: 'data_id='+data_id,
        dataType: 'html'
      })
      .done(function(success_data_fetch){
          $('#modal-content').html('');  
          $('#modal-content').html(success_data_fetch);  
          $('#modal-loading').hide();
      })
      .fail(function(){
        $('#target_div').html('<div class="panel-heading">Something went wrong</div><div class="panel-body"><i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...</div><div class="panel-footer"></div>');
       
      });
    
    });
  });

    function submitForm(key){
      var id = $("#id");
      var fName = $("#fName");
      var mName = $("#mName");
      var lName = $("#lName");
      var email = $("#email");
      console.log(fName.val());
      if (isNotEmpty(fName) && isNotEmpty(mName) && isNotEmpty(lName) && isNotEmpty(email)){
        $.ajax({
          url: 'action.php',
          method: 'POST',
          dataType: 'text',
          data: {
            key: key,
            id: id.val(),
            fName: fName.val(),
            mName: mName.val(),
            lName: lName.val(),
            email: email.val()
          },
          success: function(response){
            alert(response);
            console.log(response);
          }

        });
      }
    }
    function  isNotEmpty(caller){
      if (caller.val() == '') {
        caller.css('border','1px solid red');
        return false;
      }
      else{
        caller.css('border','');
        return true;

      }

    }
    function append(){
      var tbody = document.getElementById("tbody");
            tbody.append("<tr>asdasdasdasd</tr>");
    }
    </script>
  </body>
</html>
