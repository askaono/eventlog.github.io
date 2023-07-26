<!-- Modal Edit Access Point Data -->
<div id="editAP_<?php echo $row_access_point['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="edit_ap.php">
                <input type="hidden" name="edit_id" value="<?php echo $row_access_point['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Access Point Data</h4>
                </div>
                <div class="modal-body">
                    <!-- Input fields to edit Access Point data -->
                    <!-- You can modify the input fields as needed -->
                    <div class="form-group">
                        <label>Jenis Gangguan</label>
                        <select class="form-control" name="jenis_gangguan" required>
                            <option value="AP Rusak" <?php if ($row_access_point['jenis_gangguan'] == 'AP Rusak') echo 'selected'; ?>>AP Rusak</option>
                            <option value="Kendala Kabel" <?php if ($row_access_point['jenis_gangguan'] == 'Kendala Kabel') echo 'selected'; ?>>Kendala Kabel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <select class="form-control" name="lokasi" required>
                            <option value="Bri 1 Sudirman" <?php if ($row_access_point['lokasi'] == 'Bri 1 Sudirman') echo 'selected'; ?>>Bri 1 Sudirman</option>
                            <option value="Bri 2 Sudirman" <?php if ($row_access_point['lokasi'] == 'Bri 2 Sudirman') echo 'selected'; ?>>Bri 2 Sudirman</option>
                            <option value="GTI Ragunan" <?php if ($row_access_point['lokasi'] == 'GTI Ragunan') echo 'selected'; ?>>GTI Ragunan</option>
                            <option value="PSCF" <?php if ($row_access_point['lokasi'] == 'PSCF') echo 'selected'; ?>>PSCF</option>
                            <option value="Corpu" <?php if ($row_access_point['lokasi'] == 'Corpu') echo 'selected'; ?>>Corpu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" class="form-control" name="lantai" value="<?php echo $row_access_point['lantai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>AP Name</label>
                        <input type="text" class="form-control" name="ap_name" value="<?php echo $row_access_point['ap_name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>AP Serial Number</label>
                        <input type="text" class="form-control" name="ap_serial_number" value="<?php echo $row_access_point['ap_serial_number']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>New AP Serial</label>
                        <input type="text" class="form-control" name="new_ap_serial" value="<?php echo $row_access_point['new_ap_serial']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Gangguan</label>
                        <input type="text" class="form-control" name="deskripsi_gangguan" value="<?php echo $row_access_point['deskripsi_gangguan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="Close" <?php if ($row_access_point['status'] == 'Close') echo 'selected'; ?>>Close</option>
                            <option value="Open" <?php if ($row_access_point['status'] == 'Open') echo 'selected'; ?>>Open</option>
                            <option value="Pending" <?php if ($row_access_point['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="update_ap">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete Access Point Data -->
<div id="deleteAP_<?php echo $row_access_point['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="delete_ap.php">
                <input type="hidden" name="delete_id" value="<?php echo $row_access_point['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Access Point Data</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="delete_ap">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
