<div class="modal fade" id="newFolderModal" tabindex="-1" role="dialog" aria-labelledby="newFolderModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Create new folder -->
                <form method="POST" action="/createFolder" enctype="multipart/form-data">
                @csrf
                <td><button class="btn btn-outline-primary" type="submit">Create</button></a></td>
                <td><input type="text" name="folderName" placeholder="new folder name"></td>
                </form>
            </div>
        </div>
    </div>
</div>