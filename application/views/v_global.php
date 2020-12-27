<div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-success float-right">Sembuh</span>
                                <h2 style="color:#1c84c6">Sembuh <i class="fa fa-smile-o"></i></h2>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" style="color:#1c84c6"><?php echo $sembuh['value']?> Orang</h1>
                                <div class="stat-percent font-bold text-success"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-info float-right">Positif</span>
                                <h2 style="color: #23c6c8">Positif <i class="fa fa-hospital-o"></i></h2>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" style="color:#23c6c8"><?php echo $positif['value'] ?> Orang</h1>
                                <div class="stat-percent font-bold text-info"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-title">
                                <span class="label label-danger float-right">Meninggal</span>
                                <h2 style="color:#ed5565">Meninggal <i class="fa fa-ambulance"></i></h2>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins" style="color:#ed5565"><?php echo $meninggal['value'] ?> Orang</h1>
                                <div class="stat-percent font-bold text-navy"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="ibox">
                            <div class="ibox-title">
                                <span class="label label-default float-right">Negara</span>
                                <h2>Negara <i class="fa fa-globe"></i></h2>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">Global</h1>
                                <div class="stat-percent font-bold text-navy"></div>
                            </div>
                        </div>
                    </div> 
                        
            </div>
      
          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">

                        <span class="text-left" style="color: red"> Data Kasus Corona Virus  Berdasarkan Seluruh Dunia</span>
                      <!-- <button class="btn btn-sm btn-primary mb-2"data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus"></i>tambah barang</button> -->
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                            
                         
                        </div>
                    </div>
                    <div class="ibox-content">
                            
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example text-center" id="example" >
                    <thead>
                    <tr>
                        <th>No</th>
                         <th>Negara</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                       
                    </tr>
                    </thead>

                    <?php
                     $no=1;
                    foreach ($global as $global_api ) :?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $global_api ['attributes']['Country_Region']?></td>
                            <td><?php echo $global_api ['attributes']['Confirmed']?></td>
                            <td><?php echo $global_api ['attributes']['Recovered']?></td>
                            <td><?php echo $global_api ['attributes']['Deaths']?></td>
                                            
                    <?php endforeach?>
                    <tbody>
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

