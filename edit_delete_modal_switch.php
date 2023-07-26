<!-- Modal Edit -->
<div id="editSwitch_<?php echo $row_switch['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="edit_switch.php">
                <input type="hidden" name="edit_id" value="<?php echo $row_switch['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Switch Data</h4>
                </div>
                <div class="modal-body">
                    <!-- Tambahkan input fields sesuai dengan kolom tabel Switch -->
                    <div class="form-group">
                    <label class="modal-label">Jenis Gangguan:</label>
                        <select name="jenis_gangguan" class="form-control">
                            <option value="Switch Rusak">Switch Rusak</option>
                            <option value="Kendala Power">Kendala Power</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select class="form-control" name="lokasi" required>
                            <option value="Bri 1 Sudirman" <?php if ($row_client['lokasi'] == 'Bri 1 Sudirman') echo 'selected'; ?>>Bri 1 Sudirman</option>
                            <option value="Bri 2 Sudirman" <?php if ($row_client['lokasi'] == 'Bri 2 Sudirman') echo 'selected'; ?>>Bri 2 Sudirman</option>
                            <option value="GTI Ragunan" <?php if ($row_client['lokasi'] == 'GTI Ragunan') echo 'selected'; ?>>GTI Ragunan</option>
                            <option value="PSCF" <?php if ($row_client['lokasi'] == 'PSCF') echo 'selected'; ?>>PSCF</option>
                            <option value="Corpu" <?php if ($row_client['lokasi'] == 'Corpu') echo 'selected'; ?>>Corpu</option>
                        </select>
                    
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" class="form-control" name="lantai" value="<?php echo $row_switch['lantai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Switch</label>
                        <input type="text" class="form-control" name="nama_switch" value="<?php echo $row_switch['nama_switch']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Gangguan</label>
                        <textarea class="form-control" name="deskripsi_gangguan" rows="3" required><?php echo $row_switch['deskripsi_gangguan']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="Close" <?php if ($row_client['status'] == 'Close') echo 'selected'; ?>>Close</option>
                            <option value="Open" <?php if ($row_client['status'] == 'Open') echo 'selected'; ?>>Open</option>
                            <option value="Pending" <?php if ($row_client['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="update_switch">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div id="deleteSwitch_<?php echo $row_switch['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="delete_switch.php">
                <input type="hidden" name="delete_id" value="<?php echo $row_switch['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Switch Data</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="delete_switch">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
