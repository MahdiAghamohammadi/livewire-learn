<div>
    @if ($isVisible)
        <div class="justify-content-center align-items-center d-flex"
            style="width: 100%; height: 100vh; background: rgab(0,0,0,0.9); position: fixed; top: 0; left: 0;">
            <div style="width: 350px; height: 200px; background: white; border-radius: 5px;">
                <h4 class="text-center py-3 text-danger">welcome to course</h4>
                <h4 class="text-center py-3 text-secondary">some text</h4>
                <div class="text-center py-3">
                    <button class="btn btn-info px-2" wire:click="$toggle('isVisible')">let's go</button>
                </div>
            </div>
        </div>
    @endif
</div>
