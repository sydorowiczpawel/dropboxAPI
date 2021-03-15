<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="addFileModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Add File -->
                <form method="POST" action="/addFile" enctype="multipart/form-data">
                @csrf
                    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    <td><input type="submit" value="Add" name="Add"></td>
                </form>
            </div>
        </div>
    </div>
</div>