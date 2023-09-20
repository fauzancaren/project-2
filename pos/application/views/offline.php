<div id="dlgOffline"  name='dlgOffline' class="easyui-dialog" 
    style="width:600px;height:400px;padding:5px;" 
    closed="true" >
    <p>Downloading master data, please wait...</p>
    <div class="progress"></div>
    <div class="thumbnail">
        <img src="<?=base_url("images/loading_little.gif")?>">
        <p id='dlgOffline_msg_loading'>Loading...</p>
        <p id='dlgOffline_msg'></p>        
    </div>
</div>
<style>
.progress {
    display: block;
    text-align: center;
    width: 0;
    height: 3px;
    background: red;
    transition: width .3s;
}
.progress.hide {
    opacity: 0;
    transition: opacity 1.3s;
}    
</style>
<script language="JavaScript">
    
    var _counter_item=0;
    var _timer_offline=null;
    var _item_master=null;
    var _online=true;
    
    var _data_bar = [];
    for (var i = 0; i < 100000; i++) {
        var tmp = [];
        for (var i = 0; i < 100000; i++) {
            tmp[i] = 'hue';
        }
        _data_bar[i] = tmp;
    };

    _counter_item=localStorage.getItem("maxon_item_counter");
    if(_counter_item==null){
        _counter_item=0;
    }
    //_timer_offline=setTimeout(download_master_data,6000);
    
    Storage.prototype.setObj = function(key, obj) {
        return this.setItem(key, JSON.stringify(obj))
    }
    Storage.prototype.getObj = function(key) {
        return JSON.parse(this.getItem(key))
    }
    Storage.prototype.addItemMaster = function(row){
        var i=row.length;
        for(ii=0;ii<i;ii++){
            item_no=row[ii].item_number;
            localStorage.setObj('maxon_item_'+item_no,row[ii]);   
        }
        localStorage.setItem("maxon_item_counter",_counter_item);
    }
    function download_master_data(){
        $("#dlgOffline_msg_loading").html("Loading counter : "+_counter_item);
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        //console.log(percentComplete);
                        $('.progress').css({
                            width: percentComplete * 100 + '%'
                        });
                        if (percentComplete === 1) {
                            //$('.progress').addClass('hide');
                            $('.progress').css({width:'1%'});
                        }
                    }
                }, false);
                xhr.addEventListener("progress", function (evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        //console.log(percentComplete);
                        $('.progress').css({
                            width: percentComplete * 100 + '%'
                        });
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: "<?=base_url("index.php/inventory/download_item/")?>/" + _counter_item,
            data: _data_bar,
            success: function (data) {                
                if(IsJsonString(data)){
                    var result = eval('('+data+')');                    
                    if(result.success){
                        if(result.eof){
                            _counter_item=0;
                            
                        } else {
                            item_data=result.rows;
                            $("#dlgOffline_msg").html($("#dlgOffline_msg").html()+"<br>"+item_data[0].item_number+" - "+item_data[0].description);
                            localStorage.addItemMaster(item_data);
                            
                        }
                    }
                }
            }
        });    
        
        _counter_item++;
        _timer_offline=setTimeout(download_master_data,34000);
    
               
                
    }
    function dlgOffline_show(){
        if(_online){
            $("#txtOffline").html("Offline");
            _online=false;            
            log_msg("Online");            
        } else {
            $("#txtOffline").html("Online");
            _offline=true;            
            log_msg("Offline");
        }
        $("#dlgOffline").dialog({modal:true,title:"Downloading..."}).dialog("open");
        

    }

</script>
