
<div class="col-12">
<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm">Create</a>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('admin/users_tambah')?>" method="post">
                    <div class="form-group">
                        <label for=""><b> Nama Lengkap </b></label>
                        <input type="text" name="nama" autofocus required class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>
                    <div class="form-group">
                        <label for=""><b> Username </b></label>
                        <input type="text" name="username" required class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for=""><b> Password </b></label>
                        <input type="password" name="password" required class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Isi password, bila ingin diubah !</small>
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

<br><br>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Username</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($users->num_rows() > 0){
            $no=1;
            foreach ($users->result() as $t) {
                ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$t->username?></td>
                    <td><?=$t->nama?></td>
                    
                    <td>
                        <a href="<?=base_url('admin/hapus_users/'.$t->id)?>" class="text-white btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?=$t->id?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="edit<?=$t->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?=base_url('admin/update_users/'.$t->id)?>" method="post">
                                            <div class="form-group">
                                                <label for=""><b> Nama Lengkap </b></label>
                                                <input type="text" name="nama" value="<?=$t->nama?>" required class="form-control" placeholder="" aria-describedby="helpId">
                                            
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b> Username </b></label>
                                                <input type="text" name="username" value="<?=$t->username?>" autofocus required class="form-control" placeholder="" aria-describedby="helpId">
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b> Password </b></label>
                                                <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
                                                <small id="helpId" class="text-muted">Isi password, bila ingin diubah !</small>
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