
<div class="col-12">
<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm">Create</a>



<br><br>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Status Official</th>
            <th>Nama Toko</th>
            <th>Alamat Toko</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($pelapak->num_rows() > 0){
            $no=1;
            foreach ($pelapak->result() as $t) {
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$t->username?></td>
                    <td><?=$t->status_official?></td>
                    <td><?=$t->nama_toko?></td>
                    <td><?=$t->alamat_toko?></td>
                    <td><?=$t->status?></td>
                    <td>
                        <a href="<?=base_url('admin/hapus_pelapak/'.$t->id_pelapak)?>" class="text-white btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$t->id_pelapak?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?=$t->id_pelapak?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?=base_url('admin/update_pelapak/'.$t->id_pelapak)?>" method="post">
                                            <div class="form-group">
                                                <label for=""><b> Username </b></label>
                                                <input type="text" name="username" value="<?=$t->username?>" required class="form-control" placeholder="" aria-describedby="helpId">
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for=""><b> Password </b></label>
                                                <input type="password" name="password" required class="form-control" placeholder="" aria-describedby="helpId">
                                                <small id="helpId" class="text-muted">Isi password, bila ingin diubah !</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                
                                                <select name="status" class="form-control" required>
                                                    <option value="" readonly>-- Pilih Salah Satu --</option>
                                                    <option value="santri" <?=$t->status_official=='santri' ? 'selected' : ''  ?>>Santri</option>
                                                    <option value="official" <?=$t->status_official=='official' ? 'selected' : ''  ?>>Official</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b>Nama Toko</b></label>
                                                <input type="text" name="nama_toko" value="<?=$t->nama_toko?>" required class="form-control" placeholder="" aria-describedby="helpId">
                                            
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b> Alamat </b></label>
                                                <textarea name="alamat" id="" cols="30" rows="5" required class="form-control" placeholder="Nama Transportasi"><?=$data['keterangan']?></textarea>
                                                <!-- <small id="helpId" class="text-muted">Terdiri dari 3 digit</small> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                
                                                <select name="status" class="form-control" required>
                                                    <option value="" readonly>-- Pilih Salah Satu --</option>
                                                    <option value="santri" <?=$t->status_official=='santri' ? 'selected' : ''  ?>>Santri</option>
                                                    <option value="official" <?=$t->status_official=='official' ? 'selected' : ''  ?>>Official</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detail<?=$t->id_pelapak?>">
                          Detail
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="detail<?=$t->id_pelapak?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail Pelapak</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <table width="100%" class="table">
                                            <tr>
                                                <th>
                                                    Username
                                                </th>
                                                <td>
                                                    <?=$t->username?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Status Official
                                                </th>
                                                <td>
                                                    <?=$t->status_official?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Nama Toko
                                                </th>
                                                <td>
                                                    <?=$t->nama_toko?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Alamat Toko
                                                </th>
                                                <td>
                                                    <?=$t->alamat_toko?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Provinsi
                                                </th>
                                                <td>
                                                    <?php
                                                    $provinsi = $this->db->where('id_prov', $t->provinsi_id)->get('provinsi')->row_array();
                                                    echo $provinsi['nama'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Kabupaten
                                                </th>
                                                <td>
                                                    <?php
                                                    $kabupaten = $this->db->where('id_kab', $t->city_id)->get('kabupaten')->row_array();
                                                    echo $kabupaten['nama'];
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Alamat
                                                </th>
                                                <td>
                                                    <?=$t->alamat?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Kode Pos
                                                </th>
                                                <td>
                                                    <?=$t->kode_pos?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Nomer Hp
                                                </th>
                                                <td>
                                                    <?=$t->nomor_hp?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    E-Mail
                                                </th>
                                                <td>
                                                    <?=$t->email?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Rating
                                                </th>
                                                <td>
                                                    <?=$t->rating?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Saldo
                                                </th>
                                                <td>
                                                    <?=$t->saldo?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Status
                                                </th>
                                                <td>
                                                    <?=$t->status?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Alamat Utama
                                                </th>
                                                <td>
                                                    <?=$t->status?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Rekening Pelapak
                                                </th>
                                                <td>
                                                    <ul>

                                                        <?php
                                                        $pelapak = $this->db->where('pelapak_id', $t->id_pelapak)->get('rekening_pelapak');
                                                        if($pelapak->num_rows() > 0){
                                                            foreach ($pelapak->result() as $p) {
                                                                ?>
                                                                <li>
                                                                    <b><?=$p->nama_bank?></b> | <?=$p->nomor_rekening?> | <i><?=$p->atas_nama?></i>
                                                                </li>            
                                                                <?php
                                                            }
                                                        }else{
                                                            ?>
                                                                <div class="alert alert-danger" role="alert">
                                                                    Belum memiliki Rekening
                                                                </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
                <?php

                $no++;
            }
        }
        ?>
    </tbody>
</table>

</div>