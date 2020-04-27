<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Project Test</title>

    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/navbar-fixed-top.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/components.css'); ?>" rel="stylesheet">
    <!-- <link href="<?php echo base_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />  -->

    
  </head>

  <body>

    
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          	
          	<div class="nafa">
          		<img src="<?php echo base_url('assets/img/1.png'); ?>"> <b>Nafa Ubach / Admin Balloney</b>
          	</div> 

          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <button class="button"><b>Close</b></button>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
    	<div class="col-md-8">
		    <div class="jumbotron1">

          <div class="kt-portlet kt-portlet--tabs">
            <div class="kt-portlet__head">
              <div class="kt-portlet__head-label">
                <h2 class="kt-portlet__head-title">
                  <b>MASTER PRODUK</b>
                </h2>
              </div>
              <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-right" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_portlet_base_demo_1_tab_content" role="tab">
                      <i class="flaticon-multimedia"></i> <h4> MASTER TEMA</h4>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_2_tab_content" role="tab">
                      <i class="flaticon-cogwheel-2"></i> <h4> ADDITIONAL OPTIONS</h4> 
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_tab_content" role="tab">
                      <i class="flaticon-lifebuoy"></i> <h4> IMPORTANT NOTE</h4>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <h5 class="page-header"><b style="color: #be3233;">BUAT MASTER ADDITIONAL OPTIONS</b></h5>

            <div class="kt-portlet__body">
              <div class="tab-content">
                <div class="tab-pane active" id="kt_portlet_base_demo_1_tab_content" role="tabpanel">
                	<?php foreach($tampil as $t){?>
	                  <form class="form-horizontal" method="post" action="<?php echo base_url('Welcome/proses_update');?>">
	                    
	                      <div class="form-group">
	                        <label>ID Additional Options</label>
	                        <input type="hidden" name="id_test" class="form-control" value="<?php echo $t->id_test ?>" id="exampleInputEmail1">
	                        <input type="text" name="id_additional" id="id_additional" class="form-control" value="<?php echo $t->kode_additional ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Nama Additional Options</label>
	                        <input type="text" name="nama_addtional" id="nama_addtional" class="form-control" value="<?php echo $t->nama_produk ?>" id="exampleInputPassword1" required>
	                      </div>

	                      <div class="form-group">
	                        <label>Harga Pokok Produksi (HPP)</label>
	                        <input type="text" name="harga_pokok" id="harga_pokok" class="form-control" value="<?php echo $t->harga_pokok ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Harga Jual</label>
	                        <input type="text" name="harga_jual" id="harga_jual" class="form-control" value="<?php echo $t->harga_jual ?>" id="exampleInputPassword1" required>
	                      </div>

	                        <button type="submit" class="btn btn-primary" style="">Simpan</button>
	                    
	                  </form>
	                <?php } ?>
                </div>

                <div class="tab-pane" id="kt_portlet_base_demo_2_tab_content" role="tabpanel">
                  <?php foreach($tampil as $t){?>
	                  <form class="form-horizontal" method="post" action="<?php echo base_url('Welcome/proses_update');?>">
	                    
	                      <div class="form-group">
	                        <label>ID Additional Options</label>
	                        <input type="hidden" name="id_test" class="form-control" value="<?php echo $t->id_test ?>" id="exampleInputEmail1">
	                        <input type="text" name="id_additional" id="id_additional" class="form-control" value="<?php echo $t->kode_additional ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Nama Additional Options</label>
	                        <input type="text" name="nama_addtional" id="nama_addtional" class="form-control" value="<?php echo $t->nama_produk ?>" id="exampleInputPassword1" required>
	                      </div>

	                      <div class="form-group">
	                        <label>Harga Pokok Produksi (HPP)</label>
	                        <input type="text" name="harga_pokok" id="harga_pokok" class="form-control" value="<?php echo $t->harga_pokok ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Harga Jual</label>
	                        <input type="text" name="harga_jual" id="harga_jual" class="form-control" value="<?php echo $t->harga_jual ?>" id="exampleInputPassword1" required>
	                      </div>

	                        <button type="submit" class="btn btn-primary" style="">Simpan</button>
	                    
	                  </form>
	                <?php } ?>
                </div>

                <div class="tab-pane" id="kt_portlet_base_demo_3_tab_content" role="tabpanel">
                  <?php foreach($tampil as $t){?>
	                  <form class="form-horizontal" method="post" action="<?php echo base_url('Welcome/proses_update');?>">
	                    
	                      <div class="form-group">
	                        <label>ID Additional Options</label>
	                        <input type="hidden" name="id_test" class="form-control" value="<?php echo $t->id_test ?>" id="exampleInputEmail1">
	                        <input type="text" name="id_additional" id="id_additional" class="form-control" value="<?php echo $t->kode_additional ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Nama Additional Options</label>
	                        <input type="text" name="nama_addtional" id="nama_addtional" class="form-control" value="<?php echo $t->nama_produk ?>" id="exampleInputPassword1" required>
	                      </div>

	                      <div class="form-group">
	                        <label>Harga Pokok Produksi (HPP)</label>
	                        <input type="text" name="harga_pokok" id="harga_pokok" class="form-control" value="<?php echo $t->harga_pokok ?>" id="exampleInputEmail1" required>
	                      </div>

	                      <div class="form-group">
	                        <label for="exampleInputPassword1">Harga Jual</label>
	                        <input type="text" name="harga_jual" id="harga_jual" class="form-control" value="<?php echo $t->harga_jual ?>" id="exampleInputPassword1" required>
	                      </div>

	                        <button type="submit" class="btn btn-primary" style="">Simpan</button>
	                    
	                  </form>
	                <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="bs-example" data-example-id="simple-table">
            <table class="table">
              <caption style="width: 100%; color: #be3234; padding-bottom: 0.1px; border-bottom:1px solid #828282;"><b>DATA MASTER ADDTIONAL OPTIONS</b></caption>
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <?php 
                foreach($tampil as $t){
              ?>

              <tbody>
                <tr>
                  <td>1.<?php echo $t->kode_additional ?></td>
                  <td><?php echo $t->nama_produk ?></td>
                  <td><?php echo $t->harga_pokok ?></td>
                  <td><?php echo $t->harga_jual ?></td>
                  <td>
                    <a href="" class="btn1 btn1-primary" style="">Detail</a>
                    <a href="" class="btn1 btn1-warning" style="">Edit</a>
                    <a href="" class="btn1 btn1-danger" style="">Delete</a>
                  </td>
                </tr>
                
              </tbody>
            <?php } ?>
            </table>
          </div>
          
		    </div>
		  </div> 

  		<div class="col-md-4">
  		    <div class="jumbotron2">
  		    	<div class="bs-example">
  				      <div class="col-md-12">
                  <a href="#">
                    <div class="mini-stat clearfix bg-waskita1 rounded">
                        <span class="mini-stat-icon"><span class="glyphicon glyphicon-home" style="color: #be3234"></span></span>
                        <div class="mini-stat-info">
                            <span>DASHBOARD</span>
                             Merupakan preview dari aktifitas bisnisyang anda lakukan
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-12">
                  <a href="#">
                    <div class="mini-stat clearfix bg-waskita1 rounded">
                        <span class="mini-stat-icon"><span class="glyphicon glyphicon-shopping-cart" style="color: #be3234"></span></span>
                        <div class="mini-stat-info">
                            <span>TRANSAKSI</span>
                            Melihat seluruh aktifitas transaksi yang telah di lakukan
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-12">
                  <a href="#">
                    <div class="mini-stat clearfix bg-produk rounded">
                        <span class="mini-stat-icon"><span class="glyphicon glyphicon-briefcase" style="color: #0576fb"></span></span>
                        <div class="mini-stat-info">
                            <span>PRODUK</span>
                            Menambahkan produk beserta komponen dari produk
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-12">
                  <a href="#">
                    <div class="mini-stat clearfix bg-waskita1 rounded">
                        <span class="mini-stat-icon"><span class="glyphicon glyphicon-user" style="color: #be3234"></span></span>
                        <div class="mini-stat-info">
                            <span>MEMBER</span>
                            Data member dan aktifitas transaksi yang dilakukan
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-12">
                  <a href="#">
                    <div class="mini-stat clearfix bg-waskita1 rounded">
                        <span class="mini-stat-icon"><span class="glyphicon glyphicon-list-alt" style="color: #be3234"></span></span>
                        <div class="mini-stat-info">
                            <span>TRANSAKSI</span>
                            Total Rencana Objek Audit
                        </div>
                    </div>
                  </a>
                </div>
              
  				  </div>
  		    </div>
  		</div>
    </div> 


    <div class="footer">
    	<p class="nine">Nine Cloud © 2020</p>
    </div>

   
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.bundle.js'); ?>"></script>
  </body>
</html>
