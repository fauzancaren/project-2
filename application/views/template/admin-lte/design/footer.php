        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Halaman ini dimuat dalam {elapsed_time} detik, Penggunaan memory {memory_usage}
          - <span id='panel1'><p>&nbsp</p></span>
        </div>
        <strong>Copyright &copy; 2017-<?=date("Y")?> <a href="http://www.talagasoft.com">Talagasoft</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
  </body>
</html>
<!-- Bootstrap 3.3.2 -->
<link href="<?=base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('assets/fontawesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />    
    <!-- Ionicons -->
    <link href="<?=base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?=base_url('assets/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('assets/admin-lte/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('assets/admin-lte/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/admin-lte/css/my_style.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("themes/admin/style.css")?>">

    <!--
    <link rel="stylesheet" type="text/css" href="<?=base_url("/themes/standard/style.css")?>">
    -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url('assets/bootstrap-3.3.5/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('assets/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>    
    <!-- FastClick -->
    <script src='<?=base_url('assets/fastclick/fastclick.min.js');?>'></script>
    <!-- Jvectormap 1.2.2 -->
    <script src="<?=base_url('assets/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>    
    <!-- Jvectormap 1.2.2 -->
    <script src="<?=base_url('assets/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>    
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/admin-lte/js/app.min.js');?>" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=base_url('assets/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/admin-lte/js/printThis.js');?>" type="text/javascript"></script>
    <!-- dashboard 
    <script src="<?=base_url('assets/admin-lte/js/dashboard2.js')?>" type="text/javascript" ></script>
    <script src="<?=base_url('assets/chartjs/Chart.js')?>" type="text/javascript" ></script>
    -->

    <script src="<?=base_url('assets/admin-lte/js/mylib.js');?>" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">  
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/datatables/dataTables.bootstrap.css">
    <!-- <script type="text/javascript" language="javascript" src="<?=base_url()?>xxxxxassets/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url('js/lib_datagrid.js')?>" type="text/javascript" ></script>
-->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('js/lib.js')?>" type="text/javascript" ></script>
    <script src="<?=base_url('js/lib_error.js')?>" type="text/javascript" ></script>

    <script src="<?=base_url('assets/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <link href="<?=base_url('assets/datepicker/datepicker.css')?>" rel="stylesheet" type="text/css" >

    <script src="<?=base_url('js/autocomplete/jquery.autocomplete.min.js')?>" type="text/javascript" ></script>
    <link href="<?=base_url('js/autocomplete/jquery.autocomplete.css');?>" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('js/lib_input.js')?>" type="text/javascript" ></script>


<script language="JavaScript">
//$().ready(function(){

    
//});    
</script>

<script type="text/javascript">
    var CI_ROOT = "<?=base_url()?>index.php/";
    var CI_BASE = "<?=base_url()?>";
    var _controller="";
    
    $().ready(function(){
        $("#mmOptions").hide();
    })
    function _add(){
      if(_controller==""){
        alert("controller is empty !");
        return;
      }
      $("#divTable").hide();
      $("#content").html("<img src='"+CI_BASE+"/images/loading.gif'/>");
      var _url = _controller + "/add";
      var _param={};
      $.ajax({ type: "GET", url: _url, data: _param,
          success: function(msg){
                //var result = eval('('+msg+')');
                $('#content').html(msg);    
                return true;
            },
            error: function(msg){
                console.log(msg);
            }
      }); 

    }
    function _delete(){
      alert("delete");
    }
    function _edit(){
      alert("edit");
    }
    function _print(){
      alert("pprint");
    }
    function _import(){
      alert("import");
    }
    function _export(){
      alert("export");
    }
    function _refresh(){
      $("#dgTable").datagrid("reload");
    }

</script>