<form action="{$URL}?edit=" method="post" enctype="multipart/form-data">
    <div class="form-group m-2">
        <a href="{$URL}">Add user</a>
    </div>
    
    <div class="form-group m-2">
        <input class="form-control" type="number" name="id" value="{$editUser.id}" hidden readonly />
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{$editUser.name}" required />
    </div>
    <div class="form-group m-2">
        <label>description</label>
        <input class="form-control" type="text" name="description" value="{$editUser.description}" required />
    </div>
    <button type="submit" class="btn btn-primary m-2">Edit</button>
</form>