<div>
    <div>
        <h2>一覧画像</h2>
        @foreach ($images as $image)
            <img src="{{ Storage::url($image->file_path) }}" width='100px' height='100px'>
        @endforeach
    </div>

    <button wire:click="add_image">もっと読み込む</button>
</div>
