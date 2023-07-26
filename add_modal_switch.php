<!-- Add New Switch -->
<div class="modal fade" id="addnewSwitch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Switch</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="add_switch.php">
                        <input type="hidden" name="add_switch"> <!-- Menambahkan input hidden dengan nama "add_switch" untuk menandai jenis perangkat yang ditambahkan -->

                        <!-- Isi formulir sesuai dengan kolom pada tabel untuk Switch -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Jenis Gangguan:</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="jenis_gangguan" required>
                                    <option value="Switch Rusak">Switch Rusak</option>
                                    <option value="Kendala Power">Kendala Power</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Lokasi:</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="lokasi" required>
                                    <option value="Bri 1 Sudirman">Bri 1 Sudirman</option>
                                    <option value="Bri 2 Sudirman">Bri 2 Sudirman</option>
                                    <option value="GTI Ragunan">GTI Ragunan</option>
                                    <option value="PSCF">PSCF</option>
                                    <option value="Corpu">Corpu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Lantai:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lantai" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Nama Switch:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_switch" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Deskripsi Gangguan:</label>
                            </div>
                            <div class="col-sm-10">
                                <textarea name="deskripsi_gangguan" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Status:</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" required>
                                    <option value="Close">Close</option>
                                    <option value="Open">Open</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
