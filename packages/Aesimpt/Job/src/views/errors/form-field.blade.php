@if ($errors->has($name))
    <p class="alert-danger field-error">
        <span>
            <span> {{ $errors->first($name) }}</span>
         </span>
    </p>
@endif