<!-- Add New Access Point -->
<div class="modal fade" id="addnewAP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Access Point</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="add.php">
                        <input type="hidden" name="add_ap"> <!-- Menambahkan input hidden dengan nama "add_ap" untuk menandai jenis perangkat yang ditambahkan -->

                        <!-- Isi formulir sesuai dengan kolom pada tabel untuk Access Point -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Jenis Gangguan:</label>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" name="jenis_gangguan" required>
                                    <option value="AP Rusak">AP Rusak</option>
                                    <option value="Kendala Kabel">Kendala Kabel</option>
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
                                <label class="control-label modal-label">AP Name:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ap_name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">AP Serial Number:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ap_serial_number" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">New AP Serial:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="new_ap_serial" required>
                            </div>
                        </div>
                        <div class="form-group">
                             <label class="modal-label">Deskripsi Gangguan:</label>
                             <textarea name="deskripsi_gangguan" class="form-control" required></textarea>
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
                        <!-- Tombol "Save" untuk menyimpan data -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
