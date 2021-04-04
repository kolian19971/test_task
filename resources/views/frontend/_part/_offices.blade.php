@if(isset($offices) && count($offices))

    <?php
        $i = 1;
    ?>

    @foreach($offices as $key => $office)
        <div
            data-key="{{ $key }}"
            class="office">
            <div class="title">
                {{ $i++ }}) {{ $office['name'] }}
            </div>

            <div class="description">

                @if(isset($office['region']) && is_array($office['region']))
                    <div class="line">
                        {{ $office['region']['region'] }} Region, {{ $office['city'] }} City,
                    </div>
                @endif

                <div class="line">
                    {{ $office['zip'] }}
                </div>

            </div>

        </div>
    @endforeach
@endif
