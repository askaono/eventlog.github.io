<!-- add_modal_client.php -->

<div id="addnewClient" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="add_client.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Client</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="modal-label">Jenis Gangguan:</label>
                        <select name="jenis_gangguan" class="form-control">
                            <option value="Lambat">Lambat</option>
                            <option value="Sering Terputus">Sering Terputus</option>
                            <option value="Signal Tidak Baik">Signal Tidak Baik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="modal-label">Lokasi:</label>
                        <select name="lokasi" class="form-control">
                            <option value="Bri 1 Sudirman">Bri 1 Sudirman</option>
                            <option value="Bri 2 Sudirman">Bri 2 Sudirman</option>
                            <option value="GTI Ragunan">GTI Ragunan</option>
                            <option value="PSCF">PSCF</option>
                            <option value="Corpu">Corpu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="modal-label">Lantai:</label>
                        <input type="text" name="lantai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="modal-label">User/PN:</label>
                        <input type="text" name="user_pn" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="modal-label">Deskripsi Gangguan:</label>
                        <textarea name="deskripsi_gangguan" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="modal-label">Status:</label>
                        <select name="status" class="form-control">
                            <option value="Close">Close</option>
                            <option value="Open">Open</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
