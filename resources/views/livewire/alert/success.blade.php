<div>
    @if($isOpen && $message)
        <div class="livewire-alert">
            <div>
                <div class="livewire-alert__message">
                    {{$message}}
                </div>
                <div class="d-flex justify-content-center">
                    <button
                        class="btn btn btn-custom-size btn-pronia-primary"
                        wire:click="closeModal"
                    >{{__('Продолжить')}}</button>
                </div>
            </div>
        </div>
    @endif
</div>
