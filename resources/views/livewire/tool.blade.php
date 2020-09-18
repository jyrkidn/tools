<div>
    @if ($error)
        <span>
            {{ $error }}
        </span>
    @endif

    <textarea
        wire:model.lazy="minified"
        cols="30"
        rows="10"
    ></textarea>

    @foreach ($converts as $key => $convert)
        <button type="button" wire:click="convert('{{ $key }}')">{{ $convert::name() }}</button>
    @endforeach

    <textarea
        id="editor"
        cols="30"
        rows="10"
    ></textarea>

</div>
