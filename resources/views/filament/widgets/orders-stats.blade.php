<div class="orders-grid">

    @foreach($this->getStats() as $stat)

        <a href="{{ $stat['url'] }}" class="order-card">

            <div class="card-inner">

                <div class="card-title">
                    {{ $stat['title'] }}
                </div>

                <div class="card-value">
                    {{ $stat['value'] }}
                </div>

                @if($stat['description'])
                    <div class="card-description">
                        {{ $stat['description'] }}
                    </div>
                @endif

            </div>

        </a>

    @endforeach

</div>