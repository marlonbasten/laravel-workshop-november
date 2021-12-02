<ul>
    @foreach($hospitals as $hospital)
           <li><span wire:click="toggleTreeItem('h{{ $hospital->id }}')">{{ $hospital->name }}</span></li>
            @if ($hospital->locations && in_array('h'.$hospital->id, $openItems))
                <ul>
                    @foreach($hospital->locations as $location)
                        <li><span wire:click="toggleTreeItem('l{{ $location->id }}')">{{ $location->street }}, {{ $location->city }}</span></li>
                        @if ($location->facilities && in_array('l'.$location->id, $openItems))
                            <ul>
                                @foreach($location->facilities as $facility)
                                    <li>{{ $facility->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </ul>
            @endif
    @endforeach
</ul>
