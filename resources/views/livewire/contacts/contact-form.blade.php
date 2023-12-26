<form class="contact-form" wire:submit="submit">
    <div class="group-input">
        <div class="form-field me-lg-30 mb-35 mb-lg-0">
            <input type="text" wire:model="first_name" placeholder="Имя*" class="input-field"/>
            @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-field mb-35">
            <input type="text" wire:model="last_name" placeholder="Фамилия*" class="input-field"/>
            @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="group-input mb-35">
        <div class="form-field me-lg-30 mb-35 mb-lg-0">
            <input type="text" wire:model="phone" placeholder="Телефон*" class="input-field"/>
            @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-field">
            <input type="text" wire:model="email" placeholder="Электронная почта*" class="input-field"/>
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="form-field mb-5">
        <textarea wire:model="message" placeholder="Введите сообщение*" class="textarea-field"></textarea>
        @error('message') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="contact-button-wrap">
        <button type="submit" class="btn btn btn-custom-size btn-pronia-primary">
            <span wire:loading.remove>{{__('Отправить')}}</span>
            <i class="fa fa-spinner" aria-hidden="true" wire:loading ></i>
        </button>
    </div>
</form>
