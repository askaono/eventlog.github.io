<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Jenis Gangguan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jenis_gangguan" value="<?php echo $row['jenis_gangguan']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lokasi:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lokasi" value="<?php echo $row['lokasi']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lantai:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lantai" value="<?php echo $row['lantai']; ?>">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">AP Name:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ap_name" value="<?php echo $row['ap_name']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">AP Serial Number:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ap_serial_number" value="<?php echo $row['ap_serial_number']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">New AP Serial:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="new_ap_serial" value="<?php echo $row['new_ap_serial']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Deskripsi Gangguan:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi_gangguan" value="<?php echo $row['deskripsi_gangguan']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Status:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>">
                    </div>
                </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to delete?</p>
				<h2 class="text-center"><?php echo $row['jenis_gangguan'].' '.$row['lokasi']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
        </div>
    </div>
</div>
