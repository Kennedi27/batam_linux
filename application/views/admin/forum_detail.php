<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-warning">
        <div class="box-header">
          <small>Topik : </small>
          <h4><b>Judul Topik</b></h4>
        </div>
        <div class="box-body">
        </div>
      </div>
    </div>
    <div class="col-xs-8">
      <div class="box box-primary">
        <div class="box-header">
          <b><i class="fa fa-comments-o"></i> Komentar </b>
        </div>
      </div>
        <div class="box-body">
          <hr>
        <a href="#" onclick="ck()" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><img src="http://localhost/batam_linux/assets/images/anggota/26239036_559459107751664_3010410472022404778_n.jpg" class="chat_profil"></a>
</div>
<script>
function ck(){
    $('[data-toggle="popover"]').popover('show');   
}
</script>
      </div>
    <div class="col-xs-4">
      <div class="box box-info">
       <div class="box-header">
          <b><i class="fa fa-bullhorn"></i> Topik Lainnya</b>
       </div>
       <hr>
       <div class="box-body">
         <i class="fa fa-circle-o" style="color: green;"></i> <a href=""> <?php echo ucwords("dasd sada") ?> </a>
         <hr>
       </div>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
  .chat_profil {
    width : 50px;
    border-radius: 50%;
    height: 50px;
    position: relative;
    margin-top: 2.8px;
    margin-left: 2.8px;
  }
  .wrap-chat {
    width: 55px;
    height: 55px;
    z-index: -1;
    background-color: green;
    border-radius: 50%;
  }
  td {
    padding-bottom: 15px;
  }
</style>