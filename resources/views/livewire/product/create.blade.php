<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit="store" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input wire:model="title" type="text" class="form-control" placeholder="Title">
                            </div>
                            <div class="col">
                                <input wire:model="price" type="text" class="form-control" placeholder="Price">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input wire:model="description" type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input wire:model="image" type="file" class="form-control-file" id="image">
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="btn-group" role="group" aria-label="Button Form">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button wire:click="$dispatch('formClose')" type="button" class="btn btn-sm btn-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>