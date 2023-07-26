<!-- Modal Edit Client -->
<div id="editClient_<?php echo $row_client['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="edit_client.php">
                <input type="hidden" name="edit_id" value="<?php echo $row_client['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Client Data</h4>
                </div>
                <div class="modal-body">
                    <!-- Add input fields for editing client data -->
                    <div class="form-group">
                        <label>Jenis Gangguan</label>
                        <select class="form-control" name="jenis_gangguan" required>
                            <option value="Lambat" <?php if ($row_client['jenis_gangguan'] == 'Lambat') echo 'selected'; ?>>Lambat</option>
                            <option value="Sering Terputus" <?php if ($row_client['jenis_gangguan'] == 'Sering Terputus') echo 'selected'; ?>>Sering Terputus</option>
                            <option value="Signal Tidak Baik" <?php if ($row_client['jenis_gangguan'] == 'Signal Tidak Baik') echo 'selected'; ?>>Signal Tidak Baik</option>
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
                        <input type="text" class="form-control" name="lantai" value="<?php echo $row_client['lantai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>User/PN</label>
                        <input type="text" class="form-control" name="user_pn" value="<?php echo $row_client['user_pn']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Gangguan</label>
                        <input type="text" class="form-control" name="deskripsi_gangguan" value="<?php echo $row_client['deskripsi_gangguan']; ?>" required>
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
                    <button type="submit" class="btn btn-primary" name="edit_client">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete Client -->
<div id="deleteClient_<?php echo $row_client['id']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="delete_client.php">
                <input type="hidden" name="delete_id" value="<?php echo $row_client['id']; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Client Data</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this client data?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="delete_client">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
