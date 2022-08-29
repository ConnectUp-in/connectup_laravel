@foreach ($fields ?? [] as $field)
    <div class="form-row {{ $field['type'] == 'select' ? 'nogap' : 'nogap' }}">

        @if ($field['type'] == 'select')
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- FORM SELECT -->
                <div class="form-select">
                    <span class="form-select-title">{{ $field['title'] }}</span>
                    <select id="{{ $field['identifier'] }}" name="{{ $field['identifier'] }}"
                        data-title="{{ $field['title'] }}"
                        {{ $field['multiple'] ?? '' ? 'multiple class=multi-select' : 'class=single-select' }}>
                        @foreach ($field['options'] ?? [] as $option)
                            <option value="{{ $option['value'] }}" {{ $option['selected'] ?? false ? 'selected' : '' }}>
                                {{ $option['title'] }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- /FORM SELECT -->
            </div>
            <!-- /FORM ITEM -->
        @elseif ($field['type'] == 'boolean')
            <div class="switch-option w-100">
                <p class="switch-option-title">
                    {{ $field['title'] }}
                </p>
                <p class="switch-option-text">
                    {{ $field['placeholder'] ?? '' }}
                </p>
                <div class="form-switch {{ $field['value'] ? 'active' : '' }}" onclick="updateCheck(this)">
                    <input type="hidden" name="{{ $field['identifier'] }}" value="{{ $field['value'] ?? '0' }}">
                    <!-- FORM SWITCH BUTTON -->
                    <div class="form-switch-button"></div>
                    <!-- /FORM SWITCH BUTTON -->
                </div>
                <!-- /FORM SWITCH -->
            </div>
            <!-- /SWITCH OPTION -->
        @else
            <!-- FORM ITEM -->
            <div class="form-item">
                <!-- FORM INPUT -->
                <div
                    class="form-input {{ $field['value'] ?? '' ? 'active' : '' }} {{ $field['type'] == 'textarea' ? 'mid-textarea' : '' }} {{ $field['required'] ? 'required' : '' }}">
                    <label for="{{ $field['identifier'] }}">{{ $field['title'] }}</label>
                    @if ($field['type'] == 'textarea')
                        <textarea id="{{ $field['identifier'] }}" name="{{ $field['identifier'] }}"
                            placeholder="{{ $field['placeholder'] ?? '' }}">{{ $field['value'] ?? '' }}</textarea>
                    @elseif ($field['type'] == 'select')
                    @else
                        <input type="{{ $field['type'] }}" id="{{ $field['identifier'] }}"
                            name="{{ $field['identifier'] }}" value="{{ $field['value'] ?? '' }}"
                            placeholder="{{ $field['placeholder'] ?? '' }}"
                            {{ $field['required'] ?? false ? 'required' : '' }}>
                        />
                    @endif
                </div>
                <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
        @endif
    </div>
@endforeach
